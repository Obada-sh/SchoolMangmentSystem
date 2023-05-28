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

        $parent = ChildParent::create([
            'user_id'=> $user['user']['id']
        ]);

    }
}