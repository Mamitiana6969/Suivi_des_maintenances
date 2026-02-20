<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/utilisateur', [UtilisateurController::class, 'liste_utilisateur']);
Route::get('/materiel', [MaterielController::class, 'liste_materiel']);
Route::get('/liste_materiel', [MaterielController::class, 'liste_materiel']);
Route::get('/liste_utilisateur', [UtilisateurController::class, 'liste_utilisateur']);

Route::get('/ajouter_materiel', [MaterielController::class, 'ajouter_materiel']);
Route::post('/ajouter_materiel', [MaterielController::class, 'ajouter_materiel_traitement']);
Route::post('/ajouter_utilisateur', [UtilisateurController::class, 'ajouter_utilisateur_traitement']);
Route::get('/modifier_utilisateur/{id_utilisateur}', [UtilisateurController::class, 'modifier_utilisateur']);
Route::get('/modifier_materiel/{id_materiel}', [MaterielController::class, 'modifier_materiel']);
Route::post('/modifier_utilisateur', [UtilisateurController::class, 'modifier_utilisateur_traitement']);
Route::post('/modifier_materiel', [MaterielController::class, 'modifier_materiel_traitement']);


Route::get('/ajouter_utilisateur', [UtilisateurController::class, 'ajouter_utilisateur']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';