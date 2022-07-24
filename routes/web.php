<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;
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

// admin
Route::get('/admin' , [AdminController::class , 'index'])->name('admin-index');
Route::get('/admin-add' , [AdminController::class , 'add'])->name('admin-add');



// client
Route::get('/' , [ClientController::class , 'index'])->name('client-index');
Route::get('/about' , [ClientController::class , 'about'])->name('about');
Route::get('/contact' , [ClientController::class , 'contact'])->name('contact');
Route::get('/blog' , [ClientController::class , 'blog'])->name('blog');
Route::get('/blog-detail' , [ClientController::class , 'blog_detail'])->name('blog-detail');
Route::get('/booking-list' , [ClientController::class , 'booking_list'])->name('booking-list');
Route::get('/booking-detail' , [ClientController::class , 'booking_detail'])->name('booking-detail');