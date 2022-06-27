<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/show', [ArticleController::class, 'show'])->name('articles.show');