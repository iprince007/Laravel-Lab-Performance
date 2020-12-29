<!DOCTYPE html>
<html>
<head>
	<title>Create New User</title>
</head>
<body>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Ceate New User</legend>
		<table>
			<tr>
				<td>Employer name</td>
				<td><input type="text" name="ename" value="{{old('ename')}}"></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="cname" value="{{old('cname')}}"></td>
			</tr>
			<tr>
				<td>Contace NO </td>
				<td><input type="text" name="cno" value="{{old('cno')}}"></td>
			</tr>
			<tr>
				<td>username </td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			<tr>
				<td></td>
				<td><input type="submit" name="create" value="Create"></td>
			</tr>
		</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>