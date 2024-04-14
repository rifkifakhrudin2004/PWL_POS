<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;


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
//create kategori
Route::get('/kategori',[KategoriController::class,'index'])->name('index');
Route::get('/kategori/create',[KategoriController::class,'create'])->name('createkategori');
Route::post('/kategori',[KategoriController::class,'store']);

// Edit Kategori
Route::get('/kategori/update/{id}',[KategoriController::class,'update'])->name('/kategori/updatekategori');
Route::put('/kategori/update_save/{id}',[KategoriController::class,'update_save']);

// Delete Kategori
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

Auth::routes();

