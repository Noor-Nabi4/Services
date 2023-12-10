<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\City;
use App\Models\Order;
use App\Models\State;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{
    public function index(){
        $Category = (new Category)->getAllServicesCategory();
        return view('Orders.index',compact('Category'));
    }
    /* public function create(){

    } */
    /* public function checkout(){
        return view('Orders.Checkout.checkout');
    } */
    public function checkoutProduct(Request $request,Product $product){
        $states = Cache::get('states');
        if($states == null){
            $states = State::all();
            Cache::add('states', $states, now()->addMinutes((60*24*30)));
        }



        return view('Orders.Checkout.checkout',compact('product','states'));

    }
    public function store(Request $request){
        try{
            $merchant_id = env('MERCHANT_ID', '');
            $secured_key = env('SECURED_KEY', '');
            $product_id = $request->input('product_id');
            $product  = Product::find($product_id);
            $data =$request->all();
            $data['user_id'] = Auth::user()->id;
            $order =Order::create($data);
            $BASKET_ID = $order->id;
            $token = $this->getAccessToken($merchant_id, $secured_key,$product,$BASKET_ID);
            // dd($token);
            $return = [
                'message' => 'success',
                'TOKEN' => $token,
                'BASKET_ID' => $BASKET_ID,
                'MERCHANT_ID' => $merchant_id
            ];
            return response()->json($return);
        }
        catch(Exception $e){
            dd($e);
        }
    }
    public function Pay(Request $request){

    }
    public function SUCCESS(Request $request){
        dd($request->all());
    }
    public function FAILURE(Request $request){
        $original_basket_id = $request->basket_id;
        $merchant_id = env('MERCHANT_ID', '');
        $order =Order::find($original_basket_id);
        $response = $this->processResponse($merchant_id, $original_basket_id, $order->TXNAMT, $request->all());
        dd($response);
    }
    private function getAccessToken($merchant_id, $secured_key,$product,$BASKET_ID) {
        $basket_id = $BASKET_ID;
        $trans_amount = $product->discounted_amount;
        $tokenApiUrl = 'https://ipg1.apps.net.pk/Ecommerce/api/Transaction/GetAccessToken';
        // $tokenApiUrl = 'https://ipguat.apps.net.pk/Ecommerce/api/Transaction/GetAccessToken';
        $urlPostParams = sprintf(
        'MERCHANT_ID=%s&SECURED_KEY=%s&TXNAMT=%s&BASKET_ID=%s',
        $merchant_id,
        $secured_key,
        $trans_amount,
        $basket_id
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $tokenApiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $urlPostParams);
        curl_setopt($ch, CURLOPT_USERAGENT, 'CURL/PHP PayFast Example');
        $response = curl_exec($ch);
        curl_close($ch);
        $payload = json_decode($response);
        // dd($payload);
        $token = isset($payload->ACCESS_TOKEN) ? $payload->ACCESS_TOKEN: '';
        return $token;
    }
    function processResponse($merchant_id, $original_basket_id, $txnamt, $response){
        dd($response);
        $err_code = $response['err_code'];
        $response_key = $response['Response_Key'];
        $secretword = env('SECREETWORD','');
        $response_string = sprintf("%s%s%s%s%s", $merchant_id,
        $original_basket_id, $secretword, $txnamt, $err_code);
        $response_hash = hash('MD5', $response_string);
        /* if (strtolower($response_hash) != strtolower($response_key)) {
            return null;
        } */
        return [
            'transaction_id'=>$response['transaction_id'],
            'code' => $response['err_code'],
            'message' => $response['err_msg'],
            'basket_id' =>$response['basket_id'],
            'Response_Key' => $response['Response_Key'],
            'payment_name' => $response['payment_name'],
        ];
    }
    private  function generateOrderNo(){
        $BASKET_ID = 'ORDER' . now()->format('YmdHis') . Str::random(5);
        $order = Order::where('order_id', $BASKET_ID)->first();
        // dd($order);
        if( !empty($order) &&$order->order_id == $BASKET_ID ){
            $this->generateOrderNo();
        }
        return $BASKET_ID;
    }
    public function getallCitiesByState($id,$ajax=0){
        $cities = City::where('state_id',$id)->get();
        return response()->json($cities);
    }
}
