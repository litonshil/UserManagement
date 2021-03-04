<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'usertype' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        if(! auth()->attempt($request->only('email','password','usertype'), $request->remember)){
            return back()->with('status','Invalid Login');
        }
        return redirect()->route('dashboard');
    }
}
