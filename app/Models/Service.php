<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =[
        'type',
        'name',
        'rate',
        'min_value',
        'max_value',
        'avg_time',
        'description',
        'guarranty'
    ];
    public function servicesGrouping($services){
        $servicesGrouping=[];
        foreach($services as $data){
            $servicesGrouping[$data['type']][] =$data;
        }
        return $servicesGrouping;
    }
    public function getServices($search=null){
        $services = Service::orderBy('type');
        if(!empty($search)){
            $services = $services->where('type', 'LIKE',"%{$search}%")
            ->orWhere('name', 'LIKE',"%{$search}%")
            ->orWhere('rate', 'LIKE',"%{$search}%")
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
