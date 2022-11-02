<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserPostController;

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


Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('user/posts', [UserPostController::class, 'index']);
    Route::get('user/posts/create', [UserPostController::class, 'create']);
    Route::get('user/posts/{post}/edit', [UserPostController::class, 'edit']);
    Route::post('user/posts', [UserPostController::class, 'store']);
    Route::patch('user/posts/{post}', [UserPostController::class, 'update']);
    Route::delete('user/posts/{post}', [UserPostController::class, 'destroy']);
});

