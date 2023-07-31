<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CommunicationsController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/communications/create',[CommunicationsController::class , 'create'])->name('communications.create');
Route::post('/communications',[CommunicationsController::class , 'store'])->name('communications.store');

Route::post('/comments',[CommentsController::class , 'store'])->name('comments.store');
Route::get('/comments/{id}',[CommentsController::class , 'show'])->name('comments.show');
Route::get('/articles/{id}',[ArticlesController::class , 'show'])->name('show.article');

Route::get('about_us',[ContactUsController::class , 'about_us'])->name('about_us');
