<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function getAllOrders(){
        $orders = DB::table($this->table)->get();

        return $orders;
    }

    public function getOrder($orderId){
        return DB::table($this->table)->where('orderId', $orderId)->first();
    }

    public function insertGetId($data){
        $id = DB::table($this->table)->insertGetId($data);

        return $id;
    }

    public function getAllOdersNDetails (){
        return DB::table('orders')->join('customers', 'orders.customerId', '=', 'customers.customerId')
                                    ->join('ticket_types', 'orders.ticketTypeId', '=', 'ticket_types.ticketTypeId')
                                    ->select('orders.*', 'customers.customerId', 'customers.customerName', 'customers.customerPhone', 'customers.customerEmail', 'ticket_types.ticketTypeName', 'ticket_types.money')
                                    ->get();
    }

    public function getOdersNDetails ($id){
        return DB::table('orders')->join('customers', 'orders.customerId', '=', 'customers.customerId')
                                    ->join('ticket_types', 'orders.ticketTypeId', '=', 'ticket_types.ticketTypeId')
                                    ->select('orders.*', 'customers.customerName', 'customers.customerPhone', 'customers.customerEmail', 'ticket_types.ticketTypeName', 'ticket_types.money')
                                    ->where('orderId', $id)
                                    ->first();
    }

    public function updateOrder($data, $id){
        return  DB::table($this->table)->where('orderId', $id)->update($data);
    }

    public function deleteOrder($id){
        return  DB::table($this->table)->where('orderId', $id)->delete();
    }
}

