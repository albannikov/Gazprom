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
Route::get('/car', [App\Http\Controllers\HomeController::class, 'car'])->middleware('RoleUser:user');
Route::get('/application', [App\Http\Controllers\HomeController::class, 'application'])->middleware('RoleUser:user');
Route::post('/add-car', [UserController::class,'addCar'])->middleware('RoleUser:user');
Route::post('/add-application', [UserController::class,'addApplication'])->middleware('RoleUser:user');


# Тестовые роуты
Route::get('/list', function(){
    return "admin";
})->middleware('RoleAdmin:admin');







Route::get('/qr', function(){
    return QrCode::size(300)->generate('123');
});