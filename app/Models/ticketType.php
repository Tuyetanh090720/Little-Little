<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ticketType extends Model
{
    use HasFactory;

    protected $table = 'ticket_types';

    public function getAllTicketTypes(){
        $tt = DB::table($this->table)->get();

        return $tt;
    }

    public function addTicketTypes($data){
        return DB::table($this->table)->insert($data);
    }

    public function getTicketTypeID($name){
        $ticketType = new ticketType();
        $ticketTypeList = $ticketType->getAllTicketTypes();

        foreach($ticketTypeList as $item){
            if($name == $item->ticketTypeName){
                $ticketTypeId = $item->ticketTypeId;
            }
        }
        return $ticketTypeId;
    }

    public function getTicketTypes($id){
        return DB::table($this->table)->where('ticketTypeId', $id)->first();
    }

    public function updateTicketTypes($data, $id){
        return  DB::table($this->table)->where('ticketTypeId', $id)->update($data);
    }

    public function deleteTicketTypes($id){
        return  DB::table($this->table)->where('ticketTypeId', $id)->delete();
    }
}
