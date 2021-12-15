<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login SINPRO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{!!('assetsLogin/images/icons/favicon.ico')!!}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/vendor/bootstrap/css/bootstrap.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/vendor/animate/animate.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/vendor/css-hamburgers/hamburgers.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/vendor/select2/select2.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/css/util.css')!!}">
	<link rel="stylesheet" type="text/css" href="{!!('assetsLogin/css/main.css')!!}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{!!('img/login.png')!!}" alt="img">
				</div>

				<form method="POST" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title">
                    Login 
                        
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email" >
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{!!('assetsLogin/vendor/jquery/jquery-3.2.1.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!('assetsLogin/vendor/bootstrap/js/popper.js')!!}"></script>
	<script src="{!!('assetsLogin/vendor/bootstrap/js/bootstrap.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!('assetsLogin/vendor/select2/select2.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!('assetsLogin/vendor/tilt/tilt.jquery.min.js')!!}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{!!('assetsLogin/js/main.js')!!}"></script>

</body>
</html>