<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\UpdatePasswordUser;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogInformationController;
use Illuminate\Support\Facades\Route;

// author_user','admin','super-admin'
Route::middleware(['auth' , 'auth.ensuretype:author_user,admin,super-admin'])->group(function () {

    Route::resource('/admin/articles', ArticleController::class);
    Route::resource('/admin/authors', AuthorController::class);
    Route::resource('/admin/users', UserController::class);

    Route::get('/admin/users/{user}/edit-password',[UpdatePasswordUser::class,'edit_password'])->name('users.edit-password');
    Route::put('/admin/users/update-user/{user}',[UpdatePasswordUser::class,'update'])->name('users.update-password');

    Route::get('/admin/blog_informations',[BlogInformationController::class,'index'])->name('blog_informations.index');
    Route::get('/admin/blog_informations/create',[BlogInformationController::class,'create'])->name('blog_informations.create');
    Route::post('/admin/blog_informations',[BlogInformationController::class,'store'])->name('blog_informations.store');
    Route::get('/admin/blog_informations/{blog_information}/edit',[BlogInformationController::class,'edit'])->name('blog_informations.edit');
    Route::put('/admin/blog_informations/{blog_information}',[BlogInformationController::class,'update'])->name('blog_informations.update');

});