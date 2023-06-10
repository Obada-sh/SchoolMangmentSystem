<?php


namespace App\Solid\createSection\createProgramDays\createHessas;

use App\Models\Hessa;

class createHessas{

    public static function create($programDayID,$numberOfHessas)
    {
        for($i=1;$i<=$numberOfHessas;$i++){
            Hessa::create([
                'time' => $i,
                'program_day_id' => $programDayID,
                'teacher_id' => null
            ]);
        }
    }


}