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
Route::get('/people/edit/{listing}', [PeopleController::class, 'updateListing'])->name('update.people');
Route::put('/people/update/{listing}', [PeopleController::class, 'update'])->name('people.update');
Route::get('/people/s3', [PeopleController::class, 's3']);
Route::delete('/people/{listing}', [PeopleController::class, 'destroy'])->name('people.destroy');


Route::get('/events', [EventController::class, 'index'])->name('events');
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/edit/{listing}', [EventController::class, 'updateListing'])->name('update.event');
Route::put('/events/update/{listing}', [EventController::class, 'update'])->name('event.update');
Route::delete('/events/{listing}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/business', [BusinessController::class, 'index'])->name('business');
Route::post('/business', [BusinessController::class, 'store']);
Route::get('/business/edit/{listing}', [BusinessController::class, 'updateListing'])->name('update.business');
Route::put('/business/update/{listing}', [BusinessController::class, 'update'])->name('business.update');
Route::delete('/business/{listing}', [BusinessController::class, 'destroy'])->name('business.destroy');

