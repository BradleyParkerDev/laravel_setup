<?php

namespace App\Services;


use Illuminate\Support\Facades\Log;

class UserService
{
    public function createUserData($userData = null)
    {
        Log::info('User successfully registered!');

        return response()->json([
            'message' => 'User successfully registered!',
        ]);
    }

    public function getUserData(?string $userId = null, ?string $firstName = null, ?string $lastName = null)
    {
        Log::info('User successfully retrieved!');

        return response()->json([
            'message' => 'User successfully retrieved!',
        ]);
    }

    public function updateUserData($request)
    {
        Log::info('User successfully updated!');

        return response()->json([
            'message' => 'User successfully updated!',
            'data' => $request->all(),
        ]);
    }

    public function deleteUserData(?string $userId = null)
    {
        Log::info('User successfully deleted!');

        return response()->json([
            'message' => 'User successfully deleted!',
        ]);
    }
}
