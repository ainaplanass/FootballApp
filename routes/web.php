<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;

Route::get('/', [HomeController::class, '__invoke'])->name('home');

Route::prefix('lfebs')->group(function () {
    Route::get('', [TeamController::class, 'index'])->name('index');
    Route::post('teams/createteam', [TeamController::class, 'storeTeam'])->name('team.store');
    Route::delete('teams/deleteteam', [TeamController::class, 'destroyTeam'])->name('team.destroy');
    Route::get('teams', [TeamController::class, 'teams'])->name('teams');
    Route::get('{id}', [TeamController::class, 'showTeam'])->name('showTeam');
    Route::get('{id}/editteam', [TeamController::class, 'team'])->name('team');
    Route::put('player/{jugador}/editteam', [TeamController::class, 'updatePlayer'])->name('players.update');
    Route::post('player/{id}/editteam', [TeamController::class, 'storePlayer'])->name('players.store');
    Route::delete('player/{id}/editteam', [TeamController::class, 'destroyPlayer'])->name('players.destroy');
    Route::post('trainer/{id}/editteam', [TeamController::class, 'storeTrainer'])->name('trainer.store');
    Route::delete('trainer/{id}/editteam', [TeamController::class, 'destroyTrainer'])->name('trainer.destroy');
    Route::get('{id}/editmatches', [MatchController::class, 'matches'])->name('matches');
    Route::post('{id}/editmatches', [MatchController::class, 'store'])->name('matches.store');
    Route::put('{id}/editmatches', [MatchController::class, 'update'])->name('matches.update');
});

