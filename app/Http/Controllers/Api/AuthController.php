<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Validator;

//function Basecontroller
use App\Http\Controllers\Api\BaseController as BaseController;

class AuthController extends  BaseController
{
    //
    public function Register(Request $request){
     

         $validator = Validator::make(
            $request->all() ,[
            'name' => 'required | max:191',
            'email' => 'required | unique:users',
            'password' => 'required ',
            ]
         );
         if($validator->fails()){
          return $this->SendError('please validate data' , $validator->errors());
         }
         else{
            $user=User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
             ]); 
               $user['token'] =  $user->createToken('MyApp')->accessToken;
               return $this->sendResponse($user, 'User register successfully.');

         }


    }

//Login Controller 
   public function login(Request $request ){
      
  if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    } 
   }






