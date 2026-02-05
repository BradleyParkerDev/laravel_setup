<?php

namespace App\Http\Controllers\Api;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }

    public function registerUser()
    {
        return $this->userService->createUserData();
    }

    public function getUser()
    {
        return $this->userService->getUserData();
    }

    public function updateUser(Request $request)
    {
        return $this->userService->updateUserData($request);
    }

    public function deleteUser()
    {
        return $this->userService->deleteUserData();
    }
}
