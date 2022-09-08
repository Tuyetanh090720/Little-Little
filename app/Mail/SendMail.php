<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use DB;
use PDF;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quantity, $orderDetailList, $orderId, $customerEmail)
   {
       $this->quantity = $quantity;
       $this->orderDetailList = $orderDetailList;
       $this->orderId = $orderId;
       $this->customerEmail = $customerEmail;
   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
        $quantity = $this->quantity;
        $orderDetailList = $this->orderDetailList;
        $orderId = $this->orderId;
        $customerEmail = $this->customerEmail;

        $a = view('clients.ticket', compact('quantity', 'orderDetailList', 'orderId', 'customerEmail'));
        $pdf = PDF::loadHTMl($a)
        ->setOptions(['defaultFont' => 'Montserrat'])
        ->setPaper('f4', 'potrait')
        ->setWarnings(false)
        ->save('ticket.pdf', 'UTF-8');

        $path = Storage::put('public/storage/pdf'.'-'.rand() .'_'.time(). '.'.'pdf', $pdf->output());
        Storage::put($path, $pdf->output());

        return $this->from('19521198@gm.uit.edu.vn')
        ->View('clients.email')
        ->attachData($pdf->output(), $path, [
            'mime' => 'application/pdf',
            'as' => 'Vé-' .$this->orderId. '.'.'pdf',
        ])
        ->subject('Vé cổng Đầm Sen');
    }
}
