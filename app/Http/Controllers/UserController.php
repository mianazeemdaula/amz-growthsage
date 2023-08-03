<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->merge(['code' => strtoupper(Str::random(6))]);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'code' => 'required|unique:users',
        ]);

        // if ($request->has('referral')) {
        if ($request->referral != '') {
            $referral = User::where('code', $request->referral)->first();
            if ($referral) {
                // set this id of the user to the student referral_id
                $request->merge(
                    [
                        'referral_id' => $referral->id,
                    ]
                );
            } else {
                return redirect()->back()->with(['success' => 'Referreal code invalid!']);
            }
        }
        try {
            $user = User::create($request->all());
            $user->assignRole('student');
            Auth::login($user);
            return redirect()->back()->with(['success' => 'Successfully registered']);
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
            // something went wrong
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
