<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Controllers\HomeControler;

Route::get('/register',[HomeControler::class, "Register_form"]);
Route::post('/register',[HomeControler::class, "RegisterValidation"]);
Route::get('/login',[HomeControler::class,"Login_Form"]);
Route::post('/login',[HomeControler::class,"LoginValidation"]);
//Create Route
Route::get('/HomePage/Create/{log_user_id}',function($user_id)
{
	return view('public.ToHomePageMenu.CreateBlogPage',["log_user_id" => $user_id]);
});
Route::get('/HomePage/{log_user_id}',[HomeControler::class,"HomePage"]);
Route::get('/HomePage/{log_user_id}/MyPosts',[HomeControler::class,"MyPostsPage"]);
Route::post('/HomePage/Create/{log_user_id}',[HomeControler::class,"CreateValidation"]);
Route::get('/',[HomeControler::class,"WelcomePage"]);