<!DOCTYPE html>
<html>
<head>
	<title>My post</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/MyPostsPage_CSS.css')}}">
</head>
<body>
	<a href="{{asset('/HomePage/' . $log_user_id)}}" class="back_to_homePage_btn">Back</a>
	<div class="table_posts">
	@foreach($posts as $value)		
		<div class="row_posts">
			<h3>{{$value->head}}</h3>
			<ul>
				<li class="Del_btn"><a href="">Deleate</a></li>
				<li class="UpD_btn"><a href="">UpDate</a></li>
				<li class="See_btn"><a href="">See comment</a></li>
			</ul>
		</div>
	@endforeach
	</div>
</body>
</html>