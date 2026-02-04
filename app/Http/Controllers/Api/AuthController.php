<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        Log::info('User successfully logged in!');

        return response()->json([
            'message' => 'User successfully logged in!',
            'data' => [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ],
        ]);
    }

    public function logoutUser()
    {
        Log::info('User successfully logged out!');

        return response()->json([
            'message' => 'User successfully logged out!',
        ]);
    }
}
