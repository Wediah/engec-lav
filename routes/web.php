<?php

use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectsController;
use App\Http\Middleware\SuperAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/project/{slug}', [ProjectsController::class, 'show'])->name('project.show');

Route::post('/customer', [ContactInfoController::class, 'storeContactInfo'])->name('contact.store');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/project/create', [projectsController::class, 'create'])->name('project.create');
    Route::post('/admin/project/store', [projectsController::class, 'store'])->name('project.store');
    Route::post('/admin/project/{id}delete', [projectsController::class, 'delete'])->name('project.delete');
    Route::get('/admin/dashboard', [projectsController::class, 'dash'])->name('dashboard');
});




require __DIR__.'/auth.php';
