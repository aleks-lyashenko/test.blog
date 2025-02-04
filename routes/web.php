<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;

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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/' , '\App\Http\Controllers\Main\IndexController@index')->name('main');
});

Route::group(['prefix' => 'admin'], function() {
    Route::resource('categories', CategoryController::class);
});
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::resource('posts', PostController::class);
});

Route::get('/test', function () {
    return view('test')->with('request');
})->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
