<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('aaa', function () {
    return view('layouts.auth');
});

Route::get('test', [TestController::class, 'test'])->name('test');

Route::prefix('users')->group(function () {
    Route::get('create', function () {
        return 'create user';
    });
    Route::get('update', function () {
        return 'update user';
    });
    Route::get('delete', function () {
        return 'delete user';
    });
});

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // articles routes
    Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

    // posts routes
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/update/{post}', [PostController::class, 'update'])->name('posts.update');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
});
