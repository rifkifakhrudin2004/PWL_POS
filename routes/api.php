<?php
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\TransaksiController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/register1',App\Http\Controllers\Api\RegisterController::class)->name('register1');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('user', function(Request $request){
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');


//m_level
Route::get('levels', [LevelController :: class, 'index']);
Route::post('levels', [LevelController :: class, 'store']);
Route::get('levels/{level}', [LevelController :: class, 'show']);
Route::put('levels/{level}', [LevelController :: class, 'update']);
Route::delete('levels/{level}', [LevelController :: class, 'destroy']);

//m_user
Route::get('users', [UserController :: class, 'index']);
Route::post('users', [UserController :: class, 'store']);
Route::get('users/{user}', [UserController :: class, 'show']);
Route::put('users/{user}', [UserController :: class, 'update']);
Route::delete('users/{user}', [UserController :: class, 'destroy']);

//Kategori
Route::get('Kategori', [KategoriController:: class, 'index']);
Route::post('Kategori', [KategoriController :: class, 'store']);
Route::get('Kategori/{kategori}', [KategoriController :: class, 'show']);
Route::put('Kategori/{kategori}', [KategoriController :: class, 'update']);
Route::delete('Kategori/{kategori}', [KategoriController :: class, 'destroy']);

//Barang
Route::get('Barangs', [BarangController:: class, 'index']);
Route::post('Barangs', [BarangController :: class, 'store']);
Route::get('Barangs/{barang}', [BarangController :: class, 'show']);
Route::put('Barangs/{barang}', [BarangController :: class, 'update']);
Route::delete('Barangs/{barang}', [BarangController :: class, 'destroy']);

//Transaksi
Route::get('Transaksi', [TransaksiController:: class, 'index']);
Route::post('Transaksi', [TransaksiController :: class, 'store']);
Route::get('Transaksi/{transaksi}', [TransaksiController :: class, 'show']);
Route::put('Transaksi/{transaksi}', [TransaksiController :: class, 'update']);
Route::delete('Transaksi/{transaksi}', [TransaksiController :: class, 'destroy']);
