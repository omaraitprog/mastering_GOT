<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/postes',[ PostController::class,'index'])->name('postes.index');
Route::get('/postes/create',[ PostController::class,'create'])->name('postes.create');
Route::post('/postes',[PostController::class,'store'])->name('postes.store');

Route::delete('/postes/{post}/delete',[PostController::class,'destroy'])->name('postes.destroy');

Route::get('/postes/{post}/edit',[PostController::class,'edit'])->name('postes.edit');
Route::get('/postes/{post}',[PostController::class,'show'])->name('postes.show');
Route::put('/postes/{post}',[PostController::class,'update'])->name('postes.update');

Route::get('/components/maprojet',[PostContaroller::class,'comp'])->name('postes.comp');