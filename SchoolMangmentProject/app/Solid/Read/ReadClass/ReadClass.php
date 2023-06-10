<?php


namespace App\Solid\Read\ReadClass;

use App\Solid\Read\Get\GetClasses;
use App\Solid\Read\Get\GetClassRow;
use App\Solid\Read\Get\GetSectionsWhereClass;
use App\Solid\Read\Get\GetStudentsWhereClass;
use App\Solid\Read\Get\GetSubjectsWhereClass;
use App\Solid\Read\Get\GetTeachersWhereClass;
use Illuminate\Support\Facades\DB;

Class ReadClass{

    public static function Read()
    {

        $classes = GetClasses::get();

        $response = array();

        foreach($classes as $class){



            $response[] = GetClassRow::get($class);


        }


        return $response;


    }

}