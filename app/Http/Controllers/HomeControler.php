<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\User;
class HomeControler extends Controller
{
	public function Register_Form()
	{
		return view('public.RegisterPage');
	}
	public function RegisterValidation(Request $require)
	{
		$validation = $this->validate($require,[
			"name" => "max:25",
			"email" => "email",
			"pass" => "min:6",
			"pass2" => "same:pass"
		]);
		$user = new User();
		$user->fname = $require['name'];
		$user->email = $require['email'];
		$user->password = $require['pass'];
		$user->save();
		return view('public.homePage', ['data' => $require]);
	}
	public function Login_Form(){
		return view('public.LoginPage');
	}
	public function LoginValidation(Request $require){
		//$data = $require->all();
		
	}
}










