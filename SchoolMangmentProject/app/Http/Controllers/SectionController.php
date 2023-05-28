<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSectionRequest;
use App\Solid\createSection\createSection;
use Illuminate\Http\Request;

class CreateSectionController extends Controller
{
    public function createSection(CreateSectionRequest $Request)
    {

        createSection::create($Request);


        return response()->json([
            'status' => true
        ]);

    }
}
