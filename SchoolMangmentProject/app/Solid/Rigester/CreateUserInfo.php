<?php

namespace App\Solid\Rigester;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\URL;

class CreateUserInfo implements CreateUser
{
    public static  function createUser($data)
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
                'img' => $input['img'],
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt($data['password']),
                'role'=>$data['role'],
                'gender'=>$data['gender'],
        ]);
        $token = $user->createToken('loginToken')->plainTextToken;
            $response = [
                'user'=>$user,
                'token'=>$token
            ];
            return $response;
    }
}