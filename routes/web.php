<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello-world', function () {
    return 'Hello, World!';
});


Route::get('database', [DatabaseController::class, 'index']);
