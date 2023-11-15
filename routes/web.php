<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::name('services.')->prefix('services')->group(function() {
    Route::get('/', 'ServiceController@index')->name('index');
    Route::get('/create', 'ServiceController@create')->name('create');
    Route::post('/create', 'ServiceController@store')->name('store');


    });
    /* Route::name('services.')->group(function () {
    }); */

    Route::get('/order', 'OrderController@create')->name('order_now');
    Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('/get_support', 'GetSupportController@index')->name('get_support.index');
});
