<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use Carbon\Carbon;

class AdEventController extends Controller
{
    public function index()
    {
        $events = new event();

        $eventsList = $events->getAllEvents();

        return view('admins.events.lists', compact('eventsList'));

    }

    public function add()
    {
        return view('admins.events.add');
    }

    public function store(Request $rq)
    {
        $events = new event();

        $a = explode('/',$rq->start_at);
        $sa = Carbon::create($a[2], $a[1], $a[0], 0);
        $start_at = $sa->toDateString();

        $b = explode('/',$rq->end_at);
        $ea = Carbon::create($b[2], $b[1], $b[0], 0);
        $end_at = $ea->toDateString();

        if (!$rq->hasFile('img')) {
            // Nếu không thì in ra thông báo
            return "Mời chọn file cần upload";
        }

        $arrdate = ['start_at' => $start_at, 'end_at' => $end_at, 'updated_at' => date('Y-m-d'), 'created_at' => date('Y-m-d')];

        $data = array_merge($rq->only('eventName', 'start_at', 'end_at', 'money', 'eventDetail'), $arrdate);
        $eventId = $events->insertGetId($data);

        // Nếu có thì thục hiện lưu trữ file vào public/images
        $image = $rq->file('img');
        $storedPath = $image->move('storage/img', $eventId.'.jpg');

        return redirect()->route('admins.events.lists');
    }

    public function edit($id)
    {
        $events = new event();

        $event = $events->getEventDetails($id);

        return view('admins.events.edit', compact('event'));
    }

    public function update(Request $rq, $id)
    {
        $events = new event();

        $update_at = ['updated_at' => date('Y-m-d')];

        // gán dữ liệu gửi lên vào biến data
        $data = array_merge($rq->only('eventName', 'start_at', 'end_at', 'money', 'eventDetail', 'created_at'), $update_at);

        $image = $rq->file('img');
        $storedPath = $image->move('storage/img', $id.'.jpg');

        $updateorder = $events->updateEvent($data, $id);

        return redirect()->route('admins.events.lists');
    }

    public function delete($id)
    {
        $events = new event();

        $delete = $events->deleteEvent($id);

        return redirect()->route('admins.events.lists');
    }

}
