<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/LoginPage_CSS.css')}}">
</head>
<body>
	<div class="form_div">
		<div class="errors_div">
			@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		</div>
		<form method="post" action="{{url('/test/login')}}">
			{{csrf_field()}}
			<div class="user_logo_div">
				<img class="login_logo" src="../img/user_logo.png">
			</div>
			<div class="user_log_email_div">
				<label>
					<p>Enter your email</p>
					<input type="email" name="email" value="{{old('email')}}">
				</label>
			</div>
			<div class="user_log_pass_div">
				<label>
					<p>Enter your password</p>
					<input type="password" name="pass" value="{{old('pass')}}">
				</label>
			</div>
			<div class="user_submit_div">
				<label>
					<input class="input_submit" type="submit">	
				</label>
			</div>
		</form>
	</div>
</body>
</html>