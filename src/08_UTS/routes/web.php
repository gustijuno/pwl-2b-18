<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgrammainController;
use App\Http\Controllers\ProductmainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//HALAMANA ABOUT
Route::get('/about', [AboutController::class, 'about']);
//HALAMAN CONTACT
Route::get('/contact', [ContactController::class, 'contact']);
//HALAMAN PROGRAM
Route::prefix('program')->group(function(){
    route::get('/karir', [ProgramController::class, 'karir']);
    route::get('/magang', [ProgramController::class, 'magang']);
    route::get('/kunjunganindustri', [ProgramController::class, 'kunjunganindustri']);
});
Route::get('/programmain', [ProgrammainController::class, 'programmain']);
//Route::get('/programmain', 'ProgramController@index')->name('programmain');
//HALAMAN PRODUCT 
Route::prefix('category')->group(function(){
    route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});
route::resource('productmains', ProductmainController::class);
//HALAMAN NEWS
Route::get('/news',[NewsController::class, 'news']);
Route::get('/news{string}',[NewsController::class, 'newsString']);

route::resource('users', UserController::class);
route::resource('posts', PostController::class);
route::resource('comments', CommentController::class);
