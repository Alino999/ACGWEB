<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoumettreAnnonceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicationMaisonController;
use UniSharp\LaravelFilemanager\Lfm;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('frontend.casaroyal.index');
});

Route::get('a_propos_de_nous', function () {
    return view('frontend.casaroyal.about-us');
});

Route::get('comparer', function () {
    return view('frontend.casaroyal.compare');
});

Route::get('tous_les_agents', function () {
    return view('frontend.casaroyal.all-agents');
});

Route::get('agent', function () {
    return view('frontend.casaroyal.single-agent');
});

Route::get('propriétés-grille-vue-avec-carte', function () {
    return view('frontend.casaroyal.properties-grid-view-with-map');
});


// route pour le formûlaire de publication 
Route::get('publication', [PublicationMaisonController::class, 'index']);
Route::post('publication', [PublicationMaisonController::class, 'store'])->name('publication');

// Route::get('blog-grandes-cartes-barre-latérale-gauche', function () {
//     return view('frontend.casaroyal.blog-big-cards-left-sidebar');
// });
Route::get('blog', [PostController::class, 'index'])->name('blog');

//nous contacter
Route::get('nous_contactez', [ContactController::class, 'index']);
Route::post('nous_contactez', [ContactController::class, 'store'])->name('nous_contactez');


//Soummettre une annonce
Route::get('soumettre_annonce', [SoumettreAnnonceController::class, 'index']);
Route::post('anonnce', [SoumettreAnnonceController::class, 'store1'])->name('annonce1');
Route::post('anonnce2', [SoumettreAnnonceController::class, 'store2'])->name('annonce2');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//route de blob
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
    Lfm::routes();
});
