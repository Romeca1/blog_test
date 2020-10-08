<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class HomeControler extends Controller
{
	public function Register_Form()
	{
		return view('public.RegisterPage');
	}
	public function RegisterValidation(Request $require)
	{
		$this->validate($require,[
			"name" => "min:4|min:25",
			"email" => "email",
			"pass" => "min:6",
			"pass2" => "same:pass"
		]);
       return view('public.homePage', ["username" => $validation]);
	}
}
