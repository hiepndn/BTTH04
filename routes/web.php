<?php

use App\Http\Controllers\ThesesController;
use App\Models\Theses;
use Illuminate\Support\Facades\Route;

Route::get('/', [ThesesController::class,'index'])->name('theses.index');
// Route::resource('theses', ThesesController::class .'@index');
Route::get('/theses/create', [ThesesController::class,'create'])->name('theses.create');
Route::get('/theses/edit/{id}', [ThesesController::class,'edit'])->name('theses.edit');
