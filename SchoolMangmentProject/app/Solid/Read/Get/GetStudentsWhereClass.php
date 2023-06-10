<?php


namespace App\Solid\Read\Get;

use Illuminate\Support\Facades\DB;

class GetStudentsWhereClass{

    public static function get($classID)
    {

        $students = DB::table('students')->where('saf_id','=',$classID)->get();

        return $students;


    }


}