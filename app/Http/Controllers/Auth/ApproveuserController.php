<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\UserApprove;
use App\Mail\UserDecline;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApproveuserController extends Controller
{
    public function index()
    {
        $user = User::where('approvestatus', "0")->get();
        return view('auth.approveuser', ['user' => $user]);
    }
    public function userApproved(Request $request)
    {
        $user = auth()->user();
        $email =$request->email;
        Mail::to($email)->send(new UserApprove());
        $approvedUser = User::where('email', $request->email)->update(array('approvestatus' => '1'));
        return back();   
    }
    public function userDecline(Request $request)
    {
        $user = auth()->user();
        $email =$request->email;
        $result = Mail::to($email)->send(new UserDecline());
        $removeUser = User::where('email', $request->email)->delete();
        return back();
    }
}
