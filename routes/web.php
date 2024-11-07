<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.view');
    Route::get('/', [WeightController::class, 'index'])->name('home');
});

//Route::resource('weights', WeightController::class);
Route::post('/add', [WeightController::class, 'store'])->name('add');

require __DIR__.'/auth.php';
