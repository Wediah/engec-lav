<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectsController;
use App\Http\Middleware\SuperAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware
([SuperAdminMiddleware::class]);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware
([SuperAdminMiddleware::class]);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware
([SuperAdminMiddleware::class]);
});

Route::get('/admin/project/create', [projectsController::class, 'create'])->name('project.create')->middleware
([SuperAdminMiddleware::class]);
Route::post('/admin/project/store', [projectsController::class, 'store'])->name('project.store')->middleware
([SuperAdminMiddleware::class]);
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';
