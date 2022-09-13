<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;

class EventController extends Controller
{
    public function showEvent(Request $rq){
        $event = new event();
        $eventList = $event->getAllEvents();
        $length = count($eventList);
        $count = 1;

        return view('clients.event', compact('eventList', 'length', 'count'));
    }

    public function showEventDetail($eventId=null){
        $event = new event();
        $eventD = $event->getEventDetails($eventId);
        if(strlen($eventD->eventDetail) < 500){
            $column = 2;
        }
        if(strlen($eventD->eventDetail) > 500){
            $column = 3;
        }

        return view('clients.eventDetail', compact('eventD', 'column'));
    }
}
