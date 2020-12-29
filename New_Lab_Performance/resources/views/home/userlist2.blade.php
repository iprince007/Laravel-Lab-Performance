<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Employee Name</td>
			<td>Company Name</td>
			<td>Contace NO</td>
			<td>Username</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['userid']}}</td>
			<td>{{$users[$i]['emname']}}</td>
			<td>{{$users[$i]['comname']}}</td>
			<td>{{$users[$i]['contactno']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>
				<a href="/details/{{$users[$i]['userid']}}">Details</a> |
				<a href="{{route('home.edit', $users[$i]['userid'])}}">Edit</a> |
				<a href="/delete/{{$users[$i]['userid']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>