<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveuserController extends Controller
{
    public function index()
    {
        $user = User::where('approvestatus', "0")->get();
        return view('auth.approveuser', ['user' => $user]);
    }
    public function store(Request $request)
    {
        dd($request);
    }
}
