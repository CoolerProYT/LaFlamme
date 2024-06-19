<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAuth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\MenuController;

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'landing')->name('landing');

    Route::controller(AuthController::class)->group(function(){
        Route::get('/login','login')->name('user.login');
        Route::get('/register','register')->name('user.register');
        Route::get('/logout','logout')->name('user.logout');
    });

    Route::controller(EventController::class)->group(function(){
        Route::get('/event/{id}','event')->name('event_detail');
        Route::get('/event/book/{id}','bookEvent')->name('event_book');
    });

    Route::controller(MenuController::class)->group(function(){
        Route::get('/menu','menu')->name('user.menu');
    });

    Route::middleware([CheckAuth::class . ':web'])->group(function(){
        Route::controller(EventController::class)->group(function(){
            Route::get('/event/checkout/{id}','checkoutEvent')->name('event_checkout');
            Route::get('/return','return')->name('return');
        });

        Route::controller(BookingController::class)->group(function(){
            Route::get('/booking','booking')->name('user.booking');
        });
    });
});

Route::prefix('/admin')->group(function(){
    Route::controller(AdminAuthController::class)->group(function(){
        Route::get('/','index');
        Route::get('/login','login')->name('admin.login');
        Route::get('/logout','logout')->name('admin.logout');
    });

    Route::controller(AdminBookingController::class)->group(function(){
        Route::get('/booking/scan/{id}','bookingScan')->name('admin.booking_scan');
    });

    Route::middleware([CheckAuth::class . ':admin'])->group(function(){
        Route::controller(DashboardController::class)->group(function(){
            Route::get('/dashboard','dashboard')->name('admin.dashboard');
        });

        Route::controller(AdminHomeController::class)->group(function(){
            Route::get('/home','home')->name('admin.home');
            Route::get('/promotion','promotion')->name('admin.promotion');
        });

        Route::controller(AdminEventController::class)->group(function(){
            Route::get('/event','event')->name('admin.event');
            Route::get('/event/add','addEvent')->name('admin.event.add');
            Route::get('/event/edit/{id}','editEvent')->name('admin.event.edit');
        });

        Route::controller(AdminBookingController::class)->group(function(){
            Route::get('/booking','booking')->name('admin.booking');
        });

        Route::controller(AdminMenuController::class)->group(function(){
            Route::get('/menu','menu')->name('admin.menu');
            Route::get('/menu/add','addMenu')->name('admin.menu.add');
            Route::get('/menu/edit/{id}','editMenu')->name('admin.menu.edit');
        });
    });
});
