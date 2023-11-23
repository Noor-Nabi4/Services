<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'name',
        'amount',
        'min_value',
        'max_value',
        'avg_time',
        'start_time_from',
        'start_time_to',
        'speed_from',
        'speed_to',
        'description',
        'guarranty'
    ];
    public function servicesGrouping($services){
        $servicesGrouping=[];
        foreach($services as $data){
            $servicesGrouping[$data['category_id']][] =$data;
        }
        return $servicesGrouping;
    }
    public function getServices($search=null){
        $services = Service::orderBy('category_id');
        if(!empty($search)){
            $services = $services->where('category_id', 'LIKE',"%{$search}%")
            ->orWhere('name', 'LIKE',"%{$search}%")
            ->orWhere('amount', 'LIKE',"%{$search}%")
            ->orWhere('min_value', 'LIKE',"%{$search}%")
            ->orWhere('max_value', 'LIKE',"%{$search}%")
            ->orWhere('avg_time', 'LIKE',"%{$search}%")
            ->orWhere('description', 'LIKE',"%{$search}%");
        }
        $services = $services->get();
        // dd($servicesGrouping);
        return $this->servicesGrouping($services);
    }
}
