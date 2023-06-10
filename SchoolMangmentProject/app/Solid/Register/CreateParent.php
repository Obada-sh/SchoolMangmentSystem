<?php

namespace App\Solid\Register;

use App\Models\User;
use App\Models\ChildParent;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Casts\Json;
use App\Solid\Register\ParentRegistrationResponse;

class CreateParent implements CreateUser
{
    public static  function createUser($data)
    {

        $user = CreateUserInfo::createUser($data);

        ChildParent::create([
            'user_id'=> $user['user']['id']
        ]);
        return ParentRegistrationResponse::createResponse($user);

    }
}