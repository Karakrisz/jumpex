<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\LanguagesController;


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

// Route::get('/{lang?}', function ($lang = 'hu') {
//     return view('welcome');
// })->where('lang', 'en|hu|de');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/header', 'HeaderFooterController@getHeaderContent');

Route::get('/{lang?}', [LanguagesController::class, 'home'])->where('lang', 'en|hu|de');
Route::get('/{lang?}/rolunk', [LanguagesController::class, 'about'])->where('lang', 'en|hu|de')->name('rolunk');
Route::get('/{lang?}/partnerek', [LanguagesController::class, 'partners'])->where('lang', 'en|hu|de')->name('partnerek');

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/json-posts', [PostController::class, 'jsonPosts']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/footer', 'HeaderFooterController@getFooterContent');