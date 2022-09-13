<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\PaymentController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\EventController;
use App\Http\Controllers\admins\CustomerController;
use App\Http\Controllers\admins\AdContactController;
use App\Http\Controllers\admins\OrderController;
use App\Http\Controllers\admins\TicketTypeController;
use App\Http\Controllers\admins\AdEventController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->name('clients.')->group(function() {
    Route::get('', [HomeController::class, 'index'])->name('index');

    Route::get('/event', [EventController::class, 'showEvent'])->name('showEvent');

    Route::get('/event/{eventId?}', [EventController::class, 'showEventDetail'])->name('showEventDetail');

    Route::get('/contactus', [ContactController::class, 'index'])->name('index');

    Route::post('/contactus', [ContactController::class, 'addContacts'])->name('addContacts');

    Route::post('/payment', [PaymentController::class, 'showPayment'])->name('payment');

    Route::post('/paymentSuccess', [PaymentController::class, 'payment'])->name('paymentSuccess');

    Route::get('/paymentSuccess/{flag?}/{quantity?}/{orderId?}/{customerEmail?}', [PaymentController::class, 'download'])->name('download');
});

Route::prefix('admins')->name('admins.')->group(function() {
    // Route::get('/login', function(){
    //     return view('/admins/login_admin');
    // });

    Route::get('/', function(){
        return view('/admins/main');
    });

    Route::prefix('customers')->name('customers.')->group(function() {

        Route::get('/lists', [CustomerController::class, 'index'])->name('lists');

        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit');

        Route::post('/edit/{id}', [CustomerController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('delete');
    });

    Route::prefix('contacts')->name('contacts.')->group(function() {

        Route::get('/lists', [AdContactController::class, 'index'])->name('lists');

        Route::get('/edit/{id}', [AdContactController::class, 'edit'])->name('edit');

        Route::post('/edit/{id}', [AdContactController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [AdContactController::class, 'delete'])->name('delete');
    });

    Route::prefix('orders')->name('orders.')->group(function() {

        Route::get('/lists', [OrderController::class, 'index'])->name('lists');

        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('edit');

        Route::post('/edit/{id}', [OrderController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [OrderController::class, 'delete'])->name('delete');
    });

    Route::prefix('ticket_types')->name('ticket_types.')->group(function() {

        Route::get('/lists', [TicketTypeController::class, 'index'])->name('lists');

        Route::get('/add', [TicketTypeController::class, 'add'])->name('add');

        Route::post('/add', [TicketTypeController::class, 'store'])->name('store');

        Route::get('/edit/{id}', [TicketTypeController::class, 'edit'])->name('edit');

        Route::post('/edit/{id}', [TicketTypeController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [TicketTypeController::class, 'delete'])->name('delete');
    });

    Route::prefix('events')->name('events.')->group(function() {

        Route::get('/lists', [AdEventController::class, 'index'])->name('lists');

        Route::get('/add', [AdEventController::class, 'add'])->name('add');

        Route::post('/add', [AdEventController::class, 'store'])->name('store');

        Route::get('/edit/{id}', [AdEventController::class, 'edit'])->name('edit');

        Route::post('/edit/{id}', [AdEventController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [AdEventController::class, 'delete'])->name('delete');
    });
});
