<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = new customer();

        $customersList = $customers->getAllCustomers();

        return view('admins.customers.lists', compact('customersList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $customers = new customer();

        $customer = $customers->getCustomer($id);

        return view('admins.customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customers = new customer();

        $update_at = ['updated_at' => date('Y-m-d')];

        // gán dữ liệu gửi lên vào biến data
        $data = array_merge($request->only('customerName', 'customerPhone', 'customerEmail', 'created_at'), $update_at);

        $updateorder = $customers->updateCustomer($data, $id);

        return redirect()->route('admins.customers.lists');
    }

    public function delete($id)
    {
        $customers = new customer();

        $delete = $customers->deleteCustomer($id);

        return redirect()->route('admins.customers.lists');
    }
}
