<?php

use Illuminate\Support\Facades\Route;
//front
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
//back
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\LoginController;

//BACKEND
//Dashboard 
Route::get('dashboard' , [DashboardController::class , 'index'])->name('dashboard');
Route::get('login' , [LoginController::class, 'index'])->name('login');
Route::post('login' , [LoginController::class , 'loginPost'])->name('login-post');
Route::get('logout' , [LoginController::class ,'logoutGet'])->name('logout');



//FRONTEND
//Article
Route::get('/' , [ArticleController::class , 'index'])->name('home');
Route::get('/blog/{slug}' , [ArticleController::class, 'singlePage'])->name('single');

//Contact 
Route::get('/contact' , [ContactController::class , 'index'])->name('contact');
Route::post('contact-post' , [ContactController::class , 'contactPost'])->name('contact-post');


