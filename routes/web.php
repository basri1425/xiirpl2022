<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');
