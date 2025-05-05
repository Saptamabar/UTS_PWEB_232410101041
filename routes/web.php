<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'welcome']);
Route::get('/login',[PageController::class,'login']);
Route::get('/dashboard',[PageController::class,'dashboard'])->name('dashboard');
Route::get('/pengelolaan',[PageController::class,'pengelolaan'])->name('pengelolaan');
Route::get('/profile',[PageController::class,'profile'])->name('profile');
Route::post('/logout',[PageController::class,'logout'])->name('logout');
