<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class event extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public function insertGetId($data){
        $id = DB::table($this->table)->insertGetId($data);

        return $id;
    }
}
