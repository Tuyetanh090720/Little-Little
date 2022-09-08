<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\PaymentController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\EventController;

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

    Route::get('/eventDetail', [EventController::class, 'showEventDetail'])->name('showEventDetail');

    Route::get('/contactus', [ContactController::class, 'index'])->name('index');

    Route::post('/contactus', [ContactController::class, 'addContacts'])->name('addContacts');

    Route::post('/payment', [PaymentController::class, 'showPayment'])->name('payment');

    Route::post('/paymentSuccess', [PaymentController::class, 'payment'])->name('paymentSuccess');

    Route::get('/paymentSuccess/{flag?}/{quantity?}/{orderId?}/{customerEmail?}', [PaymentController::class, 'download'])->name('download');
});
