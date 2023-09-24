<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
/*Route::get('/blog', function () {return view('blog'); });         */
Route::get('/packages', function () {return view('packages');});

/*admin*/
Route::get('/admin.users', [AdminController::class, 'usersview'])->name('users');

/*Bookings*/
Route::get('/bookings',[BookingController::class, 'index'])->name('bookings');
Route::get('/bookings/book', [BookingController::class, 'book'])->name('booknow');
Route::post('/bookings', [BookingController::class, 'store'])->name('postbooking');
Route::get('/bookings/{id}', [BookingController::class, 'show']);
Route::delete('/bookings/{id}', [BookingController::class, 'destroy']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::prefix('admin')->middleware('auth')->group(function() {

});

Route::middleware(['auth'])->group(function () {
    Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('my-bookings');
}); 

/*Blog */

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('create-blog');
Route::post('/blogs', [BlogController::class, 'store'])->name('store-blog');

/*shop crud */

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');