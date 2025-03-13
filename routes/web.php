<?php

use App\Http\Controllers\Admin\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/biodata/create', [BiodataController::class, 'create']);
Route::post('/biodata/store', [BiodataController::class, 'store']);

