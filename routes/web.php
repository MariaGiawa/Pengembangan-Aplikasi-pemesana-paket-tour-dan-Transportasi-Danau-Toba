<?php


use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Auth;
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



// Route::get('/', function () {
//     return view('user/index');
// });

// Route::get('/restaurants', function () {
//     return view('user/restaurants');
// });

//// Admin
Route::get('/admin-home', function () {
    return view('admin-side/page-admin/index');
});

Route::get('/kelolahotel', [HotelController::class, 'index']);
Route::get('/', [HotelController::class, 'showList']);
Route::get('/user/hotel', [HotelController::class, 'show']);
Route::get('/tambah-hotel', [HotelController::class, 'create']);
Route::get('/edit-hotel/{id}', [HotelController::class, 'edit']);
Route::post('/edit-hotel/{id}', [HotelController::class, 'update'])->name('hotel.ubah');
Route::post('/tambah-hotel/store', [HotelController::class, 'store'])->name('formhotel.store');
Route::get('/delete/{id}', [HotelController::class, 'delete'])->name('hotel.hapus');

Route::get('/kelola-restaurant', [RestaurantController::class, 'index']);
Route::get('/user/restaurant', [RestaurantController::class, 'show']);
Route::get('/tambah-restaurant', [RestaurantController::class, 'create']);
Route::get('/edit-restaurant/{id}', [RestaurantController::class, 'edit']);
Route::post('/edit-restaurant/{id}', [RestaurantController::class, 'update'])->name('restaurant.ubah');
Route::post('/tambah-restaurant/store', [RestaurantController::class, 'store'])->name('formrestaurant.store');
Route::get('/delete/{id}', [RestaurantController::class, 'delete'])->name('restauran.hapus');
