<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

/* Route::get('/', function(){
    return "Bienvenido a la página cursos";
}); */

/* Route::get('{curso}', function($curso){
    return "Bienvenido al curso: $curso";
});

Route::get('sprint9', function(){
    return "Bienvenido al sprint9";
}); */
