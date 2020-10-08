
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/welcomePage_CSS.css')}}">
	<script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
</head>
<body>
	<div class="form_div">
		<form method="post" action="{{asset('/Register_Validation')}}">
			{{@csrf_field()}}
			<div class="logo_form_div">
				<img src="{{asset('img/kissclipart-astronaut.png')}}">
			</div>
			<div class="input_name_div">
				<label>
					<p class="input-paragraph">Enter user name</p>
					<input type="text" name="name" placeholder="Enter name:">
					<span class="error_username"></span>
				</label>
			</div>
			<div class="input_email_div">
				<label>
					<p class="input-paragraph">Enter email</p>
					<input type="text" name="name" placeholder="Enter email:">
					<span class="error_email"></span>
				</label>
			</div>
			<div class="input_password_div">
				<label>
					<p class="input-paragraph">Enter password</p>
					<input type="password" name="pass" placeholder="Enter password:">
					<span class="error_password"></span>
				</label>
			</div>
			<div class="input_password_div">
				<label>
					<p class="input-paragraph">Repeat password</p>
					<input type="password" name="pass2" placeholder="Enter repeated password:">
					<span class="error_password2"></span>
				</label>
			</div>
			
			<div class="submit_div">
				<input type="submit" class="input_submit_button" val="Create">
			</div>
		</form>
	</div>
	<p>{{$errors}}</p>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('input').on('focus',function(){
				$(this).css("background-color","#76188C");
			});
			$('input').on('focusout',function(){
				$(this).css("background-color","#010101");
			});
		});
	</script>
</body>
</html>