<!DOCTYPE html>
<html>
<head>
	<title>Create Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/createPage_CSS.css')}}">
</head>
<body>
	<div class="create_div">
		<form method="post" action="{{url('/HomePage/Create/' . $user_id)}}">
			{{csrf_field()}}
			<input type="text" class="header_input" name="head" placeholder="header:"><br>
			<hr>
			<textarea name="body" rows="10" cols="60" placeholder="text:"></textarea>
			<br>
			<hr>
			<input type="submit" class="Create_btn" value="Create">
		</form>
	</div>
</body>
</html>