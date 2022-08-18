<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/', function () {
        return view('/clients/home');
    });
    Route::get('/event', function () {
        return view('/clients/event');
    });
    Route::get('/eventDetail', function () {
        return view('/clients/eventDetail');
    });
    Route::get('/contactus', function () {
        return view('/clients/contactus');
    });
    Route::get('/payment', function () {
        return view('/clients/payment');
    });
    Route::get('/paymentSuccess', function () {
        return view('/clients/paymentSuccess');
    });
});
