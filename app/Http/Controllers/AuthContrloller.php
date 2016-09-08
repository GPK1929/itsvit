<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSignIn;
//use Illuminate\Http\Response;

class AuthContrloller extends Controller
{
    public function authenticate(AdminSignIn $request){
        $input = $request->only('email', 'password');
        try {
            if (\Sentinel::authenticate($input, false)) {
                $id = \App\User::where('email', $input['email'])->first();
                $user = \Sentinel::findById($id->id);
                $token = \JWTAuth::fromUser($user);
                return response()->json(compact('token'));
            }
            return response()->json(['message'=>'Invalid credentials provided']);
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return response()->json(['message'=>'User Not Activated']);
        } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            return response()->json(['message'=>$e->getMessage()]);
        }
    }

    public function test() {

        return 'tttttt';
    }
}