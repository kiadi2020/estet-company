<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/services', [HomeController::class, 'services']);


Route::get('/review', [HomeController::class, 'review'])->name('review');
Route::post('/review/check', [HomeController::class, 'rev']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'showReg']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'showLog']);

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/admin', [AdminController::class, 'showadmin']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);

Route::post('/post', [AdminController::class, 'post']);
