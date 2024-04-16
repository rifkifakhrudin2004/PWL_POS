<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POScontroller;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// //Kategori
// Route::get('/kategori',[KategoriController::class,'index'])->name('index');
// Route::get('/kategori/create',[KategoriController::class,'create'])->name('createkategori');
// Route::post('/kategori',[KategoriController::class,'store']);
// Route::get('/kategori/update/{id}',[KategoriController::class,'update'])->name('/kategori/updatekategori');
// Route::put('/kategori/update_save/{id}',[KategoriController::class,'update_save']);
// Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

// //User
// Route::get('/user/create', [UserController::class, 'create'])->name('createuser');
// Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::get('/user', [UserController :: class, 'index'])->name('index');
// Route::post('/user', [UserController :: class, 'store']);
// Route::put('/user/{id}', [UserController :: class, 'edit_simpan'])->name('user.edit_simpan');
// Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');

// //Level
// Route::get('/level', [LevelController::class, 'index'])->name('level.index');
// Route::get('/level/create', [LevelController::class, 'create'])->name('levelcreate');
// Route::post('/level', [LevelController::class, 'store']);
// Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('/level/edit');
// Route::put('/level/{id}', [LevelController::class, 'edit_simpan'])->name('/level/edit_simpan');
// Route::get('/level/delete/{id}', [LevelController::class, 'delete'])->name('/level/delete');

// //POS
// Route::resource('m_user', POScontroller::class);

//layout
Route::get('/', [WelcomeController::class,'index']);

Route::group(["prefix" => "user"], function () {
    Route::get("/", [UserController::class, 'index']); // menampilkan halaman awal user
    Route::post("/list", [UserController::class, 'list']);// menampilkan data user dalam bentuk json untuk datatables
    Route::get("/create", [UserController::class, 'create']); // menampilkan halaman form tambah user
    Route::post("/", [UserController::class, 'store']);// menyimpan data user baru
    Route::get("/{id}", [UserController::class, 'show']);// menampilkan detail user
    Route::get("/{id}/edit", [UserController::class, 'edit']); // menampilkan halaman form edit user
    Route::put("/{id}", [UserController::class, 'update']);// menyimpan perubahan data user
    Route::delete("/{id}", [UserController::class, 'destroy']);// menghapus data user
});



