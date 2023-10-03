<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, '__invoke'])->name('login');
Route::get('menu', [HomeController::class, 'index'])->name('menu');

Route::prefix('lfebs')->group(function () {
    
    Route::get('', [TeamController::class, 'index'])->name('index');
    
    Route::get('teams', [TeamController::class, 'teams'])->name('teams');
    Route::get('{id}/editteam', [TeamController::class, 'team'])->name('team');
    Route::get('teams/{id}', [TeamController::class, 'showTeam'])->name('teams.show');
    
    Route::get('matches', [MatchController::class, 'matches'])->name('matches');
    Route::get('users', [UserController::class, 'usersList'])->name('users.list');

    
    Route::middleware('auth')->group(function () {
        
        Route::post('teams/createteam', [TeamController::class, 'storeTeam'])->name('teams.store');
        Route::delete('teams/deleteteam', [TeamController::class, 'destroyTeam'])->name('teams.destroy');
        Route::get('teams/{id}/editteam', [TeamController::class, 'editTeam'])->name('teams.update');
        
        Route::put('players/{jugador}/editteam', [TeamController::class, 'updatePlayer'])->name('players.update');
        Route::post('players/{id}/editteam', [TeamController::class, 'storePlayer'])->name('players.store');
        Route::delete('players/{id}/editteam', [TeamController::class, 'destroyPlayer'])->name('players.destroy');
        
        Route::post('trainers/{id}/editteam', [TeamController::class, 'storeTrainer'])->name('trainers.store');
        Route::delete('trainers/{id}/editteam', [TeamController::class, 'destroyTrainer'])->name('trainers.destroy');
        Route::get('matches/{id}/editmatches', [MatchController::class, 'teamMatches'])->name('matches.update');
        Route::post('matches/{id}/editmatches', [MatchController::class, 'storeMatch'])->name('matches.store');
        Route::put('matches/{id}/editmatches', [MatchController::class, 'updateMatch'])->name('matches.update');
        
        Route::post('/users/{user}/assign-roles',[UserController::class, 'assignRoles'])->name('user.assign-roles');
    });
});



