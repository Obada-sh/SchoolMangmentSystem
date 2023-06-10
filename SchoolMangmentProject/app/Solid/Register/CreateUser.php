<?php

namespace App\Solid\Register;


interface CreateUser
{
    public static function createUser($request,$role);
}