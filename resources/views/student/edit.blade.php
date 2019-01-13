<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" action="{{ route('bookentrys.update', $bookentry->id) }}">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
			@endforeach -->
			@csrf
			@method("patch")
			<div class="form-group">
				<label for="name">Name :</label>
				<input name="name" type="text" class="form-control" id="book_name" placeholder="Book Name" value="{{ $bookentry->name }}">
				@if($errors->has("name"))
					<small class="form-text text-danger">
						{{ $errors->first('name') }}
					</small>
				@endif
  
			</div>

				<div class="form-group">
				<label for="author_id">Author Id :</label>
				<input name="author_id" type="text" class="form-control" id="author_id" placeholder="Author Id" value="{{ $bookentry->author_id }}">
				@if($errors->has("author_id"))
					<small class="form-text text-danger">
						{{ $errors->first('author_id') }}
					</small>
				@endif
  
			</div>

				<div class="form-group">
				<label for="brief">Brief :</label>
				<input name="brief" type="text" class="form-control" id="brief" placeholder="Brief About Book" value="{{ $bookentry->brief }}">
				@if($errors->has("brief"))
					<small class="form-text text-danger">
						{{ $errors->first('brief') }}
					</small>
				@endif
  
			</div>


			<div class="form-group">
				<label for="published_date">Published Date :</label>
				<input name="published_date" type="date" class="form-control" id="published_date" value="{{ $bookentry->published_date }}" rows="3" placeholder="Published Date">
				@if($errors->has("published_date"))
					<small class="form-text text-danger">
						{{ $errors->first('published_date') }}
					</small>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</body>
	</html>