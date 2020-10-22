<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Controllers\HomeControler;

Route::get('/register',[HomeControler::class, "Register_form"]);

Route::post('/register',[HomeControler::class, "RegisterValidation"]);

Route::get('/login',[HomeControler::class,"Login_Form"]);

Route::post('/login',[HomeControler::class,"LoginValidation"]);
//Create post Route
Route::get('/HomePage/Create/{log_user_id}',function($user_id)
{
	return view('public.ToHomePageMenu.CreateBlogPage',["log_user_id" => $user_id]);
});

Route::get('/HomePage/{log_user_id}',[HomeControler::class,"HomePage"]);

Route::get('/HomePage/{log_user_id}/MyPosts',[HomeControler::class,"MyPostsPage"]);
//Deleate post Route
Route::get('/HomePage/{log_user_id}/MyPosts/Deleate/{post_id}',[HomeControler::class,'DeletePost']);
//UpDate post form route
Route::get('/HomePage/{log_user_id}/MyPosts/UpDate/{post_id}',[HomeControler::class,"FormUpDatePost"]);
//UpDate post validation route
Route::post('/HomePage/{log_user_id}/MyPosts/UpDate/{post_id}',[HomeControler::class,"UpDatePost"]);
//Comment post route
Route::post('/HomePage/{log_user_id}/MyPosts/Comment/{post_id}',[HomeControler::class,"CommentsPost"]);
//news posts route
Route::post('/HomePage/Create/{log_user_id}',[HomeControler::class,"CreateValidation"]);
//Welcome page Route
Route::get('/HomePage/Profile/{log_user_id}',[HomeControler::class,"ProfilePage"]);
Route::get('/',[HomeControler::class,"WelcomePage"]);