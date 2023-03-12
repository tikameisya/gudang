<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
   return view('login');
 });   

Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'login_action'])->name('login_action');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');
Route::get('/barang',[BarangController::class,'barang']);
Route::get('/create',[BarangController::class,'create'])->name('create');
Route::post('/creating',[BarangController::class,'creating'])->name('creating');
Route::get('/barang/{id}/edit',[BarangController::class,'edit'])->name('edit');
Route::put('/editing/{id}',[BarangController::class,'editing'])->name('editing');
Route::delete('/barang/{id}',[BarangController::class,'delete'])->name('delete');



