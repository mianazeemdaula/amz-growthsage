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
use Illuminate\Support\Facades\File;

class EnrollmentController extends Controller
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
        $user = Auth::user();
        return view('student.courses.enroll', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'course_id' => 'required',
        ]);

        try {
            Enrollment::create($request->all());
            return redirect()->route('courses.show', 1)->with(['success' => 'Successfully enrolled']);
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
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $enrollment = Enrollment::find($id);

        try {
            $image_name = '';

            //if user has changed image, replace existing image 
            if ($request->hasFile('image')) {
                $existing_image_url = public_path('images/payments/') . $enrollment->image;

                //remove existing image
                if (File::exists($existing_image_url)) {
                    File::delete($existing_image_url);
                }

                //save uploaded image
                $image_name = $enrollment->id . '.' . $request->image->extension();
                $request->file('image')->move(public_path('images/payments/'), $image_name);
            }

            //update by raw input as it is
            $enrollment->update($request->all());

            //if image has been changed by user
            //replace uploaded image name by its formatted name
            if ($image_name != '')
                $enrollment->image = $image_name;

            $enrollment->save();

            return redirect()->route('courses.show', $enrollment->course_id)->with('success', 'Successfully uploaded');
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
}
