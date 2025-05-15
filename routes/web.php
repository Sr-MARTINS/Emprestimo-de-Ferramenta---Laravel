<?php

use App\Http\Controllers\FerramentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FerramentController::class, 'index']);
Route::get('/ferramenta/create', [FerramentController::class, 'create']);
Route::post('/ferramenta', [FerramentController::class, 'show']);
Route::get('/ferramenta/edit/{id}', [FerramentController::class, 'showEdit']);
Route::put('/ferramenta/update/{id}', [FerramentController::class, 'update']);
Route::delete('/ferramenta/delete/{id}', [FerramentController::class, 'delete']);
