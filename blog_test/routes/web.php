<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Controllers\HomeControler;

Route::get('/register',[HomeControler::class, "Register_form"]);
Route::post('/register',[HomeControler::class, "RegisterValidation"]);
Route::get('/testHomePage',function()
{
	return view('public.homePage');
});
Route::get('/login',[HomeControler::class,"Login_Form"]);
Route::post('/login',[HomeControler::class,"LoginValidation"]);

Route::get('/testHomePage/Create',function()
{
	return view('public.ToHomePageMenu.CreateBlogPage');
});

//------------------//
Route::get('/',[HomeControler::class,"WelcomePage"]);