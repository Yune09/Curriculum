<?php

use App\Http\Controllers\ProfileController;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CVController;


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

require __DIR__.'/auth.php';
Route::get('/curriculums/create', [CurriculumController::class, 'create'])->name('curriculums.create');
Route::post('/curriculums/store', [CurriculumController::class, 'store'])->name('curriculums.store');



Route::get('/curriculums', [CurriculumController::class, 'index'])->name('curriculums');
Route::post('/curriculums', [CurriculumController::class, 'index'])->name('curriculums.index');

Route::post('/descargar-cv', [CVController::class, 'descargarCV'])->name('descargar-cv');
