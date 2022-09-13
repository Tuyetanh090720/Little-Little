<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;

class EventController extends Controller
{
    public function showEvent(Request $rq){
        $event = new event();
        $eventList = $event->getAllOrders();
        $length = count($eventList);
        $count = 1;

        // dd($length);

        return view('clients.event', compact('eventList', 'length', 'count'));
    }

    public function showEventDetail($eventId=null){
        $event = new event();
        $eventD = $event->getEventDetails($eventId);

        return view('clients.eventDetail', compact('eventD'));
    }
}
