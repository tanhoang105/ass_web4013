<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DatVeController;
use App\Http\Controllers\Admin\KhachHangController;
use App\Http\Controllers\Admin\LoaiMayBayController;
use App\Http\Controllers\Admin\MaybayController;
use App\Http\Controllers\Admin\SanBayController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\TaiKhoanController;
use App\Http\Controllers\Admin\VeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Models\Role;
use App\Models\San_bay;
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


// login

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin']);

// khách hàng
Route::match(['get', 'post'], '/dang-ky', [LoginController::class, 'add_User'])->name('route_SignIn');
Route::get('/quen-mat-khau', [LoginController::class, 'quen_MK'])->name('route_BE_Forgot_Password');

Route::get('/logout', [LoginController::class, 'Logout'])->name('route_logout');


// admin

Route::middleware(['auth'])->group(function () {



     // chuyến bay
     Route::get('/admin', [AdminController::class, 'index'])->name('admin-index');
     Route::match(['get', 'post'], '/admin-add-chuyen-bay', [AdminController::class, 'add_ChuyenBay'])->name('route_BE_Admin_Add_Chuyen_Bay');
     Route::get('/admin-detail-chuyen-bay/{ma_cb}', [AdminController::class, 'detail_ChuyenBay'])->name('route_BE_Admin_Detail_Chuyen_Bay');
     Route::post('/admin-update-chuyen-bay', [AdminController::class, 'edit_ChuyenBay'])->name('route_BE_Admin_Update_Chuyen_Bay');
     Route::get('/admin-delete-chuyen-bay/{ma_cb}', [AdminController::class, 'delete_ChuyenBay'])->name('route_BE_Admin_Delete_Chuyen_Bay');
     Route::get('/admin-loc-chuyen-bay', [AdminController::class, 'loc_ChuyenBay'])->name('route_BE_Admin_Loc_Chuyen_Bay');
     // lọc chuyến bay quá thời gian 

     // máy bay
     Route::get('/admin-list-may-bay', [MaybayController::class, 'index'])->name('route_BE_Admin_List_May_Bay');
     Route::match(['get', 'post'], '/admin-add-may-bay', [MaybayController::class, 'add_MayBay'])->name('route_BE_Admin_Add_May_Bay');
     Route::get('/admin-delete-may-bay/{so_hieu_mb}', [MaybayController::class, 'delete_MayBay'])->name('route_BE_Admin_Delete_May_Bay');
     Route::get('/admin-detail-may-bay/{so_hieu_mb}', [MaybayController::class, 'detail_MayBay'])->name('route_BE_Admin_Detail_May_Bay');
     Route::post('/admin-update-may-bay', [MaybayController::class, 'update_MayBay'])->name('route_BE_Admin_Update_May_Bay');

     //loại máy bay
     Route::get('/admin-list-loai-may-bay', [LoaiMayBayController::class, 'index'])->name('route_BE_Admin_List_Loai_May_Bay');
     Route::get('/admin-delete-loai-may-bay/{id} ', [LoaiMayBayController::class, 'delete_Loai_MB'])->name('route_BE_Admin_Delete_Loai_May_Bay');
     Route::match(['get', 'post'], '/admin-add-loai-may-bay', [LoaiMayBayController::class, 'add_Loai_MB'])->name('route_BE_Admin_Add_Loai_May_Bay');
     Route::get('/admin-detail-loai-may-bay/{id}', [LoaiMayBayController::class, 'detail_Loai_MB'])->name('route_BE_Admin_Detail_Loai_May_Bay');
     Route::post('/admin-update-loai-may-bay', [LoaiMayBayController::class, 'update_Loai_MB'])->name('route_BE_Admin_Update_Loai_May_Bay');

     // vé 
     Route::get('/admin-list-ve', [VeController::class, 'index'])->name('route_BE_Admin_List_Ve');
     Route::get('/admin-delete-ve/{ma_ve}', [VeController::class, 'delete_Ve'])->name('route_BE_Admin_Delete_Ve');
     Route::match(['get', 'post'], '/admin-add-ve', [VeController::class, 'add_Ve'])->name('route_BE_Admin_Add_Ve');
     Route::get('/admin-detail-ve/{ma_ve}', [VeController::class,  'detail_Ve'])->name('route_BE_Admin_Detail_Ve');
     Route::post('/admin-update-ve', [VeController::class, 'update_Ve'])->name('route_BE_Admin_Update_Ve');
     Route::get('/admin-loc-ve', [VeController::class, 'loc_Ve'])->name('route_BE_Admin_Loc_Ve');

     //slide 
     Route::get('/admin-list-slide', [SlideController::class, 'index'])->name('route_BE_Admin_List_Slide');
     Route::get('/admin-delete-slide/{id}', [SlideController::class, 'delete_Slide'])->name('route_BE_Admin_Delete_Slide');
     Route::match(['get', 'post'], '/admin-add-slide', [SlideController::class, 'add_Slide'])->name('route_BE_Admin_Add_Slide');
     Route::get('/admin-detail-slide/{id}', [SlideController::class, 'detail_Slide'])->name('route_BE_Admin_Detail_Slide');
     Route::post('/admin-update-slide', [SlideController::class, 'update_Slide'])->name('route_BE_Admin_Update_Slide');

     //update tài khoản admin

     Route::get('admin-update-account/{id}', [TaiKhoanController::class, 'Detail_Account'])->name('route_BE_Admin_Update_Account');
     Route::post('admin-update-account', [TaiKhoanController::class, 'admin_Update_Account'])->name('route_BE_Admin_Update_Account_Post');

     // đặt vé
     Route::get('/admin-list-dat-ve', [DatVeController::class, 'index'])->name('route_BE_Admin_List_Dat_Ve');
     Route::get('/admin-delete-dat-ve/{ma_dat_ve}', [DatVeController::class, 'delete_Dat_Ve'])->name('route_BE_Admin_Delete_Dat_Ve');
     Route::match(['get', 'post'], 'admin-add-dat-ve', [DatVeController::class, 'add_Dat_ve'])->name('route_BE_Admin_Add_Dat_Ve');
     Route::get('/admin-detail-dat-ve/{ma_dat_ve}', [DatVeController::class, 'detail_Dat_Ve'])->name('route_BE_Admin_Detail_Dat_Ve');
     Route::post('/admin-update-dat-ve', [DatVeController::class, 'update_Dat_Ve'])->name('route_BE_Admin_Update_Dat_Ve');
     Route::get('/admin-loc-dat-ve', [DatVeController::class, 'loc_DatVe'])->name('route_BE_Admin_Loc_Dat_Ve');

     // u



     // tài khoản

     Route::get('/admin-tai-khoan', [TaiKhoanController::class, 'index'])->name('route_BE_Admin_List_Tai_Khoan');
     Route::get('/admin-delete-tai-khoan/{email}', [TaiKhoanController::class, 'delete_TaiKhoan'])->name('route_BE_Admin_Delete_Tai_Khoan');
     Route::get('/admin-detail-tai-khoan/{email}', [TaiKhoanController::class, 'detail_TaiKhoan'])->name('route_BE_Admin_Detail_Tai_Khoan');
     Route::post('/admin-update-tai-khoan', [TaiKhoanController::class, 'update_TaiKhoan'])->name('route_BE_Admin_Update_Tai_Khoan');

     Route::match(['post', 'get'], '/admin-add-thanh-vien', [TaiKhoanController::class, 'add_TaiKhoan'])->name('route_BE_Admin_Add_Tai_Khoan');




     // sân bay

     Route::get('/admin-list-san-bay',  [SanBayController::class, 'index'])->name('route_BE_Admin_List_San_Bay');
     Route::get('/admin-delete-san-bay/{id}',  [SanBayController::class, 'delete_SanBay'])->name('route_BE_Admin_Delete_San_Bay');
     Route::match(['get', 'post'], '/admin-add-san-bay', [SanBayController::class, 'add_SanBay'])->name('route_BE_Admin_Add_San_Bay');
     Route::get('/add-detail-san-bay/{id}', [SanBayController::class, 'detail_SanBay'])->name('route_BE_Admin_Detail_San_Bay');
     Route::post('/admin-update-san-bay', [SanBayController::class, 'update_SanBay'])->name('route_BE_Admin_Update_San_Bay');

     // lịch sử đặt vé 
     Route::get('/client-lich-su-dat-ve', [ClientController::class, 'ls_DatVe'])->name('route_FE_Client_Lich_Su_Dat_Ve');
});

Route::middleware('checkAcountDatVe')->group(function () {

     Route::post('/dat_ve', [ClientController::class, 'dat_ve'])->name('route_FE_Client_Dat_Ve');
});

// client

Route::get('/', [ClientController::class, 'index'])->name('client-index');



Route::get('/about', [ClientController::class, 'about'])->name('about');
// Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/blog-detail', [ClientController::class, 'blog_detail'])->name('blog-detail');
Route::get('/booking-list', [ClientController::class, 'booking_list'])->name('booking-list');
Route::get('/booking-detail', [ClientController::class, 'booking_detail'])->name('booking-detail');


// CLient đặt vé 
