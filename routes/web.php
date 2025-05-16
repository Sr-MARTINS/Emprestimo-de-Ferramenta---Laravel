<?php

use App\Http\Controllers\FerramentController;
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FerramentController::class, 'index']);
Route::get('/ferramenta/create', [FerramentController::class, 'create'])->middleware('auth');
Route::post('/ferramenta', [FerramentController::class, 'store']);
Route::get('/ferramenta/edit/{id}', [FerramentController::class, 'edit']);
Route::put('/ferramenta/update/{id}', [FerramentController::class, 'update'])->middleware('auth');
Route::delete('/ferramenta/delete/{id}', [FerramentController::class, 'delete'])->middleware('auth');
Route::get('/dashboard', [FerramentController::class, 'dashboard'])->middleware('auth');
Route::post('ferramenta/join/{id}', [FerramentController::class, 'join'])->middleware('auth');
Route::delete('ferramenta/devolver/{id}', [FerramentController::class, 'devolver'])->middleware('auth');

Route::get('/funcionario', [FuncionarioController::class, 'index']);
Route::get('/funcionario/register', [FuncionarioController::class, 'register']);
Route::post('/funcionario/register/save', [FuncionarioController::class, 'save']);
Route::delete('/funcionario/delete/{id}', [FuncionarioController::class, 'delete']);