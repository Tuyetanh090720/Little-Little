<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    public function addContacts($data){
        return DB::table($this->table)->insert($data);
    }

    public function getAllConctacts(){
        return DB::table($this->table)->get();
    }

    public function getConctact($id){
        return DB::table($this->table)->where('contactId', $id)->first();
    }

    public function updateConctact($data, $id){
        return  DB::table($this->table)->where('contactId', $id)->update($data);
    }

    public function deleteConctact($id){
        return  DB::table($this->table)->where('contactId', $id)->delete();
    }
}
