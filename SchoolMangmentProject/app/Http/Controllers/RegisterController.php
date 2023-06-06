<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentRequest;
use App\Http\Requests\StudentRequest;
use App\Models\ChildParent;
use App\Solid\Register\CreateParent;
use App\Solid\Register\CreateStudent;





class RegisterController extends Controller
{

    public function registerParent(ParentRequest $request)
    {
        return CreateParent::createUser($request);
    }

    public function registerStudent(StudentRequest $request)
    {
        return CreateStudent::createUser($request);
    }

}
