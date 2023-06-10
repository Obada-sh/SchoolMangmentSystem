<?php

namespace App\Solid\Register;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\URL;
use App\Solid\Register\UserRegistrationResponse;

class CreateUserInfo implements CreateUser
{
    public static  function createUser($data,$role)
    {
        $input = $data->all();
        if($data->hasFile('img'))
        {
            $filenameToStore = time().'.'.$data->img->extension();
            $data->img->move(public_path('images'),$filenameToStore);
            $input['img'] = URL::asset('images/'.$filenameToStore);
        } else {
            $input['img'] = null;
        }
        $user=User::create([
                'phone_number'=>$input['phone_number'],
                'img' => $input['img'],
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt($data['password']),
                'role'=>$role,
                'gender'=>$data['gender'],
        ]);

        return $user;
    }
}