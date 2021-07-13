<?php


use App\Http\Controllers\EmpleadosController;
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

Route::get('/', [EmpleadosController::class, 'index'])->name('empleados.index');

Route::get('/empleados/create',[EmpleadosController::class, 'create'])->name('empleados.create');

Route::post('/empleados/create', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::get('/empleados/edit/{empleado}', [EmpleadosController::class, 'edit'])->name('empleados.edit');

Route::put('/empleados/{empleado}', [EmpleadosController::class, 'update'])->name('empleados.update');

Route::delete('/empleados/{empleado}', [EmpleadosController::class, 'delete'])->name('empleados.delete');

Route::get('error', function (){
    return view('error');
});

Route::fallback(function () {
    return redirect('error');
}); 
