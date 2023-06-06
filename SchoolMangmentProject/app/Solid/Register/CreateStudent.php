<?php

namespace App\Solid\Register;

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\URL;
use App\Solid\Register\StudentRegistrationResponse;


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
            'address'=>$data['address'],
            'birth_date'=>$data['birth_date'],
        ]);
        return StudentRegistrationResponse::createResponse($user);

    }
}