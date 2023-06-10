<?php

namespace App\Solid\Register;


class TeacherRegistrationResponse
{
    public static function createResponse($data)
    {
        // return $user;
        return response()->json(
            [
                'message' => "registered successfully",
                'status' => true,
                'data' => $data
            ],
            201
        );
    }
}