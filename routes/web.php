<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/people', [PeopleController::class, 'index'])->name('people');
Route::post('/people', [PeopleController::class, 'store']);
Route::delete('/people/{listing}', [PeopleController::class, 'destroy'])->name('people.destroy');


Route::get('/events', [EventController::class, 'index'])->name('events');
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{listing}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/business', [BusinessController::class, 'index'])->name('business');
Route::post('/business', [BusinessController::class, 'store']);
Route::delete('/business/{listing}', [BusinessController::class, 'destroy'])->name('business.destroy');

