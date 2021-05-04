<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;


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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::resource('mahasiswas', MahasiswaController::class);
Route::get('mahasiswas/nilai/{Nim}', [MahasiswaController::class, 'nilai'])->name('mahasiswas.nilai');
Route::get('mahasiswas/cetak-khs/{Nim}', [MahasiswaController::class, 'cetak_khs'])->name('nilai.cetak');

Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);