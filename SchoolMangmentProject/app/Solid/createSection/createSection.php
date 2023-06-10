<?php

namespace App\Solid\createSection;

use App\Http\Requests\CreateSectionRequest;
use App\Models\Section;
use App\Solid\createSection\createProgramDays\createProgramDays;

class createSection {
    public static function create(CreateSectionRequest $data)
    {
        $section = Section::create([
            'number' => $data['number'],
            'saf_id' => $data['saf_id'],
            'exam_image' => null
        ]);
        createProgramDays::create($section['id']);
    }
}