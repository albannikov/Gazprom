<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\UserController;
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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



# Тестовые роуты
Route::get('/list', function(){
    return "admin";
})->middleware('RoleAdmin:admin');

Route::post('/add-car', [UserController::class,'addCar'])->middleware('RoleUser:user');




Route::get('/qr', function(){
    return QrCode::size(300)->generate('123');
});