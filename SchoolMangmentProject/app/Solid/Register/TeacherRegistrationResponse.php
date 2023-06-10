<?php

namespace App\Solid\Register;


class TeacherRegistrationResponse
{
    public static function createResponse()
    {
        return response()->json(
            [
                "message" => "registered successfully",
                "status" => true,
            ],
            201
        );
    }
}