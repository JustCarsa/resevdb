<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cinemas', CinemaController::class);
Route::resource('movies', MovieController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('tickets', TicketController::class);
