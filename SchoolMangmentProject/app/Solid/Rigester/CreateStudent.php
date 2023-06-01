<?php

namespace App\Solid\Rigester;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\URL;


class CreateStudent implements CreateUser
{
    public static  function createUser($data)
    {

        $user = CreateUserInfo::createUser($data);

        $student = Student::create([
            'user_id'=> $user['user']['id'],
            'is_in_bus'=>$data['is_in_bus'],
            'left_for_bus'=>$data['left_for_bus'],
            'left_for_qusat'=>$data['left_for_qusat'],
            'parent_id'=>$data['parent_id'],
            'section_id'=>$data['section_id'],
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