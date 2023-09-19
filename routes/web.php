<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', HomeController::class);// aquest es el link a la web principal
Route::controller(HomeController::class)->group(function(){ // creem un grup de rutes q comparteixen class 
    Route::get('cursos','index'); // nom de la class +`funció
    Route::get('cursos/{curso}/', 'welcome');
     // ej: curso/sumar = devolverá: benvenido al curso sumar
});

    