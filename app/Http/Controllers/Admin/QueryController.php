<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Query;

class QueryController extends Controller
{
    function index()  {
        $collection = Query::paginate();
        return view('admin.queries.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required|unique:students',
            'name' => 'required',
            'description' => 'required',
            'lectures_count' => 'required',
            'fee' => 'required',
            'teamleader_reward' => 'required',
            'referral_reward' => 'required',
            'active' => 'required',
        ]);
        try {

            $course = Query::create($request->all());
            return redirect('admin/faqs')->with(['success' => 'Faqs saved successfuly']);
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
        $course = Query::find($id);
        $user = auth()->user();
        return view('admin.courses.show', compact('user', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Query::findOrFail($id);
        return view('admin.queries.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'user_id' => 'required|unique:students',
            'name' => 'required',
            'description' => 'required',
            'lectures_count' => 'required',
            'fee' => 'required',
            'teamleader_reward' => 'required',
            'referral_reward' => 'required',
            'active' => 'required',
        ]);
        try {

            $course = Query::find($id)->update($request->all());
            return redirect('admin/queries')->with(['success' => 'Course saved successfuly']);
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
