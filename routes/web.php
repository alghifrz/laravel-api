<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClubController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
Route::get('/clubs/show/{id}', [ClubController::class, 'show'])->name('clubs.show');
Route::get('/clubs/edit/{id}', [ClubController::class, 'edit'])->name('clubs.edit');
Route::get('/clubs/delete/{id}', [ClubController::class, 'delete'])->name('clubs.delete');


// Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
// Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
// Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
// Route::get('/clubs/{id}', [ClubController::class, 'show'])->name('clubs.show');
// Route::get('/clubs/{id}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
// Route::put('/clubs/{id}', [ClubController::class, 'update'])->name('clubs.update');
// Route::get('/clubs/{id}/delete', [ClubController::class, 'delete'])->name('clubs.delete');
// Route::delete('/clubs/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');