<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return redirect()->route('Accueil.index');
});
Route::resource('Accueil', MainController::class);
Route::resource('chambres',ChambreController::class);
Route::resource('hotels',HotelController::class);
Route::get('hotel.delete/{id}',[HotelController::class,'destroy'])->name('delete');
Route::get('handleHotel',[HotelController::class,'showHotelAdmin'])->name('showHotelAdmin');

Route::get('contact',[HotelController::class,'contact'])->name('contact');
Route::get('about',[HotelController::class,'about'])->name('about');
Route::resource('reservation', ReservationController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
