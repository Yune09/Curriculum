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
//Route::get('/curriculums/edit', [CurriculumController::class, 'edit'])->name('curriculums.edit');
Route::post('/curriculums/store', [CurriculumController::class, 'store'])->name('curriculums.store');
//Route::delete('/curriculums/{id}', [CvController::class, 'destroy'])->name('eliminar-curriculums');

Route::get('curriculums/{id}/edit', [CurriculumController::class, 'edit'])->name('curriculum.edit');
Route::put('curriculums/{id}', [CurriculumController::class, 'update'])->name('curriculums.update');
Route::get('curriculums/{id}/delete', [CurriculumController::class, 'showDeleteForm'])->name('curriculum.delete');
Route::delete('curriculums/{id}', [CurriculumController::class, 'destroy'])->name('curriculums.destroy');



Route::get('/curriculums', [CurriculumController::class, 'index'])->name('curriculums');
Route::post('/curriculums', [CurriculumController::class, 'index'])->name('curriculums.index');



Route::post('/descargar-cv', [CVController::class, 'descargarCV'])->name('descargar-cv');
