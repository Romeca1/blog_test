<!DOCTYPE html>
<html>
<head>
	<title>My post</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/MyPostsPage_CSS.css')}}">
	<script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
</head>
<body>
	<a href="{{asset('/HomePage/' . $log_user_id)}}" class="back_to_homePage_btn">Back</a>
	<div class="table_posts">
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
				<button class="Close_btn">close</button>
			</div>
			<ul>
				<li class="Del_btn"><a href="{{url('/HomePage/' . $log_user_id . '/MyPosts/Deleate/' . $value->id)}}">Deleate</a></li>
				<li class="UpD_btn"><a href="{{url('/HomePage/' . $log_user_id . '/MyPosts/UpDate/' . $value->id)}}">UpDate</a></li>
				<li class="See_btn" id="{{$value->id}}"><button>See post</button></li>
				<li class="Comment_btn"><a href="">See comment</a></li>
			</ul>
		</div>
	@endforeach
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".See_btn").on("click",function(){
				$("#b" + $(this).attr("id")).show(500);
			});
			
		});
	</script>
</body>
</html>