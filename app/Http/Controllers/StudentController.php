<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Language;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $course = Course::find(1);
        // echo Auth::user()->name;
        return view('student.index', compact('user', 'course'));
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
        $course = Course::find(1);
        return view('student.create', compact('user', 'languages', 'countries', 'course'));
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

    public function exportTeamCSV()
    {
        $fileName = 'team.csv';
        $query = User::role('student')->whereHas('profile');
        if(auth()->user()->hasRole('teamleader')){
            $query = $query->where('referral_id',auth()->id());
        }else{
        }
        $students = $query->get();
        
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Name', 'Email', 'Referral', 'Join Date', 'Phone', 'City', 'Address', 'Course', 'Fee Paid');

        $callback = function() use($students, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($students as $user) {
                $row = array(
                'Name' => $user->name,
                'Email' =>$user->email,
                'Referral' => $user->code,
                'Join Date' => $user->created_at,
                'Phone' => $user->profile->phone ?? '',
                'City' => $user->profile->city,
                'Address' => $user->profile->address,
                'Course' =>$user->enrollments->count() > 0 ?  $user->enrollments[0]->course->name : 'Not Enrolled' ,
                'Fee Paid'=> $user->enrollments->count() ? ($user->enrollments[0]->fee_paid ? 'Paid' : 'Not Paid') : 'Not Paid');
                fputcsv($file, array_values($row));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }
}
