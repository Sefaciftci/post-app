<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Back\DashboardController;

//BACKEND
//Dashboard 
Route::get('dashboard' , [DashboardController::class , 'index'])->name('dashboard');


//FRONTEND
//Article
Route::get('/' , [ArticleController::class , 'index'])->name('home');
Route::get('/blog/{slug}' , [ArticleController::class, 'singlePage'])->name('single');

//Contact 
Route::get('/contact' , [ContactController::class , 'index'])->name('contact');
Route::post('contact-post' , [ContactController::class , 'contactPost'])->name('contact-post');

