<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table>
				<tr>
					<td>Employe Name</td>
					<td><input type="text" name="emname" value="{{$emname}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="comname" value="{{$comname}}"></td>
				</tr>
				<tr>
					<td>Contact NO</td>
					<td><input type="text" name="contactno" value="{{$contactno}}"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$password}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>