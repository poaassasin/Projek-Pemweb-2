<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/edutech', function () {
    return view('EDUTECH.login');
});
Route::get('/edutech/dashboard', function () {
    return view('EDUTECH.dashboard');
});
Route::get('/edutech/list', function () {
    return view('EDUTECH.listMateri');
});
Route::get('/edutech/detail', function () {
    return view('EDUTECH.detailMateri');
});

require __DIR__.'/auth.php';
