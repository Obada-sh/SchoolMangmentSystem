<?php

namespace App\Solid\Register;

use App\Models\Teacher;


class CreateTeacher implements CreateUser
{
    public static  function createUser($data)
    {
        $user = CreateUserInfo::createUser($data);

        $teacher = Teacher::create([
            'user_id'=> $user['user']['id'],
            'salary'=>$data['salary'],
        ]);
        CreateSubjectHasTeacher::connectSubjects($data['subjects'],$teacher['user_id']);

        return TeacherRegistrationResponse::createResponse($data);
    }
}