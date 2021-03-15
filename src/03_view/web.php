<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;

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


//HALAMAN HOME
Route::get('/home', [HomeController::class, 'home']);

//HALAMAN PRODUCT
Route::prefix('category')->group(function(){
    route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});
route::get('/productmain', [ProductController::class, 'productmain']);

//HALAMAN NEWS
Route::get('/news',[NewsController::class, 'news']);
Route::get('/news{string}',[NewsController::class, 'newsString']);

//HALAMAN PROGRAM
Route::prefix('program')->group(function(){
    route::get('/karir', [ProgramController::class, 'karir']);
    route::get('/magang', [ProgramController::class, 'magang']);
    route::get('/kunjunganindustri', [ProgramController::class, 'kunjunganindustri']);
});
Route::get('/programmain', [ProgramController::class, 'programmain']);

//HALAMAN ABOUT US
Route::get('/about-us', [AboutusController::class, 'aboutus']);

//HALAMAN CONTACT US
Route::get('/contact-us', [ContactController::class, 'contactus']);


   

