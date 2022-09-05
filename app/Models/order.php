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

    public function insertGetId($data){
        $id = DB::table($this->table)->insertGetId($data);

        return $id;
    }

    // public function find($id){
    //     return  DB::table($this->table)->find($id);
    // }

    // public function updateOrder($data){
    //     return  DB::table($this->table)->update($data);
    // }

    // public function deleteOrder($id){
    //     return  DB::table($this->table)->where('id', '>', $id)->delete();
    // }
}
