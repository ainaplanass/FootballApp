<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, '__invoke'])->name('login');
Route::get('/register',[HomeController::class, 'register'])->name('register');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('lfebs')->group(function () {
    
    Route::middleware('auth')->group(function () {
        
        Route::get('/menu', [HomeController::class, 'index'])->name('menu');
        
        Route::get('teamslist', [TeamController::class, 'teamsList'])->name('teams.list');
        Route::get('teams', [TeamController::class, 'teams'])->name('teams');
        Route::get('{id}/editteam', [TeamController::class, 'team'])->name('team');
        Route::get('teams/{id}', [TeamController::class, 'showTeam'])->name('teams.show');
        Route::post('teams/createteam', [TeamController::class, 'storeTeam'])->name('teams.store')->middleware('can:teams.store');
        Route::delete('teams/deleteteam', [TeamController::class, 'destroyTeam'])->name('teams.destroy')->middleware('can:teams.destroy');
        
        Route::post('players/{id}/storeplayer', [TeamController::class, 'storePlayer'])->name('players.store')->middleware('can:players.store');
        Route::delete('players/{id}/destroyplayer', [TeamController::class, 'destroyPlayer'])->name('players.destroy')->middleware('can:players.destroy');
        Route::put('players/{id}/updateplayer', [TeamController::class, 'updatePlayer'])->name('players.update')->middleware('can:players.update');
        
        Route::post('trainers/{id}/store', [TeamController::class, 'storeTrainer'])->name('trainers.store')->middleware('can:trainers.store');
        Route::delete('trainers/{id}/destroy', [TeamController::class, 'destroyTrainer'])->name('trainers.destroy')->middleware('can:trainers.destroy');

        Route::get('matches', [MatchController::class, 'matches'])->name('matches');
        Route::get('matches/{id}/editmatches', [MatchController::class, 'teamMatches'])->name('matches.show');
        Route::post('matches/{id}/store', [MatchController::class, 'storeMatch'])->name('matches.store')->middleware('can:matches.store');;
        Route::delete('matches/{id}/destroy', [MatchController::class, 'destroyMatch'])->name('matches.destroy')->middleware('can:matches.destroy');;
        Route::put('matches/{id}/destroy', [MatchController::class, 'updateMatch'])->name('matches.update')->middleware('can:matches.update');;
        
        Route::post('/users/{user}/assign-roles',[UserController::class, 'assignRoles'])->name('user.assign-roles')->middleware('can:roles.update');;
        Route::get('users', [UserController::class, 'usersList'])->name('users.list');

        
    });
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
