<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orderId');
            $table->unsignedInteger('customerId');
            $table->foreign('customerId')->references('customerId')->on('customers');
            $table->unsignedInteger('ticketTypeId');
            $table->foreign('ticketTypeId')->references('ticketTypeId')->on('ticket_types');
            $table->integer('totalMoney');
            $table->integer('quantity');
            $table->string('cardNumber');
            $table->string('cardName');
            $table->date('expiration');
            $table->string('CVC');
            $table->string('paymentStatus');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
