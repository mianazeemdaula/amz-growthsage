<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Language;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        return view('student.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::user();
        $languages = Language::all();
        $countries = Country::all();
        return view('student.create', compact('user', 'languages', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required|unique:students',
            'language_id' => 'required',
            'country_id' => 'required',
            'phone' => 'required',
            'city' => 'required',

        ]);

        // in case, referral code missed, by default referal_id will be null

        try {

            $user = Student::create($request->all());
            return redirect('students')->with(['success' => 'Profile saved successfuly']);
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
        $user = Auth::user();
        $profile = $user->profile;
        $languages = Language::all();
        $countries = Country::all();
        return view('student.edit', compact('user', 'profile', 'languages', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'language_id' => 'required',
            'country_id' => 'required',
            'phone' => 'required',
            'city' => 'required',

        ]);

        // in case, referral code missed, by default referal_id will be null

        try {
            $student = Student::find($id);
            $student->update($request->all());
            return redirect('students')->with(['success' => 'Profile updted successfuly']);
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
            // something went wrong
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function changePassword(Request $request)
    {
        $user = Auth::user();
        //signup  process
        $request->validate([
            'current' => 'required',
            'new' => 'required',
        ]);

        //echo 'current:' . $request->current . "new" . $request->new . "existing" . $user->password;
        try {

            if (Hash::check($request->current, $user->password)) {
                $user->password = Hash::make($request->new);
                $user->save();
                return redirect()->back()->with('success', 'Password successfuly changed');
            } else {
                //password not found
                return redirect()->back()->withErrors("Password incorrect");;
            }
        } catch (Exception $e) {
            return redirect()->back()
                ->withErrors($e->getMessage());
            // something went wrong
        }
    }
}
