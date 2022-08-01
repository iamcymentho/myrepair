<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairController;

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

Route::get('/', [RepairController::class, 'index']);

Route::get('/about', [RepairController::class, 'about'])->name('about');

Route::get('/services', [RepairController::class, 'services'])->name('services');

Route::get('/testimonial', [RepairController::class, 'testimonial'])->name('testimonial');

Route::get('/contactus', [RepairController::class, 'contact'])->name('contact');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
