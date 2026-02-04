<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function registerUser()
    {
        Log::info('User successfully registered!');

        return response()->json([
            'message' => 'User successfully registered!',
        ]);
    }

    public function getUser()
    {
        Log::info('User successfully retrieved!');

        return response()->json([
            'message' => 'User successfully retrieved!',
        ]);
    }

    public function updateUser(Request $request)
    {
        Log::info('User successfully updated!');

        return response()->json([
            'message' => 'User successfully updated!',
            'data' => $request->all(),
        ]);
    }

    public function deleteUser()
    {
        Log::info('User successfully deleted!');

        return response()->json([
            'message' => 'User successfully deleted!',
        ]);
    }
}
