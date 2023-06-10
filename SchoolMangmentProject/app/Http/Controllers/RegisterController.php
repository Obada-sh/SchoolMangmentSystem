<?php

namespace App\Http\Controllers;

use App\Models\ChildParent;
use App\Http\Requests\ParentRequest;
use App\Solid\Register\CreateParent;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\TeacherRequest;
use App\Solid\Register\CreateStudent;
use App\Solid\Register\CreateTeacher;

class RegisterController extends Controller
{

    public function registerParent(ParentRequest $request)
    {
        return CreateParent::createUser($request,"Parent");
    }

    public function registerStudent(StudentRequest $request)
    {
        return CreateStudent::createUser($request,"Student");
    }

    public function registerTeacher(TeacherRequest $request)
    {
        return CreateTeacher::createUser($request,"Teacher");
    }

}
