<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
		 return view('auth.login');
	}
	public function register(){
		 return view('auth.register');
	}
	public function handleLogin(Request $request){
		$data=$request->only ('email', 'password');
		$email=$request->input('email');
		$password=$request->input('password');
		return ($email.$password);
	}
}
