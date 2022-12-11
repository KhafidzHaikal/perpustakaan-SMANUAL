<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

/* Dashboard */
Route::get('/user/dashboard', [AuthController::class, 'dashboardUser'])->name('dashboard.user')->middleware(['auth', 'user']);
Route::get('/admin/dashboard', [AuthController::class, 'dashboardAdmin'])->name('dashboard.admin')->middleware(['auth', 'admin']);

Route::get('/signup', [AuthController::class, 'showSignup'])->name('view.signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

/* Autentikasi */
Route::get('/login', [AuthController::class, 'viewLogin'])->name('view.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/* Buku */
Route::get('/buku', [BookController::class, 'viewDaftarBuku'])->name('view.buku')->middleware('auth');
Route::get('/buku/create', [BookController::class, 'viewTambahBuku'])->name('view.tambah.buku')->middleware(['auth', 'admin']);
Route::post('/buku/create', [BookController::class, 'tambahBuku'])->name('tambah.buku')->middleware(['auth', 'admin']);
Route::get('/buku/edit/{buku}', [BookController::class, 'viewEditBuku'])->name('view.edit.buku')->middleware(['auth', 'admin']);
Route::put('/buku/{buku}', [BookController::class, 'editBuku'])->name('edit.buku')->middleware(['auth', 'admin']);
Route::delete('/buku/{buku}', [BookController::class, 'hapusBuku'])->name('hapus.buku')->middleware(['auth', 'admin']);