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
			<li><a href="{{asset('/')}}">Log out</a></li>
		</ul>
	</div>
	<div class="body_div">
		@if(isset($posts))
			@foreach($posts as $value)		
				<div class="row_posts">
					<h3>{{$value->head}}</h3>
					<div class="body_div" id="b{{$value->id}}">				
						<p class="body_text">
						<?php
							$count = 1;
							for ($i = 0;$i<strlen($value->body);$i++) {
								if($count == 150){
									echo '<br>';
									$count = 0;
								}
								$count++;
								echo $value->body[$i];
							}
						?>
						</p>
					</div>
				</div>
				<button>Comments</button>
				<div class="create-comment-btn">
					<textarea name="comment"></textarea>	
				</div>
			@endforeach
		@endif
	</div>
	<script>
		
	</script>
</body>
</html>