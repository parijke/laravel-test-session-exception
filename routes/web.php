<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/upload', [TestController::class, 'showForm'])->name('upload.form');
Route::post('/upload', [TestController::class, 'handleUpload'])->name('upload.handle');
