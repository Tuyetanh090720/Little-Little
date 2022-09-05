<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class orderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    public function addOrderDetails($data){
        $id = DB::table($this->table)->insertGetId($data);

        return $id;
    }

    public function getOrderDetails($orderId){
        return DB::table($this->table)->where('orderId',$orderId)->get();
    }

    public function QRTicket($orderDetailId){
        return DB::table($this->table)->where('orderId',$orderId)->get();
    }

}
