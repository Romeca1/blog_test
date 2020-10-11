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
	public function RegisterValidation(Request $require)
	{
		$validation = $this->validate($require,[
			"name" => "max:25",
			"email" => "email",
			"pass" => "min:6",
			"pass2" => "same:pass"
		]);
		$IsEmailUsed = User::where(['email' => $require['email']])->first();
		$IsPasswordUsed = User::where(['password' => $require['pass']])->first();
		if(is_null($IsEmailUsed) && is_null($IsPasswordUsed)){
			$user = new User();
			$user->name = $require['name'];
			$user->email = $require['email'];
			$user->password = $require['pass'];
			$user->save();
			return view('public.homePage', ['data' => $require]);
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
}










