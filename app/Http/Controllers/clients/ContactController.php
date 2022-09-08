<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function index(Request $rq){
        $alert = '';
        return view('clients.contactus', compact('alert'));
    }

    public function addContacts(Request $rq){
        $contact = new contact();
        $contactStatus = 'Mới';

        $arrCT = ['contactStatus'=>$contactStatus, 'updated_at' => date('Y-m-d'), 'created_at' => date('Y-m-d')];

        $contactrData = array_merge($rq->only('contactName', 'contactPhone', 'contactEmail', 'contactAddress', 'contactMessage'),  $arrCT);

        $contact->addContacts($contactrData);

        $alert = '<div class="alert">
                    <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
                    <div class="alert-content">
                        <span>Gửi liên hệ thành công. <br/>Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!</span>
                    </div>
                    </div>';

        return view('clients.contactus', compact('alert'));
    }
}
