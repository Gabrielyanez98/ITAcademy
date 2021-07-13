<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\SprintController;
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

/* Route::get('/', function () {
     return view('welcome'); 
     return "Página principal"; 
});
 */


Route::get('/', [HomeController::class, 'home']);
Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/{cursos}', [CursoController::class, 'miCurso']);
Route::get('sprint', [SprintController::class, 'sprint']);


Route::get('paises', [PaisController::class, 'index']);
Route::post('paises', [PaisController::class, 'store']);
Route::get('paises/{paises}', [PaisController::class, 'show']);
Route::put('paises/{paises}', [PaisController::class, 'update']);
Route::delete('paises/{paises}', [PaisController::class, 'destroy']);
Route::get('paises/{paises}/departamentos', [DepartamentoController::class, 'index']);
Route::post('paises/{paises}/departamentos', [DepartamentoController::class, 'store']);
Route::get('paises/{paises}/departamentos/{departamento}', [DepartamentoController::class, 'store']);
Route::put('paises/{paises}/departamentos/{departamento}', [DepartamentoController::class, 'update']);
Route::delete('paises/{paises}/departamentos/{departamento}', [DepartamentoController::class, 'destroy']);
/* Route::get('/', function(){
    return "Bienvenido a la página cursos";
}); */

/* Route::get('{curso}', function($curso){
    return "Bienvenido al curso: $curso";
});

Route::get('sprint9', function(){
    return "Bienvenido al sprint9";
}); */
