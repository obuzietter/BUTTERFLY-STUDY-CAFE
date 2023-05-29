<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function goToLogin(){
        return view('login');
    }

    public function goToSignup(){
        return view('signup');
    }

    public function signUp(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:16'

        ]);
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $is_successful = $user->save();

        if($is_successful){
            // return redirect()->route('login');
            return back()-> with('success', 'Account created successfully!');
        }else{
                return back()-> with('error', 'Something went wrong!');
            }

        

    }

    public function logIn(){


    }
}
