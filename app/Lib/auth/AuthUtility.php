<?php

namespace App\lib\auth;


use Illuminate\Support\Facades\Log;

class AuthUtility
{
    public function authorizationMiddleware()
    {
        Log::info('User successfully logged in!');


    }
}