<?php

namespace App\Solid\Read\Get;

use Illuminate\Support\Facades\DB;


class GetClasses{
    public static function get()
    {
        $classes = DB::table('safs')->get();

        return $classes;
    }

}