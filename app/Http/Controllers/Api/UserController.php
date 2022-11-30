<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\LoginTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public $successStatus = 200;
    use LoginTrait;

    /** 
        * Register api 
        * 
        * @return \Illuminate\Http\Response 
        */ 
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
            $success['token'] =  $user->createToken('MyLaravelApp')-> accessToken; 
            $success['name'] =  $user->name;
            return response()->json(['success'=>$success], $this-> successStatus); 
       }
}