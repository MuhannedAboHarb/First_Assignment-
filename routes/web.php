<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');

Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');

Route::get('/{new_url}', [ProjectController::class, 'show'])->name('project.show');

Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
