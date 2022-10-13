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
    return view('home/home');
});
Route::get('/admin_home', function () {
    return view('home/admin_home');
});
Route::get('/signup', function () {
    return view('sign/signup');
});
Route::get('/signin', function () {
    return view('sign/signin');
});

Route::get('/building', function () {
    return view('building/building');
});
Route::get('/ad', function () {
    return view('ad/ad');
});
Route::get('/weather', function () {
    return view('weather/weather');
});
Route::get('/danger_location', function () {
    return view('danger_location/danger_location');
});
