<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class AdContactController extends Controller
{
    public function index()
    {
        $contacts = new contact();

        $contactsList = $contacts->getAllConctacts();

        return view('admins.contacts.lists', compact('contactsList'));

    }

    public function edit($id)
    {
        $contacts = new contact();

        $contact = $contacts->getConctact($id);

        return view('admins.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contacts = new contact();

        $update_at = ['updated_at' => date('Y-m-d')];

        // gán dữ liệu gửi lên vào biến data
        $data = array_merge($request->only('contactName', 'contactPhone', 'contactEmail', 'contactAddress', 'contactMessage', 'contactStatus', 'created_at'), $update_at);

        $updateorder = $contacts->updateConctact($data, $id);

        return redirect()->route('admins.contacts.lists');
    }

    public function delete($id)
    {
        $contacts = new contact();

        $contact = $contacts->deleteConctact($id);

        return redirect()->route('admins.contacts.lists');
    }
}
