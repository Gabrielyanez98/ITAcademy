<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InscribirseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\recuperarPasswordController;
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

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::get('inscribirse', [InscribirseController::class, 'inscribirse'])->name('inscribirse');

Route::delete('logout', [LoginController::class, 'logout']);

Route::get('recuperar_contrasenia', [recuperarPasswordController::class, 'recuperarPassword'])->name('recuperarPassword');

Route::get('catalog', [IndexController::class, 'index'])->name('index');

Route::get('catalog/form', [CreateController::class, 'form'])->name('catalog.form');

Route::post('catalog/create', [CreateController::class, 'create'])->name('catalog.create');

Route::put('catalog/edit/{id}', [EditController::class, 'edit'])->name('catalog.edit');

Route::get('catalog/edit/{id}', [EditController::class, 'editVista'])->name('catalog.editVista');

Route::get('catalog/show/{id}', [ShowController::class, 'show']);





Route::fallback(function () {
    return "Error. Esta página no existe";
}); 



