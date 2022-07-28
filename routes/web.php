<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoaiMayBayController;
use App\Http\Controllers\Admin\MaybayController;
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



// chuyến bay
Route::match(['get' , 'post'] , '/admin-add-chuyen-bay' , [AdminController::class , 'add_ChuyenBay'])->name('route_BE_Admin_Add_Chuyen_Bay');
Route::get('/admin-detail-chuyen-bay/{ma_cb}' , [AdminController::class , 'detail_ChuyenBay'])->name('route_BE_Admin_Detail_Chuyen_Bay');
Route::post('/admin-update-chuyen-bay' , [AdminController::class , 'edit_ChuyenBay' ])->name('route_BE_Admin_Update_Chuyen_Bay');
Route::get('/admin-delete-chuyen-bay/{ma_cb}' , [AdminController::class , 'delete_ChuyenBay' ])->name('route_BE_Admin_Delete_Chuyen_Bay');


// máy bay
Route::get('/admin-list-may-bay' , [MaybayController::class , 'index'])->name('route_BE_Admin_List_May_Bay');
Route::match(['get' , 'post'] , '/admin-add-may-bay' , [MaybayController::class , 'add_MayBay'])->name('route_BE_Admin_Add_May_Bay');
Route::get('/admin-delete-may-bay/{so_hieu_mb}' , [MaybayController::class , 'delete_MayBay'])->name('route_BE_Admin_Delete_May_Bay');
Route::get('/admin-detail-may-bay/{so_hieu_mb}' , [MaybayController::class , 'detail_MayBay'])->name('route_BE_Admin_Detail_May_Bay'); 
Route::post('/admin-update-may-bay' , [MaybayController::class , 'update_MayBay'])->name('route_BE_Admin_Update_May_Bay');

//loại máy bay

Route::get('/admin-list-loai-may-bay' , [LoaiMayBayController::class , 'index'])->name('route_BE_Admin_List_Loai_May_Bay');
Route::get('/admin-delete-loai-may-bay/{id} ' , [LoaiMayBayController::class , 'delete_Loai_MB'] )->name('route_BE_Admin_Delete_Loai_May_Bay');
Route::match(['get' , 'post'] , '/admin-add-loai-may-bay' , [LoaiMayBayController::class , 'add_Loai_MB'])->name('route_BE_Admin_Add_Loai_May_Bay');

// client
Route::get('/' , [ClientController::class , 'index'])->name('client-index');
Route::get('/about' , [ClientController::class , 'about'])->name('about');
Route::get('/contact' , [ClientController::class , 'contact'])->name('contact');
Route::get('/blog' , [ClientController::class , 'blog'])->name('blog');
Route::get('/blog-detail' , [ClientController::class , 'blog_detail'])->name('blog-detail');
Route::get('/booking-list' , [ClientController::class , 'booking_list'])->name('booking-list');
Route::get('/booking-detail' , [ClientController::class , 'booking_detail'])->name('booking-detail');