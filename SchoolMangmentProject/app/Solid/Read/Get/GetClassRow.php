<?php

namespace App\Solid\Read\Get;

class GetClassRow{

    public static function get($class)
    {
        $sections = GetSectionsWhereClass::get($class->id);
            $sectionSize=sizeof($sections);

            $students = GetStudentsWhereClass::get($class->id);
            $studentSize = sizeof($students);

            $teachers = GetTeachersWhereClass::get($class->id);
            $teacherSize = sizeof($teachers);

            $subjects = GetSubjectsWhereClass::get($class->id);
            $subjectSize = sizeof($subjects);

            $payload = [
                'grade' => $class->grade,
                'sectionSize' => $sectionSize,
                'studentSize' => $studentSize,
                'teacherSize' => $teacherSize,
                'subjectSize' => $subjectSize
            ];

            return $payload;
    }


}