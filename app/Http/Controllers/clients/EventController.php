<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function showEvent(Request $rq){
        return view('clients.event');
    }

    public function showEventDetail(Request $rq){
        return view('clients.eventDetail');
    }
}
