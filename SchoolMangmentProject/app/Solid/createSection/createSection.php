<?php

namespace App\Solid\createSection;

use App\Http\Requests\CreateSectionRequest;
use App\Models\Section;

class createSection {
    public static function create(CreateSectionRequest $data)
    {
        Section::create([
            'number' => $data['number'],
            'saf_id' => $data['saf_id'],
            'exam_image' => null
        ]);
    }
}