<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function GetWelcomePage()
    {
    	return view('public.WelcomePage');
    }
    public function GetHomePage()
    {
    	return view('public.homePage');
    }
    public function GetCreateBlogPage()
    {
    	return view('public.ToHomePageMenu.CreateBlogPage');
    }
    public function GetMyPostPage()
    {
    	return view('public.ToHomePageMenuMyPostPage');	
    }
    public function GetProfilePage()
    {
    	return view('public.ToHomePageMenu.ProfilePage');
    }
    public function GetUpDatePage()
    {
    	return view('public.ToHomePageMenu.UpDatePost');
    }
}
