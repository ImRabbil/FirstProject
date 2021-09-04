<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contract Information</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Contract Book</h2>
	<a href="{{URL::to('/') }}" class="btn btn-success">Home</a>
	<a href="{{URL::to('/newdata') }}" class="btn btn-primary">Add New</a>
	<table class="table table-border">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
		@foreach($data as $row)
		<tr>
			<td>{{ $row->id}}</td>
			<td>{{ $row->name}}</td>
			<th>{{ $row->email}}</td>
			<td>{{ $row->phone}}</td>
			<td>
				<a href="{{ URL::to('edit-contracts/'.$row->id)}}"class="btn btn-info">Edit</a>
				<a href="{{ URL::to('delete-contracts/'.$row->id)}}"class="btn btn-danger">Delete</a>
				<a href="{{ URL::to('view-contracts/'.$row->id)}}"class="btn btn-primary">View</a>
			</td>
		</tr>
		@endforeach
	</table>
		
	</div>
	

</body>
</html>