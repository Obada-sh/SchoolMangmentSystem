<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubjectRequest;
use App\Solid\createSubject\createSubject;

class SubjectController extends Controller
{
    public function createSubject(CreateSubjectRequest $request)
    {
        createSubject::create($request);

        return response()->json([
            'status' => true
        ]);

    }
}
