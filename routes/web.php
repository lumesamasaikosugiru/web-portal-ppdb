<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BiodataController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\DaftarakunController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Islogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DocumentController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/daftarakun', [DaftarakunController::class, 'daftarakun']);

Route::middleware(Islogin::class)->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    // <>
    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::get('/biodata/create', [BiodataController::class, 'create']);
    Route::post('/biodata/store', [BiodataController::class, 'store']);
    Route::delete('/biodata/{id}', [BiodataController::class, 'delete']);
    Route::get('/biodata/edit/{id}', [BiodataController::class, 'edit']);
    Route::put('/biodata/{id}', [BiodataController::class, 'update']);
    // <batas controller biodata/>

    // <>
    Route::get('/document', [DocumentController::class, 'index']);
    Route::get('/document/create', [DocumentController::class, 'create']);
    Route::post('/document/store', [DocumentController::class, 'store']);
    Route::delete('/document/{id}', [DocumentController::class, 'delete']);
    Route::get('/document/edit/{id}', [DocumentController::class, 'edit']);
    Route::put('/document/{id}', [DocumentController::class, 'update']);
    // <batas controller document/>
});

Route::get('/registration', [RegisterController::class, 'index']);
