<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',[\App\Http\Controllers\HomeController::class,'login'])->name("login");
Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth:sanctum')->group( function () {
    Route::get('/admin/dashboard',[\App\Http\Controllers\AdminController::class,'dashboard'])->name("admin.dashboard");
    Route::get('/admin/agences',[\App\Http\Controllers\AdminController::class,'agences'])->name("admin.agences");
    Route::get('/admin/filieres',[\App\Http\Controllers\AdminController::class,'filieres'])->name("admin.filieres");
    Route::get('/admin/cycles',[\App\Http\Controllers\AdminController::class,'cycles'])->name("admin.cycles");
    Route::get('/admin/pays',[\App\Http\Controllers\AdminController::class,'pays'])->name("admin.pays");
    Route::get('/admin/villes',[\App\Http\Controllers\AdminController::class,'villes'])->name("admin.villes");
    Route::get('/admin/roles',[\App\Http\Controllers\AdminController::class,'roles'])->name("admin.roles");
    Route::get('/admin/niveaux',[\App\Http\Controllers\AdminController::class,'niveaux'])->name("admin.niveaux");
    Route::get('/admin/niveaux',[\App\Http\Controllers\AdminController::class,'niveaux'])->name("admin.niveaux");


    Route::get('/agence/dashboard',[\App\Http\Controllers\AgenceController::class,'dashboard'])->name("agence.dashboard");
    Route::get('/agence/universities',[\App\Http\Controllers\AgenceController::class,'universities'])->name("agence.universities");
    Route::get('/agence/formations',[\App\Http\Controllers\AgenceController::class,'formations'])->name("agence.formations");
    Route::get('/agence/candidats',[\App\Http\Controllers\AgenceController::class,'candidats'])->name("agence.candidats");
});
