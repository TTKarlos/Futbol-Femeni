<?php

use App\Http\Controllers\BienvenidaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartitsController;

Route::get('/', [BienvenidaController::class, 'index']);

Route::get('/equips', [EquipController::class, 'index']);

Route::get('/estadis', [EstadiController::class, 'index']);

Route::get('/jugadores', [JugadoresController::class, 'index']);

Route::get('/equips/{id}', [EquipController::class, 'show']);

Route::get('/partits', [PartitsController::class, 'index']);

Route::resource('equips', EquipController::class);

