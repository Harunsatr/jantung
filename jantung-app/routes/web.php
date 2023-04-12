<?php

use App\Http\Controllers\BayesController;
use App\Http\Controllers\ConfusionController;
use App\Http\Controllers\ConfusionKmeansController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmeansController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// kmeans
Route::post('/kmeans', [KmeansController::class, 'output'])->name('kmeans');
Route::get('/kmeans', [KmeansController::class, 'output'])->name('kmeans');

// naives bayes
Route::get('/bayes', [BayesController::class, 'output'])->name('bayes');

// confusion matriks kmeans
Route::get('/confusion-kmeans', [ConfusionKmeansController::class, 'confusionKmeans'])->name('confusionKmeans');

// confusion matriks bayes
Route::get('/confusion-bayes', [ConfusionController::class, 'confusionBayes'])->name('confusionBayes');
