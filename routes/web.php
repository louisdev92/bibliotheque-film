<?php

use App\Http\Controllers\FilmController;

Route::get('/', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::post('/films', [FilmController::class, 'store'])->name('films.store');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{film}', [FilmController::class, 'update'])->name('films.update');
Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('films.destroy');
