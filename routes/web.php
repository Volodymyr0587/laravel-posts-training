<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/create', [PostController::class, 'create'])->name('post.create');

Route::post('/store', [PostController::class, 'store'])->name('post.store');

Route::get('/detail/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/edit/{post}', [PostController::class, 'edit'])->name('post.edit');

Route::put('/update/{post}', [PostController::class, 'update'])->name('post.update');

Route::delete('/destroy/{post}', [PostController::class, 'destroy'])->name('post.destroy');
