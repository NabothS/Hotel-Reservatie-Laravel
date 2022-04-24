<?php

use App\Http\Controllers\KlantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\roomController;
use App\Models\Reservation;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/klanten', [KlantController::class, "index"] )->middleware(['auth'])->name('klanten');

Route::get('/addklant', function () {
    return view('makeKlant');
})->middleware(['auth'])->name('makeKlant');


Route::get('/bookRoom/{id}', [roomController::class, "getRooms" ] )->middleware(['auth']);

Route::get('/bewerkKlant/{id}', [KlantController::class, "getData" ] )->middleware(['auth']);

Route::post('/bewerkKlant/{id}', [KlantController::class, "bewerk"] )->middleware(['auth']);

Route::post('/bookRoom', [ReservationController::class, "book"] )->middleware(['auth'])->name('bookRoom');

Route::post('/addKlant', [KlantController::class, "add"] )->middleware(['auth'])->name('addKlant');

Route::get('/reservaties', [ReservationController::class, "index"] )->middleware(['auth'])->name('reservaties');

Route::get('/deleteReservation/{id}', [ReservationController::class, "deleteReservation" ] )->middleware(['auth']);


Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth'])->name('contact');

require __DIR__.'/auth.php';
