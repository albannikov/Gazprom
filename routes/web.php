<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QRController;
use Illuminate\Support\Facades\Auth;

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
    if(Auth::check()){
        return redirect('/home');
    }
    else{
        return redirect('/login');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/car', [App\Http\Controllers\HomeController::class, 'car'])->middleware('RoleUser:user');
Route::get('/application', [App\Http\Controllers\HomeController::class, 'application'])->middleware('RoleUser:user');
Route::get('/pass',[App\Http\Controllers\HomeController::class, 'pass'])->middleware('RoleUser:user');
Route::post('/add-car', [UserController::class,'addCar'])->middleware('RoleUser:user');
Route::post('/add-application', [UserController::class,'addApplication'])->middleware('RoleUser:user');


Route::get('/application-admin',[App\Http\Controllers\HomeController::class, 'applicationAdmin'])->middleware('RoleAdmin:admin');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->middleware('RoleAdmin:admin');
Route::post('/post-search', [App\Http\Controllers\HomeController::class, 'postSearch'])->middleware('RoleAdmin:admin');
Route::post('/application-accpet', [AdminController::class,'applicationAccpet'])->middleware('RoleAdmin:admin');
Route::post('/changeStatus', [AdminController::class,'changeStatus'])->middleware('RoleAdmin:admin');


Route::get('/qr-code/{number}', [QRController::class, 'index']);

# Тестовые роуты


Route::get('/qr', function(){
    return QrCode::size(300)->generate('123');
});