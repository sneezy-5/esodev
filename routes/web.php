<?php

use App\Http\Controllers\esodev\AccueilController;
use App\Http\Controllers\esodev\ContactController;
use App\Http\Controllers\esodev\DevisController;
use App\Http\Controllers\esodev\NewsletterController;
use App\Http\Controllers\esodev\NosrealisationController;
use App\Http\Controllers\esodev\QuisommenousController;
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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/quisommesnous', [QuisommenousController::class, 'index'])->name('quisommesnous');

Route::get('/nosrealisations', [NosrealisationController::class, 'index'])->name('nosrealisations');

Route::resource('/contact', ContactCotroller::class)->only('create', 'store');

Route::resource('/devis', DevisController::class)->only('create', 'store');

Route::resource('/newsletter', NewsletterController::class)->only('create', 'store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
