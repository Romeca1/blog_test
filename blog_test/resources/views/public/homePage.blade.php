<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/homePage_CSS.css')}}">
</head>
<body>
	<div class="nav_div">
		<ul>
			<li><a href="">ABOUT</a></li>
			<li><a href="{{asset('/testHomePage/Create/$user_id')}}">CREATE BLOG</a></li>
			<li><a href="">NEW</a></li>
		</ul>
	</div>
	<?php
		echo $user_id;
	?>
	<div class="body_div">
	
	</div>
</body>
</html>