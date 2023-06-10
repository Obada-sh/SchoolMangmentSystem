<?php

namespace App\Solid\Register;

class TeacherRegistrationResponse
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