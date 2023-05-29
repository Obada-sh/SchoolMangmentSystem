<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassRequest;
use App\Solid\createClass\createClass;
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
}
