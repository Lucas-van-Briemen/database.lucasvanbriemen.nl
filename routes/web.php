<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('database', [DatabaseController::class, 'index']
);
