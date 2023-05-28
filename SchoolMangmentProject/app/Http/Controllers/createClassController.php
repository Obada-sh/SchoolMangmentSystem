<?php

namespace App\Http\Controllers;

use App\Http\Requests\createClassRequest;
use App\Solid\createClass\createClass;
use Illuminate\Http\Request;

class createClassController extends Controller
{
    public function createClass(createClassRequest $request)
    {
        createClass::create($request);

        return response()->json([
            'status' => true
        ]);
    }
}
