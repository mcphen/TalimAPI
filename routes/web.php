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
Route::get('/register',[\App\Http\Controllers\HomeController::class,'register'])->name("register");
Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/news', [\App\Http\Controllers\HomeController::class,'news'])->name('front.news');
Route::get('/contact', [\App\Http\Controllers\HomeController::class,'contacts'])->name('front.contacts');
Route::get('/formations', [\App\Http\Controllers\HomeController::class,'formations'])->name('front.formations');
Route::get('/formations/{slug}', [\App\Http\Controllers\HomeController::class,'formations_detail'])->name('front.formation_detail');
Route::get('/news/{slug}', [\App\Http\Controllers\HomeController::class,'news_detail'])->name('front.news_detail');
Route::get('/agencies', [\App\Http\Controllers\HomeController::class,'agences'])->name('front.agences');
Route::get('/bibliotheques', [\App\Http\Controllers\HomeController::class,'bibliotheque'])->name('front.bibliotheques');
Route::get('/talimeur', [\App\Http\Controllers\HomeController::class,'talimeur'])->name('front.talimeur');

Route::middleware('auth:sanctum')->group( function () {
    Route::get('/admin/dashboard',[\App\Http\Controllers\AdminController::class,'dashboard'])->name("admin.dashboard");
    Route::get('/admin/agences',[\App\Http\Controllers\AdminController::class,'agences'])->name("admin.agences");
    Route::get('/admin/filieres',[\App\Http\Controllers\AdminController::class,'filieres'])->name("admin.filieres");
    Route::get('/admin/cycles',[\App\Http\Controllers\AdminController::class,'cycles'])->name("admin.cycles");
    Route::get('/admin/pays',[\App\Http\Controllers\AdminController::class,'pays'])->name("admin.pays");
    Route::get('/admin/services',[\App\Http\Controllers\AdminController::class,'services'])->name("admin.services");
    Route::get('/admin/villes',[\App\Http\Controllers\AdminController::class,'villes'])->name("admin.villes");
    Route::get('/admin/roles',[\App\Http\Controllers\AdminController::class,'roles'])->name("admin.roles");
    Route::get('/admin/niveaux',[\App\Http\Controllers\AdminController::class,'niveaux'])->name("admin.niveaux");
    Route::get('/admin/niveaux',[\App\Http\Controllers\AdminController::class,'niveaux'])->name("admin.niveaux");


    Route::get('/agence/dashboard',[\App\Http\Controllers\AgenceController::class,'dashboard'])->name("agence.dashboard");
    Route::get('/agence/universities',[\App\Http\Controllers\AgenceController::class,'universities'])->name("agence.universities");
    Route::get('/agence/formations',[\App\Http\Controllers\AgenceController::class,'formations'])->name("agence.formations");
    Route::get('/agence/candidats',[\App\Http\Controllers\AgenceController::class,'candidats'])->name("agence.candidats");

    Route::get('/dashboard',[\App\Http\Controllers\CandidatController::class,'dashboard'])->name("dashboard");
});
