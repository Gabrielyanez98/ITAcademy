<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\LigaController;
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
Route::get('/prueba', function () {
    return view('welcome');
});

Route::group(['middleware'=> 'auth'], function () {
    Route::get('/create', [EquipoController:: class, 'create'])->name('equipo.create')->middleware(['auth']);
    Route::post('/create', [EquipoController:: class, 'store'])->name('equipo.store');
    Route::get('/edit/{liga}', [EquipoController::class, 'edit'])->name('equipo.edit');
    Route::put('/edit/{liga}', [EquipoController::class, 'update'])->name('equipo.update');
    Route::delete('/delete/{liga}', [EquipoController::class, 'delete'])->name('equipo.delete');
});

Route::get('/', [LigaController::class, 'index'])->name('liga.home');



 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 
require __DIR__.'/auth.php';

Route::get('error', function (){
    return view('error');
});

Route::fallback(function () {
    return redirect('error');
}); 
