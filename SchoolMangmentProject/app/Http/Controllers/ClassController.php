<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassRequest;
use App\Solid\createClass\createClass;
use App\Solid\Read\ReadClass\ReadClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function createClass(CreateClassRequest $request)
    {
        createClass::create($request);

        return response()->json([
            'status' => true
        ]);
    }

    public function readClasses()
    {
        $reponse = ReadClass::Read();

        return response()->json([
            'status' => true,
            'data' => $reponse
        ]);
    }
}
