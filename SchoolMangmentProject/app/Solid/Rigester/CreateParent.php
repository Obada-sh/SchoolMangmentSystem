<?php

namespace App\Solid\Rigester;

use App\Models\User;
use App\Models\ChildParent;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\URL;

class CreateParent implements CreateUser
{
    public static  function createUser($data)
    {
        
        $user = CreateUserInfo::createUser($data);

        ChildParent::create([
            'user_id'=> $user['user']['id']
        ]);

            $response = [
                'user'=>$user,
                'token'=>$user['user']['token']
            ];
            return response()->json(
                [
                    'message' => "registered successfully",
                    'status' => true,
                    'data' => $response
                ]
            ,201 );
    }
}