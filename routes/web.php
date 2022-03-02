<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;


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



Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/', [MessageController::class,'home']);

Route::get('/mss', [MessageController::class,'home'])->name('message');
Route::get('/home', [MessageController::class,'home'])->name('home');

Route::post('/mss', [MessageController::class,'sendMessage'])->name('message')->middleware('auth');
Route::get('/register',[MessageController::class,'newregister'])->name('newregister');

Route::post('/register',[MessageController::class,'register'])->name('register');
Route::post('/logout',[MessageController::class,'logout'])->name('logout');
Route::post('/login',[MessageController::class,'login'])->name('login')->middleware(['guest']);

// Route::post('/dd', [MessageController::class, 'sendMessage'])->name('dye')->middleware('auth');


