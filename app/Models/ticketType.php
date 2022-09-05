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
}
