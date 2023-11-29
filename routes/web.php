<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TwitterController;
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


// Route::get('/', [UserController::class, 'create'])->name('user.create');
// Route::post('/created', [UserController::class, 'created'])->name('user.created');
// Route::get('/timeline', [TwitterController::class, 'index'])->name('twitter.index');
// Route::get('/tweet', [TwitterController::class, 'tweet'])->name('twitter.tweet');
// Route::post('/tweet', [TwitterController::class, 'tweet'])->name('twitter.tweet');
// Route::post('/timeline', [TwitterController::class, 'store'])->name('twitter.store');
// Route::get('/detail', [TwitterController::class, 'indetail'])->name('twitter.indetail');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
