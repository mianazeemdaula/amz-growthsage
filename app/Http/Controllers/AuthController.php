<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        // echo $request->email;

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['auth' => 'User credentials incorrect !']);
        }
    }

    public function signout()
    {
        //destroy session
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
