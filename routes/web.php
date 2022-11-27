<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [CurriculumController::class, 'index']);
Route::get('/posts/{post}', [CurriculumController::class ,'show']);
Route::get('/posts/create', [CurriculumController::class, 'create']);
Route::post('/posts', [CurriculumController::class, 'store']);
Route::get('/posts/{post}/edit', [CurriculumController::class, 'edit']);
Route::put('/posts/{post}', [CurriculumController::class, 'update']);
Route::get('/categories/{curriculum}', [CurriculumController::class, 'index']);
Route::delete('/posts/{post}', [CurriculumController::class,'delete']);
