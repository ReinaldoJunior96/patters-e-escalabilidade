<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CacheTestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache-test', [CacheTestController::class, 'index']);
