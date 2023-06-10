<?php

namespace App\Solid\Register;

use App\Models\Teacher;
use App\Solid\Register\TeacherRegistrationResponse;

class CreateTeacher implements CreateUser
{
    public static  function createUser($data)
    {
        $user = CreateUserInfo::createUser($data);

        $teacher = Teacher::create([
            'user_id'=> $user['user']['id'],
            'salary'=>$data['salary'],
            'subject_id'=>$data['subject_id'],
        ]);
        return TeacherRegistrationResponse::createResponse($data);
    }
}