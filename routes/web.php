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
//Kategori
Route::get('/kategori',[KategoriController::class,'index'])->name('index');
Route::get('/kategori/create',[KategoriController::class,'create'])->name('createkategori');
Route::post('/kategori',[KategoriController::class,'store']);
Route::get('/kategori/update/{id}',[KategoriController::class,'update'])->name('/kategori/updatekategori');
Route::put('/kategori/update_save/{id}',[KategoriController::class,'update_save']);
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

//User
Route::get('/user/create', [UserController::class, 'create'])->name('createuser');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user', [UserController :: class, 'index'])->name('index');
Route::post('/user', [UserController :: class, 'store']);
Route::put('/user/{id}', [UserController :: class, 'edit_simpan'])->name('user.edit_simpan');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');

//Level
Route::get('/level', [LevelController::class, 'index'])->name('level.index');
Route::get('/level/create', [LevelController::class, 'create'])->name('levelcreate');
Route::post('/level', [LevelController::class, 'store']);
Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('/level/edit');
Route::put('/level/{id}', [LevelController::class, 'edit_simpan'])->name('/level/edit_simpan');
Route::get('/level/delete/{id}', [LevelController::class, 'delete'])->name('/level/delete');
