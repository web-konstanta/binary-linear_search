<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('algorithm')->group(function () {
    Route::get('/linear', [ProductController::class, 'linearSearch']);
});
