<?php

namespace App\Solid\Register;

use App\Models\subjects_has_teachers;

class CreateSubjectHasTeacher
{

    public static  function connectSubjects($subjects,$id)
    {
        foreach ($subjects as $subject)
        {
            subjects_has_teachers::create([
                'teacher_id'=>$id,
                'subject_id'=>$subject['id'],
                'saf_id'=>$subject['saf_id'],
            ]);
        }
    }
}