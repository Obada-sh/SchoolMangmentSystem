<?php

namespace App\Solid\Register;

use App\Models\Teacher;


class CreateTeacher implements CreateUser
{
    public static  function createUser($data,$role)
    {
        $user = CreateUserInfo::createUser($data,$role);

        $teacher = Teacher::create([
            'user_id'=> $user['id'],
            'salary'=>$data['salary'],
        ]);
        CreateSubjectHasTeacher::connectSubjects($data['subjects'],$teacher['user_id']);

        return TeacherRegistrationResponse::createResponse();
    }
}