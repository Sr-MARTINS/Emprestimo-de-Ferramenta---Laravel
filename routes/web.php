<?php

use App\Http\Controllers\FerramentController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\SetorController;
use Illuminate\Foundation\Bootstrap\SetRequestForConsole;
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

Route::get('/funcionario', [FuncionarioController::class, 'index'])->middleware('auth');
Route::get('/funcionario/register', [FuncionarioController::class, 'register'])->name('funcionario.register')->middleware('auth');
Route::post('/funcionario/register/save', [FuncionarioController::class, 'save'])->name('funcionario.save')
->middleware('auth');
Route::get('/funcionario/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit')
->middleware('auth');
Route::put('/funcionario/update/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update')
->middleware('auth');
Route::delete('/funcionario/delete/{id}', [FuncionarioController::class, 'delete'])->middleware('auth');

Route::get('/setores', [SetorController::class, 'detalhes']);
Route::get('/setores/register', [SetorController::class, 'create']);
Route::post('/setor/register/save', [SetorController::class, 'save']);
Route::delete('/setor/delete/{id}', [SetorController::class, 'destroy']);