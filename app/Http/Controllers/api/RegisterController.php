<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use function Symfony\Component\String\u;


class RegisterController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['name'] =  $user->name;
        $success['email'] =  $user->email;
        return response()->json(['success'=>$success], $this-> successStatus);
    }


    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name'] =  $user->name;
            $success['email'] =  $user->email;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function details(){

        $user = Auth::guard('api')->user();
        return response()->json(['success' => $user], $this-> successStatus);

    }


    public function logout(Request $request)
    {

        if (Auth::guard('api')->user()) {
            Auth::guard('api')->user()->token()->revoke();
        }
        return response()->json(['success' => 'Logout SuccessFully']);
    }

    public function user_get(){

      $user = Auth::guard('api')->user();

      if (isset($user->id))
      {
            return response()->json(['user' => $user]);
      }
       return response()->json(['user No Login']);

    }







}
