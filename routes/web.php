<?php

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

Route::get('/', function () {
    return view('user/index');
});
Route::get('/about', function () {
    return view('user/about');
});

Route::get('/destination', function () {
    return view('user/destination');
});
Route::get('/404', function () {
    return view('user/404');
});
Route::get('/contact', function () {
    return view('user/contact');
});
Route::get('/blog-archive', function () {
    return view('user/blog-archive');
});
Route::get('/blog-single', function () {
    return view('user/blog-single');
});
Route::get('/booking', function () {
    return view('user/booking');
});
Route::get('/career', function () {
    return view('user/career');
});
Route::get('/career-detail', function () {
    return view('user/career-detail');
});
Route::get('/cart', function () {
    return view('user/cart');
});
Route::get('/confirm', function () {
    return view('user/confirmation');
});
Route::get('/faq', function () {
    return view('user/faq');
});
Route::get('/gallery', function () {
    return view('user/gallery');
});
Route::get('/home', function () {
    return view('user/home');
});
Route::get('/package-detail', function () {
    return view('user/package-detail');
});
Route::get('/package-offer', function () {
    return view('user/package-offer');
});
Route::get('/package', function () {
    return view('user/package');
});
Route::get('/policy', function () {
    return view('user/policy');
});
Route::get('/search-page', function () {
    return view('user/search-page');
});
Route::get('/service', function () {
    return view('user/service');
});
Route::get('/single-page', function () {
    return view('user/single-page');
});
Route::get('/team', function () {
    return view('user/team');
});
Route::get('/testimonial', function () {
    return view('user/testimonial');
});
Route::get('/comming-soon', function () {
    return view('user/comming-soon');
});