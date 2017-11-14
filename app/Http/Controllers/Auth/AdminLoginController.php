<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:dosen');
	}
    public function showLogin()
    {
    	return view('auth.dosen-login');
    }

    public function login(Request $request)
    {
    	echo $request;
    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required|min:6'
    		]);


    	if(Auth::guard('dosen')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
    	{
    		return redirect()->intended(route('dosen.dashboard'));
    	}

    	return redirect()->back()->withInput($request->only('email','remember'));
    }
}
