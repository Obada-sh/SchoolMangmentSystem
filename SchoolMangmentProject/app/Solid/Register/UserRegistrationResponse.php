<?php

namespace App\Solid\Register;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserRegistrationResponse
{
    public static function createResponse(User $user, $token)
    {
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return $response;
    }
}
