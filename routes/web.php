<?php

use App\Http\Controllers\Admin\BiodataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DocumentController;
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

