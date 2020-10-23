<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use App\Models\User;
	use App\Http\Requests\UserRegisterRequest;
	use App\Http\Requests\UserLoginRequest;

	class UserController extends Controller{
		
		public function ShowLoginForm()
		{
			return view("public.LoginPage");
		}

		public function LoginValidating(UserLoginRequest $request)
		{
			if(!is_null($request['pass']) && !is_null($request['email'])){
				$user = User::where(["email" => $request['email'],"password" => $request['pass']])->first();
				//TODO validation
			}
		}

		public function ShowRegisterFrom()
		{
			return view("public.RegisterPage");
		}

		public function RegisterValidating(UserRegisterRequest $request)
		{
			User::create([
				'fname' => $request['name'],
				'email' => $request['email'],
				'password' => $request['pass']
			]);
			return redirect('/test/login');
		}

	}
?>