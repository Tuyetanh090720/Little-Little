<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public function insertGetId($data){
        $id = DB::table($this->table)->insertGetId($data);

        return $id;
    }

    public function getAllCustomers(){
        return DB::table($this->table)->get();
    }

    public function getCustomer($customerId){
        return DB::table($this->table)->where('customerId', $customerId)->first();
    }

    public function updateCustomer($data, $id){
        return  DB::table($this->table)->where('customerId', $id)->update($data);
    }

    public function deleteCustomer($customerId){
        return  DB::table($this->table)->where('customerId', $customerId)->delete();
    }

}
