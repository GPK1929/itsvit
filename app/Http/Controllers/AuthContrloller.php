<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Sentinel;
use App\Http\Requests\AdminSignIn;

class AuthContrloller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(AdminSignIn $request){
        $input = $request->only('email', 'password');
        try {
            if (Sentinel::authenticate($input, $request->has('remember'))) {
                $id = User::where('email', $input['email'])->first();
                $user = Sentinel::findById($id->id);
                Sentinel::login($user);
                return redirect()->intended('dashboard');
            }
            return redirect()->back()->withInput()->withErrorMessage('Invalid credentials provided');
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->back()->withInput()->withErrorMessage('User Not Activated.');
        } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            return redirect()->back()->withInput()->withErrorMessage($e->getMessage());
        }
    }

    public function logout() {
        Sentinel::logout();
        return redirect()->intended('/');
    }
}