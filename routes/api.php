<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'signin']);
Route::post('candidature', [\App\Http\Controllers\API\CandidatController::class, 'candidature']);
Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'signup']);
Route::resource('services', \App\Http\Controllers\API\ServiceController::class);
Route::middleware('auth:sanctum')->group( function () {
    Route::resource('roles', \App\Http\Controllers\API\RoleController::class);
    Route::resource('agences', \App\Http\Controllers\API\AgenceController::class);
    Route::resource('pays', \App\Http\Controllers\API\PaysController::class);
    Route::resource('villes', \App\Http\Controllers\API\VilleController::class);
    Route::resource('cycles', \App\Http\Controllers\API\CycleController::class);
    Route::resource('filieres', \App\Http\Controllers\API\FiliereController::class);
    Route::resource('niveaux', \App\Http\Controllers\API\NiveauController::class);
    Route::resource('universities', \App\Http\Controllers\API\UniversityController::class);
    Route::resource('formations', \App\Http\Controllers\API\FormationController::class);
    Route::resource('cursus', \App\Http\Controllers\API\CursusController::class);

});
