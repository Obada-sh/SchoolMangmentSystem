<?php

namespace App\Solid\Register;

use App\Models\Section;
use App\Models\User;
use App\Models\Student;
use App\Solid\Read\Get\GetClasses;
use App\Solid\Read\Get\GetSectionsWhereClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Solid\Register\StudentRegistrationResponse;
use Illuminate\Cache\Repository;

class CreateStudent implements CreateUser
{
    public static  function createUser($data,$role)
    {

        $user = CreateUserInfo::createUser($data,$role);
        $section = DB::table('sections')->where('id','Like',$data['section_id'])->first();

        $student = Student::create([
            'user_id'=> $user['id'],
            'is_in_bus'=>$data['is_in_bus'],
            'left_for_bus'=>$data['left_for_bus'],
            'left_for_qusat'=>$data['left_for_qusat'],
            'parent_id'=>$data['parent_id'],
            'section_id'=>$data['section_id'],
            'address'=>$data['address'],
            'birth_date'=>$data['birth_date'],
            'saf_id'=>$section->saf_id
        ]);
        return StudentRegistrationResponse::createResponse();

    }

    public static function getClasses()
    {
        $classes = GetClasses::get();
        $reponse = array();
        foreach($classes as $class){
            $payload = [
                'id' => $class->id,
                'grade' => $class->grade
            ];
            $reponse[]=$payload;



        }

        return response()->json([
            'status' => true,
            'data' => $reponse
        ]);
    }



    public static function getSections($classID)
    {
        $sections = GetSectionsWhereClass::get($classID);
        $response = array();
        foreach($sections as $section){
            $payload=[
                'id' => $section->id,
                'number' => $section->number
            ];

            $response[] =$payload;
        }

        return response()->json([
            'status' => true,
            'data' => $response
        ]);
    }
}