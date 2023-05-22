<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\GenreController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(GenreController::class)->group(function () {
    Route::get('/genres', 'index')->name('genres');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::get('/genre/show/{id}', 'show')->name('genre');
    Route::post('/genre/store', 'store')->name('genre.store');
    Route::get('/genre/edit/{id}', 'edit')->name('genre.edit');
    Route::post('/genre/update/{id}', 'update')->name('genre.update');
    Route::get('/genre/delete/{id}', 'destroy')->name('genre.delete');
});

require __DIR__.'/auth.php';
