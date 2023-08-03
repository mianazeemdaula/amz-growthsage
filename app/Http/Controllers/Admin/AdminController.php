<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index()
    {
        $user = auth()->user();
        $collection = Enrollment::whereFeePaid(false)->paginate();
        return  view('admin.index', compact('user', 'collection'));
    }
}
