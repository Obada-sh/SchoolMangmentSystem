<?php

namespace App\Solid\createSubject;

use App\Http\Requests\CreateSubjectRequest;
use App\Models\Subject;

class createSubject{

    public static function create(CreateSubjectRequest $data){

        Subject::create([
            'name' => $data['name'],
            'saf_id' => $data['saf_id']
        ]);


    }
}