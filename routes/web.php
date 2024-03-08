<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function() {
    Route::get('login', [LoginController::class, 'index']);
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [LoginController::class, 'registerPage'])->name('regpage');
    Route::post('register', [LoginController::class, 'register'])->name('register');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/hello', [UserController::class, 'index']);
Route::get('/hello/{user}', [UserController::class, 'user']);
Route::get('/test', function(){
    return view('test');
});

Route::middleware('auth')->group(function () {
    Route::resource('kelas',KelasController::class);
    Route::get('/siswa/trash', [SiswaController::class, 'showTrash'])->name('siswa.trash');
    Route::get('/siswa/{id}/restore', [SiswaController::class, 'restore'])->name('siswa.restore');
    Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete'])->name('siswa.delete');
    Route::resource('siswa',SiswaController::class);
});

