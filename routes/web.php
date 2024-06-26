<?php

use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\EmprunterController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\LivreController;
use App\Models\Etudiant;
use App\Models\Livre;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('filieres', FiliereController::class);
Route::resource('etudiants', EtudiantController::class);
Route::resource('livres', LivreController::class);
Route::get('/emprunter',[EmpruntController::class,'create'] )->name('emprunts.create');
Route::post('/emprunter',[EmpruntController::class,'store'] )->name('emprunts.store');
//affiche la page emprunt

