<?php

use App\Http\Controllers\mlesz;
use App\Http\Controllers\login;
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

Route::get('/', [mlesz::class, 'index']);

Route::get('/about', [mlesz::class, 'about']);

Route::get('/login', [login::class, 'login']);
Route::post('/login', [login::class, 'auth']);
Route::post('/logout', [login::class, 'logout']);