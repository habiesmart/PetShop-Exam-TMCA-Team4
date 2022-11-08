<?php

use App\Http\Controllers\LoginController;
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
    return view('Dashboard.index');
})->name('home')->middleware('auth');

Route::get('/order', function () {
    return view('Order.order');
})->name('order')->middleware('auth');

Route::get('/jadwal-belajar', function () {
    return view('Jadwal.jadwal-belajar');
})->name('jadwal-belajar')->middleware('auth');

Route::get('/paket-jasa', function () {
    return view('Paket.paket-jasa');
})->name('paket-jasa')->middleware('auth');


Route::get('/register', [LoginController::class, 'Register'])->name('register');
Route::post('/registration', [LoginController::class, 'registration'])->name('registration');

Route::get('/Login', [LoginController::class, 'Index'])->name('Login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/Logout', [LoginController::class, 'logout'])->name('Logout');
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);

Route::get('/checking-counter', [LoginController::class, 'CheckingCounter']);

Route::get('/Reset-Password', [LoginController::class, 'ResetPassword'])->name('Reset-Password');
Route::post('/Resetting-Password', [LoginController::class, 'ResettingPassword'])->name('Resetting-Password');
Route::post('/checking-existing-user', [LoginController::class, 'CheckingExistingUser'])->name('checking-existing-user');


//------------------- Pet Route
Route::get('/pet', function () {
    return view('Pet.index');
})->name('pet')->middleware('auth');

Route::get('/pet-register', function () {
    return view('Pet.register');
})->name('pet-register')->middleware('auth');