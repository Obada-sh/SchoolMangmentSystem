<?php

namespace App\Solid\Register;

use Illuminate\Http\JsonResponse;

class StudentRegistrationResponse
{
    public static function createResponse($user)
    {
        return response()->json(
            [
                'message' => "registered successfully",
                'status' => true,
                'data' => $user
            ],
            201
        );
    }
}