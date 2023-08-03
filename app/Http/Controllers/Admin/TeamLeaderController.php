<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TeamLeaderController extends Controller
{
    function index()  {
        $collection = User::role('teamleader')->paginate();
        return view('admin.teamleaders.index', compact('collection'));
    }
}
