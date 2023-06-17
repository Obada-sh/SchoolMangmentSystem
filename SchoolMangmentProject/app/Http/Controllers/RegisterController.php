<?php

namespace App\Http\Controllers;

use App\Models\ChildParent;
use App\Solid\Read\Get\GetClasses;
use App\Http\Requests\ParentRequest;
use App\Solid\Register\CreateParent;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\TeacherRequest;
use App\Solid\Register\CreateStudent;
use App\Solid\Register\CreateTeacher;
use App\Http\Requests\GetSectionsRequest;
use App\Solid\Register\CreateUser;

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

    public function getClasses()
    {
        return CreateStudent::getClasses();
    }

    public function getSections(GetSectionsRequest $request)
    {
        return CreateStudent::getSections($request['class_id']);
    }

    public function registerTeacher(TeacherRequest $request)
    {
        return CreateTeacher::createUser($request,"Teacher");
    }

}
