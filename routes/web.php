<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategorieController;
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

Route::get('/', function () {
    return view('welcome');
});

// POSTS
Route::get('/posts', [PostController::class,'liste_posts']);
Route::get('/ajouter_post', [PostController::class,'ajouter_post']);
Route::post('/ajouter_traitement_post', [PostController::class,'ajouter_traitement_post']);
Route::get('/modifier_post/{id}', [PostController::class,'modifier_post']);
Route::post('/modifier_traitement_post', [PostController::class,'modifier_traitement_post']);
Route::get('/supprimer_post/{id}', [PostController::class,'supprimer_post']);

// CATEGORIES
Route::get('/categories', [CategorieController::class,'liste_categories']);
Route::get('/ajouter_categorie', [CategorieController::class,'ajouter_categorie']);
Route::post('/ajouter_traitement_categorie', [CategorieController::class,'ajouter_traitement_categorie']);
Route::get('/modifier_categorie/{id}', [CategorieController::class,'modifier_categorie']);
Route::post('/modifier_traitement_category', [CategorieController::class,'modifier_traitement_category']);
Route::get('/supprimer_categorie/{id}', [CategorieController::class,'supprimer_categorie']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
