<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

public function __construct(){
	$this->middleware('guest');
}

    public function index(){
    	return view('auth.register');
    }

    public function store(Request $request){
    	//dd($request->only('email','password'));
    	//this->validate() you can use this to validate the request
    	$this->validate($request,[
'name'=>'required|max:255',
'email'=> 'required|email',
'username'=>'required',
'password'=>'required|confirmed'
    	]);

    	//next thing is to store user info using User::create();
    	User::create([
'name'=>$request->name,
'username'=>$request->username,
'email'=>$request->email,
'password'=>Hash::make($request->password)
    	]);

//sign user in
    	auth()->attempt($request->only('email','password'));

    	return redirect()->route('post');
    }
}
