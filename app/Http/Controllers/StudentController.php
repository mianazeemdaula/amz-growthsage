<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Enrollment;
use App\Models\Language;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $languages = Language::all();
        $countries = Country::all();
        return view('student.index', compact('user', 'languages', 'countries'));
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
        $request->validate([
            'user_id' => 'required',
            'language_id' => 'required',
            'country_id' => 'required',
            'phone' => 'required',
            'code' => 'string|size:6'
        ]);

        if ($request->code != '') {
            $user = User::where('code', $request->code)->first();
            if ($user)
                $request->merge(['referral_id' => $user->id]);
            else
                return redirect()->back()->with(['success' => 'Referral code invalid!']);
        }

        // in case, referral code missed, by default referal_id will be null

        try {

            $user = Student::create($request->all());
            return redirect()->back()->with(['success' => 'Profile saved successfuly']);
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
