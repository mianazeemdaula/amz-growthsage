<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Language;
use App\Models\Country;
class StudentController extends Controller
{
    function index()  {
        $collection = User::role('student')->paginate();
        return view('admin.students.index', compact('collection'));
    }

    function show($id){
        $model = User::findOrFail($id);
        return view('admin.students.show', compact('model'));
    }

    public function edit(string $id)
    {
        $model = User::findOrFail($id);
        $languages = Language::all();
        $countries = Country::all();
        return view('admin.students.edit', compact('model', 'languages', 'countries'));
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'language_id' => 'required',
            'country_id' => 'required',
            'province' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
        ]);
        try {
            $user = User::findOrFail($id);
            if(!$user->hasRole($request->role)){
                $user->roles()->detach();
                $user->assignRole($request->role);
            }
            $user->name = $request->name;
            $user->save();
            return redirect('admin/students')->with(['success' => 'Student saved successfuly']);
        } catch (Exception $e) {
            return $e;
            return redirect()->back()->withErrors($e->getMessage());
            // something went wrong
        }
    }
}
