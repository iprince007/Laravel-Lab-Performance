<!DOCTYPE html>
<html>
<head>
	<title>Show Users</title>
</head>
<body>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
		<table border="1">
			<tr>
				<td>Userid</td>
				<td>{{$userid}}</td>
			</tr>
			<tr>
				<td>Employee Name</td>
				<td>{{$emname}}</td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td>{{$comname}}</td>
			</tr>
			<tr>
				<td>UserName</td>
				<td>{{$username}}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{{$password}}</td>
			</tr>
			<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Confird Delete"></td>
				</tr>
		</table>
</body>
</html>