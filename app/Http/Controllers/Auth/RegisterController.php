<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        
        //dd("gg");
        $this->validate($request,[
            'name'=> 'required|max:255',
            'username'=> 'required|max:255',
            'selecttype'=> 'required',
            'email'=> 'required|email|max:255',
            'password'=> 'required|confirmed',
        ]);
        //dd($request->selecttype);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'usertype' => $request->selecttype,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'approvestatus' => "0"

        ]);
        //auth()->attempt($request->only('email','password'));
        //return redirect()->route('dashboard');
        return view('home');
    }
}
