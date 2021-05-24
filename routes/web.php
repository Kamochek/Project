<?php

use App\Http\Controllers\articles;
use App\Http\Controllers\index;
use App\Http\Controllers\legends;
use App\Http\Controllers\register;
use App\Http\Controllers\proigrivatel;
use App\Http\Controllers\settings;
use App\Http\Controllers\video;
use Illuminate\Auth\Events\Login;
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

Route::get('/', [index::class, 'index']);
Route::get('/articles', [articles::class, 'index']);
Route::get('/legends', [legends::class, 'index']);
Route::get('/proigrivatel', [proigrivatel::class, 'index']);
Route::get('/setting', [settings::class, 'index']);
Route::get('/video', [video::class, 'index']);
Route::get('/register', [register::class, 'index']);
Route::post('/register', [register::class, 'create']);
Route::get('/login', [login::class, 'index']);
Route::post('/login', [login::class, 'create']);

