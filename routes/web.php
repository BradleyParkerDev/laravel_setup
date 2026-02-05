<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'homePage']);
Route::get('/auth', [WebController::class, 'authPage']);
Route::get('/settings', [WebController::class, 'settingsPage']);
Route::get('/user/{id}', [WebController::class, 'userPage']);
