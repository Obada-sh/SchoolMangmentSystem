<?php


namespace App\Solid\createClass;

use App\Models\Saf;
use App\Http\Requests\createClassRequest;

class createClass{


    public static function create(createClassRequest $data){

        Saf::create($data->only('grade'));

    }

}






