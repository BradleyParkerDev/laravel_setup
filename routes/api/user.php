<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    Route::post('/register-user', [UserController::class, 'registerUser']);
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::put('/update-user', [UserController::class, 'updateUser']);
    Route::delete('/delete-user', [UserController::class, 'deleteUser']);
});
