@extends('layout.main')

@section('content')
	<div class="row pt-md-4">
		<h2>Форма создания поста</h2>
		
		<form action="{{ route('post.store') }}" class="bg-light p-5 contact-form" method="post">
			@csrf
			<div class="form-group">
				<input type="text" name="title" placeholder="Заголовок поста" class="form-control" >
				@error('title')<p style="color: darkred">*{{ $message }}</p>@enderror
			</div>
			<div class="form-group">
				<input type="text" name="author"  placeholder="Автор" class="form-control" >
				@error('author')<p style="color: darkred">*{{ $message }}</p>@enderror
			</div>
			<div class="form-group">
				<textarea name="text"  placeholder="Текст поста" cols="30" rows="7" class="form-control"></textarea>
				@error('text')<p style="color: darkred">*{{ $message }}</p>@enderror
			</div>

			<div class="form-group">
				<input type="submit" value="Добавить" class="btn btn-primary py-3 px-5">
			</div>
		</form>
	</div>
@endsection