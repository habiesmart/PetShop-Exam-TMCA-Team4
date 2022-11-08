<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketPerawatanController;
use App\Http\Controllers\PetController;

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

Route::get('/order-list', [OrderController::class, 'index'])->name('order-list')->middleware('auth');
Route::get('/paket-perawatan', [PaketPerawatanController::class, 'index'])->name('paket-perawatan')->middleware('auth');

//------------------- Pet Route
Route::get('/pet', [PetController::class, 'Index'])->name('pet')->middleware('auth');
Route::post('/list-pet', [PetController::class, 'ListPet'])->name('list-pet')->middleware('auth');

Route::get('/pet-register', function () {
    return view('Pet.addPet');
})->name('pet-register')->middleware('auth');

Route::post('/pet-save', [PetController::class, 'Save'])->name('pet-save')->middleware('auth');
Route::get('/pet-delete/{id}', [PetController::class, 'Delete'])->name('pet-delete')->middleware('auth');