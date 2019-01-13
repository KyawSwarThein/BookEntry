<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
				<br>
				<a class="btn btn-success" href="{{ route('bookentrys.create') }}">Create BookEntry</a>
				<hr>
				@if($bookentrys->count() > 0)
					<table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Author Id</th>
							<th>Brief</th>
							<th>Published Date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bookentrys as $bookentry)
							<tr>
								<td>{{ $bookentry->id }}</td>
								<td>{{ $bookentry->name }}</td>
								<td>{{ $bookentry->author_id }}</td>
								<td>{{ $bookentry->brief }}</td>
								<td>{{ $bookentry->published_date }}</td>

								<td><a href="{{ route('bookentrys.edit', $bookentry->id) }}"><button class="btn btn-primary">Edit</button></a></td>
								<td>
									<form method="post" action="{{ route('bookentrys.destroy', $bookentry->id) }}">
										@method('delete')
    									@csrf
									<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
									
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $bookentrys->links() }}
				
				@else
					<h2>No Books In the Database!</h2>
				@endif
				
			</div>
		</div>
	</div>
	
</body>
</html>