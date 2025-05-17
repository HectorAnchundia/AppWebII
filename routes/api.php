<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ParaleloController;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//RUTAS PARA ESTUDIANTES
Route::get('/estudiantes', [EstudianteController::class,'index']);
Route::post('/estudiantes',[EstudianteController::class,'store']);
Route::get('/estudiantes/{id}',[EstudianteController::class,'show']);
Route::put('/estudiantes/{id}',[EstudianteController::class,'update']);
Route::delete('/estudiantes/{id}',[EstudianteController::class,'destroy']);

//RUTAS PARA PARALELOS
Route::get('/paralelos', [ParaleloController::class,'index']);
Route::post('/paralelos',[ParaleloController::class,'store']);
Route::get('/paralelos/{id}',[ParaleloController::class,'show']);
Route::put('/paralelos/{id}',[ParaleloController::class,'update']);
Route::delete('/paralelos/{id}',[ParaleloController::class,'destroy']);