<?php

use App\Http\Controllers\Admin\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/biodata', [BiodataController::class, 'index']);

