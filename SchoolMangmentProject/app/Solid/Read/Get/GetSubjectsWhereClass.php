<?php


namespace App\Solid\Read\Get;

use Illuminate\Support\Facades\DB;

class GetSubjectsWhereClass{

    public static function get($classID)
    {

        $subjects = DB::table('subjects')->where('saf_id','=',$classID)->get();

        return $subjects;


    }


}