<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('restaurants', RestaurantController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('users', UserController::class);
Route::resource('tables', TableController::class);
Route::resource('menus', MenuController::class);
