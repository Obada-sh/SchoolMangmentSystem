<?php

namespace App\Solid\Rigester;

use GuzzleHttp\Psr7\Request;
use Termwind\Components\Raw;

interface CreateUser
{
    public static function createUser($request);
}