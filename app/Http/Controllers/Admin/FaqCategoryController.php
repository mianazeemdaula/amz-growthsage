<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\FaqCategory;

class FaqCategoryController extends Controller
{
    function index()  {
        $collection = FaqCategory::paginate();
        return view('admin.faq-cats.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq-cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:faq_categories',
        ]);
        try {
            $course = FaqCategory::create($request->all());
            return redirect('admin/faq-cats')->with(['success' => 'Faq Category saved successfuly']);
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
        $course = Faq::FaqCategory($id);
        $user = auth()->user();
        return view('admin.faq-cats.faq.show', compact('user', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = FaqCategory::findOrFail($id);
        return view('admin.faq-cats.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|unique:faq_categories',
        ]);
        try {

            $course = FaqCategory::findOrFail($id)->update($request->all());
            return redirect('admin/faq-cats')->with(['success' => 'Faq Category update successfuly']);
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
