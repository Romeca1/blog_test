<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/homePage_CSS.css')}}">
	<script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
</head>
<body>
	<div class="nav_div">
		<ul>
			<li><a href="">Profile</a></li>
			<li><a href="{{asset('/HomePage/Create/'. $log_user_id ?? '')}}">create post</a></li>
			<li><a href="{{asset('/HomePage/'. $log_user_id . '/MyPosts')}}">My posts</a></li>
		</ul>
	</div>
	<div class="body_div">
		<div class="messeg_div">
			@if(isset($messeg))
				<p class="messeg">{{$messeg}}</p>
			@endif
		</div>
	</div>
	<script>
		
	</script>
</body>
</html>