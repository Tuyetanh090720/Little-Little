<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticketType;

class HomeController extends Controller
{
    public function index(){
        $ticketType = new ticketType();

        $ticketTypeList = $ticketType->getAllTicketTypes();

        return view('clients.home', compact('ticketTypeList'));
    }
}
