<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HocSinhController;
use App\Http\Controllers\MonController;
use App\Http\Controllers\HosoDiemController;
use App\Http\Controllers\QuyenController;
use App\Http\Controllers\TaiKhoanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('hoc_sinh', HocSinhController::class);
Route::resource('mon', MonController::class);
Route::resource('hoso_diem', HosoDiemController::class);
Route::resource('quyen', QuyenController::class);
Route::resource('tai_khoan', TaiKhoanController::class);