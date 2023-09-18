<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {return view('welcome'); });
Route::get('/contact', function () {return view('contact'); });
Route::get('/blog', function () {return view('blog'); });
Route::get('/packages',[PackageController::class, 'index'])->name('packages');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// admin
Route::prefix('admin')->middleware('auth')->group(function() {

});
