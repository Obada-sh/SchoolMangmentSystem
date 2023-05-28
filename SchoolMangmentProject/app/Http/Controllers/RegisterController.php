<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentRequest;
use App\Http\Requests\StudentRequest;
use App\Solid\Rigester\CreateParent;
use App\Solid\Rigester\CreateStudent;





class RegisterController extends Controller
{

    public function registerParent(ParentRequest $request)
    {
        CreateParent::createUser($request);
    }

    public function registerStudent(StudentRequest $request)
    {
        CreateStudent::createUser($request);
    }

}
