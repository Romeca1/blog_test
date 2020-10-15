<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user_post;

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

	public function HomePage($log_user_id){
		return view('public.homePage',["log_user_id" => $log_user_id]);
	}
	public function MyPostsPage($log_user_id){
		$posts = User_Post::where('user_id',$log_user_id)->get();
		return view('public.ToHomePageMenu.MyPostPage',['posts' => $posts,'log_user_id' => $log_user_id]);
	}
	public function RegisterValidation(Request $request)
	{
		$validation = $this->validate($request,[
			"name" => "required|max:25",
			"email" => "required|email|unique:user",
			"pass" => "required|min:6",
			"pass2" => "required|same:pass"
		]);
		
		$user = new User();
		$user->fname = $request->input('name');
		$user->email = $request->input('email');
		$user->password = $request->input('pass');
		$user->save();
		return redirect("/HomePage/" . $user->id);
	}
	public function LoginValidation(Request $require){
		$user = User::where(['email' => $require["email"],'password' => $require['pass']])->first();
		if(is_null($user)){
			return view('public.LoginPage',['error' => 'Invalid email or password']); 
		}
		return view('public.homePage',['user_name' => $user['name'],'log_user_id' => $user['id']]);
	}
	public function CreateValidation(Request $require,$log_user_id){
		$validation = $this->validate($require,[
			"head" => "required|min:5|max:25",
			"body" => "required|min:10"
		]);
		$user_post = new User_Post();
		$user_post->user_id = $log_user_id;
		$user_post->head = $require['head'];
		$user_post->body = $require['body'];
		$user_post->save();
		return redirect('/HomePage/' . $log_user_id);
	}
}










