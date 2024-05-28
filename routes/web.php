<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'landing');
});

//For testing only
Route::get('/qr_test', function(){
    return view('public.qr_test');
});
