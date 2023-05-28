<?php

namespace App\Solid\Rigester;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\URL;


class CreateStudent implements CreateUser
{
    public static  function createUser($data)
    {
        $input = $data->all();
        if($data->hasFile('img'))
        {
            $filenameToStore = time().'.'.$data->img->extension();
            $data->img->move(public_path('images'),$filenameToStore);
            $input['imgUrl'] = URL::asset('images/'.$filenameToStore);
        }
        $user=User::create([
                'img' => $input['imgUrl'],
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt($data['password']),
                'role'=>$data['role'],
                'gender'=>$data['gender'],
        ]);
        $student = Student::create([
                'parent_id'=>2,
                'section_id'=>2,
                'user_id'=> $user->id,
                'is_in_bus'=>$data['is_in_bus'],
                'left_for_bus'=>$data['left_for_bus'],
                'left_for_qusat'=>$data['left_for_qusat']
        ]);
        $token = $user->createToken('loginToken')->plainTextToken;
            $response = [
                'user'=>$user,
                'token'=>$token
            ];


            return response()->json(
                [
                    'message' => "registered successfully",
                    'status' => true,
                    'data' => $response
                ]
            ,201 );
    }
}