<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeControler extends Controller
{
	public function WelcomePage(){
		return view('public.WelcomePage');
	}
	public function Register_Form()
	{
		return view('public.RegisterPage');
	}
	public function Login_Form(){
		return view('public.LoginPage');
	}
	public function RegisterValidation(Request $request)
	{
		$validation = $this->validate($request,[
			"name" => "max:25",
			"email" => "email",
			"pass" => "min:6",
			"pass2" => "same:pass"
		]);
		$IsEmailUsed = User::where(['email' => $request['email']])->first();
		$IsPasswordUsed = User::where(['password' => $request['pass']])->first();
		if(is_null($IsEmailUsed) && is_null($IsPasswordUsed)){
			$user = new User();
			$user->name = $request->input('name');
        	$user->email = $request->input('email');
        	$user->password = $request->input('pass');
        	$user->save();
			return view('public.homePage', ['user_id' => $request->input('id')]);
		}
		if($IsEmailUsed || $IsPasswordUsed) return view('public.RegisterPage',['messeg_error' => 'The email or password has busy!']);
	}
	public function LoginValidation(Request $require){
		$user = User::where(['email' => $require["email"],'password' => $require['pass']])->first();
		if(is_null($user)){
			return view('public.LoginPage',['error' => 'Invalid email or password']); 
		}
		return view('public.homePage',['user_name' => $user['name'],'user_id' => $user['id']]);
	}
	public function CreateValidation(Request $require){
		$validation = $this->validate($request,[
			"header" => "min:5|max:25",
			"body" => "min:10"
		]);
		$user_post = new User_post();

	}
}










