<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['login' , 'signup' ]]);
    }


    public function login(Request $request)
    {

        try{
            $user = User::where(['email' => $request['email']])->first(['email', 'id', 'name']);

            if($user){
                if( !$token = JWT::fromUser( $user , ['emain' => $user->email , 'id' => $user->id , 'name' => $user->nmae])){

                    return response()->json(['error' => 'invalid_credentials'] , 401);

                }
            }else{

                return response()->json(['error' => 'invalid_credentials'] , 401);

            }

        }catch (JWTException $e){

            return response()->json(['error' => 'No se ha podido crear el token'] , 500);

        }

        return response()->json(compact('token'));

    }


    public function signup( Request $request)
    {

        $user = User::where(['email' => $request['email']])->exists();

    }

}
