<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostCreateRequest;

class PostController extends Controller
{
	public function CreatePost(PostCreateRequest $request)
	{
	    Post::create(
	    	'user_id' => session('user_id'),
	    	'head' => request['head'],
	    	'body' => request['body']
	    );
	    return redirect('/homePage/myPosts');
	}    
}
