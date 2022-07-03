<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
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
Route::get('/', function(){
	return view('home');
})->name('home');


Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth');

Route::get('/login','App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', [LoginController::class,'store']);


Route::get('/logout','App\Http\Controllers\LogoutController@store')->name('logout');

Route::get('/register','App\Http\Controllers\RegisterController@index')->name('register');

Route::post('/register', [RegisterController::class,'store']);


Route::get('/post','App\Http\Controllers\PostController@index')->name('post');
Route::post('/post','App\Http\Controllers\PostController@store');

Route::post('/post/{post}/likes','App\Http\Controllers\PostLikeController@store')->name('post.likes');

Route::delete('/post/{post}/likes','App\Http\Controllers\PostLikeController@destroy')->name('post.likes');
