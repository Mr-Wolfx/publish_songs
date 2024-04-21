<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');



Route::get('/song/create', [SongController::class, 'create'])->name('song.create');



Route::post('/song/store', [SongController::class, 'store'])->name('song.store');


Route::get('/song/index', [SongController::class, 'index'])->name('song.index');
