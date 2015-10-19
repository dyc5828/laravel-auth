<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body class="container">
<h1>Login</h1>
<form method="post" action="{{URL::to('signin')}}">
	<input name="_token" type="hidden" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="user">User</label>
		<input id="user" name="user" type="text" class="form-control">
	</div>
	<div class="form-group">
		<label for="password">Passworld</label>
		<input id="password" name="password" type="password" class="form-control">
	</div>
	<div class="form-group">
		<input id="submit" name="submit" type="submit" value="Log In" class="form-control">
	</div>
</form>

</body>
</html>