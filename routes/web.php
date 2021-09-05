<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/dashboard', [AdminController::class, 'home'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Post routes
Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {

        Route::get('/listings/index', [ListingController::class, 'index'])->name('listings.index');
        Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');
        Route::post('/listings/store', [ListingController::class, 'store'])->name('listings.store');
        Route::get('/listings/{id}/edit', [ListingController::class, 'edit'])->name('listings.edit');
        Route::post('/listings/{id}/update', [ListingController::class, 'update'])->name('listings.update');
        Route::get('/listings/{id}/destroy', [ListingController::class, 'destroy'])->name('listings.destroy');
        Route::get('/listings/trashed', [ListingController::class, 'trashed'])->name('listings.trashed');
        Route::get('/listings/{id}/undelete', [ListingController::class, 'undelete'])->name('listings.undelete');
        Route::get('/listings/{id}/remove', [ListingController::class, 'remove'])->name('listings.remove');
        Route::post('/listings/search', [ListingController::class, 'search'])->name('listings.search');
    });
});

