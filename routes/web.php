<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LangController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('langs', LangController::class);
Route::resource('categories', CategoryController::class);
Route::get('/translate', [CategoryController::class, 'translate'])->name('translate');
Route::post('/translate', [CategoryController::class, 'storeTranslate'])->name('translate.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
