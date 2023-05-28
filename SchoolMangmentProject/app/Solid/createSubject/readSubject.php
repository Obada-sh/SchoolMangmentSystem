<?php


namespace App\Solid\createSubject;

use Illuminate\Support\Facades\DB;

class readSubject{
    public static function read(){
        $subjects = DB::table('Subjects')->get();

        return $subjects;
    }
}