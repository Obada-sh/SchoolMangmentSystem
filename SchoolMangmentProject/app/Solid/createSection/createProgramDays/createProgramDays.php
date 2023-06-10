<?php


namespace App\Solid\createSection\createProgramDays;

use App\Models\ProgramDay;
use App\Solid\createSection\createProgramDays\createHessas\createHessas;

class createProgramDays{
    public static function create($sectionID)
    {
        $day = ProgramDay::create([
            'day' => 'Sunday',
            'section_id' => $sectionID
        ]);
        createHessas::create($day['id'],7);

        $day2 = ProgramDay::create([
            'day' => 'Monday',
            'section_id' => $sectionID
        ]);
        createHessas::create($day2['id'],7);


        $day3 = ProgramDay::create([
            'day' => 'Tuesday',
            'section_id' => $sectionID
        ]);
        createHessas::create($day3['id'],7);


        $day4 = ProgramDay::create([
            'day' => 'Wednesday',
            'section_id' => $sectionID
        ]);
        createHessas::create($day4['id'],6);


        $day5 = ProgramDay::create([
            'day' => 'Thursday',
            'section_id' => $sectionID
        ]);
        createHessas::create($day5['id'],6);

    }
}