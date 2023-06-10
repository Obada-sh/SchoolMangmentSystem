<?php


namespace App\Solid\Read\Get;

use Illuminate\Support\Facades\DB;

class GetSectionsWhereClass{

    public static function get($classID)
    {

        $sections = DB::table('sections')->where('saf_id','=',$classID)->get();

        return $sections;


    }


}