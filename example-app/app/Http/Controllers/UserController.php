<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
function UserLogin(Request $request){
           return response()->json([
               'status' => 'success',
               'message' => 'User Login Successful',
               'token'=>$token
           ],200);
           ],200)->cookie('token',$token,60*24*30);
       }
       else{
           return response()->json([
function VerifyOTP(Request $request){
            return response()->json([
                'status' => 'success',
                'message' => 'OTP Verification Successful',
                'token'=>$token
            ],200);

            ],200)->cookie('token',$token,60*24*30);

        }
        else{
function VerifyOTP(Request $request){
    }

    function ResetPassword(Request $request){

        try{
            $email=$request->header('email');
            $password=$request->input('password');
function ResetPassword(Request $request){
                'message' => 'Something Went Wrong',
            ],200);
        }

    


}
