<?php

namespace App\Solid\Register;

use Illuminate\Http\JsonResponse;

class StudentRegistrationResponse
{
    public static function createResponse()
    {
        return response()->json(
            [
                'message' => "registered successfully",
                'status' => true,
            ],
            201
        );
    }
}