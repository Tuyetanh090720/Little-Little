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
}
