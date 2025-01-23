<?php

use Illuminate\Support\Facades\Route;
use Jasanya\BlogSystem\Controllers\BlogController;

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('{slug}', [BlogController::class, 'show']);
});