<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSectionRequest;
use App\Solid\createSection\createSection;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function createSections(CreateSectionRequest $Request)
    {

        createSection::create($Request);


        return response()->json([
            'status' => true
        ]);

    }
}
