<?php


namespace App\Solid\Read\Get;

use Illuminate\Support\Facades\DB;

class GetTeachersWhereClass{

    public static function get($classID)
    {

        $teachers = DB::table('subjects_has_teachers')
        ->select('teacher_id', 'saf_id', DB::raw('MIN(id) as min_id'))
        ->where('saf_id', '=', $classID)
        ->groupBy('teacher_id', 'saf_id')
        ->get();
        
        return $teachers;


    }


}