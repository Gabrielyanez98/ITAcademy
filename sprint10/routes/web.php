<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Log;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('login', [LoginController::class, 'login']);

Route::delete('logout', [LoginController::class, 'logout']);

Route::get('catalog', [IndexController::class, 'index']);

Route::get('catalog/create', [CreateController::class, 'create']);

Route::post('catalog/edit/{id}', [EditController::class, 'edit']);

Route::get('catalog/show/{id}', [ShowController::class, 'show']);




