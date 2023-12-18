<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/ticket', [HomeController::class, 'ticket'])->name('home.ticket');
Route::get('/close', [HomeController::class, 'close'])->name('home.close');
Route::get('/pilgrimage', [HomeController::class, 'pilgrimage'])->name('home.pilgrimage');

