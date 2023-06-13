<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trait\AuthTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\MailVerification;



class AuthController extends Controller
{
    use AuthTrait;
    public function login(Request $request){
         $request->validate([
            'email' => 'required',
            'password' => 'required|min:4'
        ]);
        $data =[
         "email"=>$request->email,
         "password"=>$request->password
        ];
        try{
             if(auth()->attempt($data)){
                  $token = auth()->user()->createToken(env('APP_NAME'));
                   return response()->json($this->responseToken($token),200);
            }else{
                   return response()->json(['fake u' => 'Unauthorised'], 401);
            }
        }catch(\Exception $exc){
            return response()->json(['error' => $exc->getMessage()]);
        }
         return $data;
    }
}
