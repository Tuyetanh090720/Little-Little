<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPayment(Request $rq){
        // Lay thong tin POST
        $package = $rq->input('package');
        $quantity = $rq->input('quantity');
        if($package == "Gói gia đình"){
            $money = 160000 * $quantity;
        }
        if($package == "Gói cô đơn"){
            $money = 200000;
        }
        $date = $rq->input('date');
        $fullname = $rq->input('fullname');
        $phone = $rq->input('phone');
        $email = $rq->input('email');

        return view('clients.payment', compact('package', 'quantity', 'money', 'date', 'fullname', 'phone', 'email'));
    }

    public function showPaymentSuccess(Request $rq){
        return view('clients.paymentSuccess');
    }
}
