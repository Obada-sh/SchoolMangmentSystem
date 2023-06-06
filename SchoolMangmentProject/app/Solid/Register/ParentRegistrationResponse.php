<?php

namespace App\Solid\Register;

use Illuminate\Http\JsonResponse;

class ParentRegistrationResponse
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
