<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    function index()
    {
        $user = auth()->user();
        $collection = Enrollment::whereFeePaid(false)->paginate();
        return  view('admin.index', compact('user', 'collection'));
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
                return redirect('admin')->with('success', 'Password successfuly changed');
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
