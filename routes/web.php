<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');
