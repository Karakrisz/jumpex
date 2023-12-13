<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/header', 'HeaderFooterController@getHeaderContent');

// Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/json-posts', [PostController::class, 'jsonPosts']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::view('/blog', 'blog');

Route::get('/footer', 'HeaderFooterController@getFooterContent');