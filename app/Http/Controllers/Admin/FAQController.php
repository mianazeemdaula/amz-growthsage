<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Faq;

class FAQController extends Controller
{
    function index($catId)  {
        $collection = Faq::where('faq_category_id', $catId)->paginate();
        return view('admin.faq-cats.faqs.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($catId)
    {
        return view('admin.faq-cats.faqs.create',compact('catId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $catId)
    {
        $request->merge(['active' => true, 'faq_category_id' => $catId]);
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'active' => 'required',
        ]);
        try {
            $course = Faq::create($request->all());
            return redirect()->route('admin.faq-cats.faqs.index', $catId)->with(['success' => 'Faqs saved successfuly']);
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
            // something went wrong
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($catId,$id)
    {
        //
        $course = Faq::find($id);
        $user = auth()->user();
        return view('admin.faq-cats.faq.show', compact('user', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($catId,$id)
    {
        $model = Faq::findOrFail($id);
        return view('admin.faq-cats.faqs.edit', compact('model','catId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$catId, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        try {
            $course = Faq::findOrFail($id)->update($request->all());
            return redirect()->route('admin.faq-cats.faqs.index', $catId)->with(['success' => 'Faqs update successfuly']);
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
