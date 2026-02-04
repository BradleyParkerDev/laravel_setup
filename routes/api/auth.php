<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('/login-user', [AuthController::class, 'loginUser']);
    Route::delete('/logout-user', [AuthController::class, 'logoutUser']);
});
