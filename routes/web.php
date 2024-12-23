<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

//Article
Route::get('/' , [ArticleController::class , 'index'])->name('home');
Route::get('/blog/{slug}' , [ArticleController::class, 'singlePage'])->name('single');
