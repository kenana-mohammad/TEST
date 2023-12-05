<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //

    //response done
    public function sendResponse($resault , $message){
       $response = [

        'success' => true ,
        'data' => $resault ,
        'message' => $message,

       ];

       return response()->json($response ,200);
    }
    //
///fail data

       public function SendError($error , $errorMessage,$code = 404){
           $response = [
            'success' => false,
            'data' =>$error,

           ];
           if(!empty($errorMessage)){

            $response['data'] = $errorMessage;
           }
           return response()->json($response, $code);

       }

}

