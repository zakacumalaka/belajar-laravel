<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\authcontroller;
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

Route::get('/',[authcontroller::class,'login']);
Route::get('/produk',[ProdukController::class,'index']);
Route::get('/produk/tambah',[ProdukController::class,'tambah']);
Route::post('/produk/save',[ProdukController::class,'simpan']);
Route::delete('/produk/{ProdukID}',[ProdukController::class,'delete']);
Route::get('/produk/{ProdukID}/edit',[ProdukController::class,'edit']);
Route::put('/produk/{ProdukID}',[ProdukController::class,'update']);
Route::get('/register',[authcontroller::class,'register']);
Route::post('/register',[authcontroller::class,'aksi_register']);
Route::get('/login',[authcontroller::class,'login']);
Route::post('/login',[authcontroller::class,'aksi_login']);
