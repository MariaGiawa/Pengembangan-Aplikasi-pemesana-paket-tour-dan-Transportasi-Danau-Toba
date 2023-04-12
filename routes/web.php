<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PemesanController;
// use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TourController;
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

//// Admin
// Route::get('/tour', function () {
//     return view('/User/paket-tour/show');
// });


Route::get('/admin-home', function () {
    return view('admin-side/page-admin/index');
});
Route::get('/user-rental', function () {
    return view('User/rental');
});
Route::group(['middleware' => ['web']], function () {
Route::get('/show-register', [RegisterController::class, 'showRegistrationForm'])->name('user.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
// Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::get('/user/login', [LoginController::class, 'login'])->name('user.login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Route::resource('reservations',[PemesananController::class]);

Route::get('/kelolahotel', [HotelController::class, 'index']);
Route::get('/', [HotelController::class, 'showList']);
Route::get('/user/hotel', [HotelController::class, 'show']);
Route::get('/hotel/{id}', [HotelController::class, 'details'])->name('hotel.details');
Route::get('/tambah-hotel', [HotelController::class, 'create']);
Route::get('/edit-hotel/{id}', [HotelController::class, 'edit']);
Route::post('/edit-hotel/{id}', [HotelController::class, 'update'])->name('hotel.ubah');
Route::post('/tambah-hotel/store', [HotelController::class, 'store'])->name('formhotel.store');
Route::delete('/delete/{id}', [HotelController::class, 'delete'])->name('hotel.hapus');
Route::post('/pemesanan-hotel', [HotelController::class, 'storePemesanan'])->name('hotel.storePemesanan');
Route::get('/order-hotel', [PemesanController::class, 'index']);
Route::put('/hotels/{id}/accept', [PemesananController::class, 'accept'])->name('hotels.accept');
Route::delete('/hotels/{id}', [PemesananController::class, 'destroy'])->name('hotels.destroy');

Route::get('/kelola-restaurant', [RestaurantController::class, 'index']);
Route::get('/user/restaurant', [RestaurantController::class, 'show']);
Route::get('/restaurant/{id}', [RestaurantController::class, 'details'])->name('restaurant.details');
Route::get('/tambah-restaurant', [RestaurantController::class, 'create']);
Route::get('/edit-restaurant/{id}', [RestaurantController::class, 'edit']);
Route::post('/edit-restaurant/{id}', [RestaurantController::class, 'update'])->name('restaurant.ubah');
Route::post('/tambah-restaurant/store', [RestaurantController::class, 'store'])->name('formrestaurant.store');
Route::get('/delete/{id}', [RestaurantController::class, 'delete'])->name('restauran.hapus');

Route::resource('/paket-tour',TourController::class);


