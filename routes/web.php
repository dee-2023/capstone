<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PackageController;

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

Route::get('/', function () {return view('welcome'); })->name('welcome');
Route::get('/contact', function () {return view('contact'); });
Route::get('/blog', function () {return view('blog'); });

/*Bookings*/
Route::get('/bookings',[BookingController::class, 'index'])->name('bookings');
Route::get('/bookings/book', [BookingController::class, 'book'])->name('booknow');
Route::post('/bookings', [BookingController::class, 'store'])->name('postbooking');
Route::get('/bookings/{id}', [BookingController::class, 'show']);
Route::delete('/bookings/{id}', [BookingController::class, 'destroy']);

/*Packages*/
Route::get('/packages',[PackageController::class, 'index'])->name('packages');
Route::post('/packages/upload', [PackageController::class, 'store']);
Route::get('/packages/{id}', [PackageController::class, 'show']);

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



// admin
Route::prefix('admin')->middleware('auth')->group(function() {

});

Route::middleware(['auth'])->group(function () {
    Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('my-bookings');
}); 
