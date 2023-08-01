<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

        if (Auth::attempt($credentials)) {
            // $user = User::where('email', $request->email)->first();
            // Auth::login(Aut);
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
