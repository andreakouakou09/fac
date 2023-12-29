<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrondController;
use App\Http\Controllers\MessageController;
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

Route::get('/', [FrondController::class, 'accueil']);
Route::get('/apropos', [FrondController::class, 'apropos']);
Route::get('/services', [FrondController::class, 'services']);
Route::get('/actualites', [FrondController::class, 'actualites']);
Route::get('/contact', [FrondController::class, 'contact']);
Route::post('/contact_traitement', [FrondController::class, 'traitement_contact']);
// Route::post('/contact_mail', [FrondController::class, 'contact_mail_send']);


Route::get('/dashboard',  [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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

    // MESSAGES
    Route::get('/messages', [MessageController::class, 'liste_message']);
    Route::get('/view_contact/{contact}', [MessageController::class, 'show_message']);
    Route::get('/supprimer_contact/{contact}', [MessageController::class,'delete_message']);

});

require __DIR__.'/auth.php';
