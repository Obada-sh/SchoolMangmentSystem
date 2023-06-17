<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solid\createClass\createClass;
use App\Http\Requests\ReadClassRequest;
use App\Solid\Read\ReadClass\ReadClass;
use App\Http\Requests\CreateClassRequest;

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

    public function readEachClass(ReadClassRequest $request)
    {

        



    }
}
