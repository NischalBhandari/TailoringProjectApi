<html>
	<body>
		<h1>This is successful</h1>

		<center>
			
			<table>
				<tr>
					<td>FirstName</td>
					<td>color</td>
					<td>Picture</td>
				</tr>
				@foreach($data as $value)
				<tr>
					<td>{{$value->name}}</td>
					<td>{{$value->color}}</td>
					<td><img src="http://localhost/storage/{{$value->name}}"></td>
				</tr>
				@endforeach

			</table>
		</center>
	</body>

</html>