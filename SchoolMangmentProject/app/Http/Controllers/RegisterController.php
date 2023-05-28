<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Solid\Rigester\CreateStudent;





class RegisterController extends Controller
{
    public function registerStudent(StudentRequest $request)
    {
        CreateStudent::createUser($request);
    }

}
