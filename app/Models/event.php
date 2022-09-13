<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class event extends Model
{
    use HasFactory;
    protected $table = 'events';

    public function insertGetId($data){
        $id = DB::table($this->table)->insertGetId($data);
        return $id;
    }

    public function getAllEvents(){
        return DB::table($this->table)->get();
    }

    public function getEventDetails($eventId){
        $event = DB::table($this->table)->where('eventId', $eventId)->first();

        return $event;
    }

    public function updateEvent($data, $id){
        return  DB::table($this->table)->where('eventId', $id)->update($data);
    }

    public function deleteEvent($id){
        return  DB::table($this->table)->where('eventId', $id)->delete();
    }
}
