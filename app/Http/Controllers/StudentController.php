<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('student.index');
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
            'email' => 'required|email',
            'mobile' => 'required',
            // 'experience' =>'required',
            // 'province' =>'required',
            // 'city' =>'required',
        ]);

        $exists = Subscriber::where('email', $request->email)->first();
        if (!$exists) {
            try {

                Subscriber::create($request->all());
                return response()->json([
                    'msg' => "Successfully subscribed",
                ]);
            } catch (Exception $e) {
                return response()->json([
                    'msg' => $e->getMessage(),
                ]);
                // something went wrong
            }
        } else {
            return response()->json([
                'msg' => "Already subscribed!",
            ]);
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