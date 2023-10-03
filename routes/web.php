<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;

Route::get('/', [HomeController::class, '__invoke'])->name('home');

Route::prefix('lfebs')->group(function () {

    Route::get('', [TeamController::class, 'index'])->name('index');

    Route::get('teams', [TeamController::class, 'teams'])->name('teams');
    Route::get('{id}/editteam', [TeamController::class, 'team'])->name('team');
    Route::post('teams/createteam', [TeamController::class, 'storeTeam'])->name('teams.store');
    Route::delete('teams/deleteteam', [TeamController::class, 'destroyTeam'])->name('teams.destroy');
    Route::get('teams/{id}', [TeamController::class, 'showTeam'])->name('teams.show');
    Route::get('teams/{id}/editteam', [TeamController::class, 'editTeam'])->name('teams.edit');
    
    Route::put('players/{jugador}/editteam', [TeamController::class, 'updatePlayer'])->name('players.update');
    Route::post('players/{id}/editteam', [TeamController::class, 'storePlayer'])->name('players.store');
    Route::delete('players/{id}/editteam', [TeamController::class, 'destroyPlayer'])->name('players.destroy');
    
    Route::post('trainers/{id}/editteam', [TeamController::class, 'storeTrainer'])->name('trainers.store');
    Route::delete('trainers/{id}/editteam', [TeamController::class, 'destroyTrainer'])->name('trainers.destroy');
    
    Route::get('matches', [MatchController::class, 'matches'])->name('matches');
    Route::get('matches/{id}/editmatches', [MatchController::class, 'teamMatches'])->name('matches.edit');
    Route::post('matches/{id}/editmatches', [MatchController::class, 'storeMatch'])->name('matches.store');
    Route::put('matches/{id}/editmatches', [MatchController::class, 'updateMatch'])->name('matches.update');
});


