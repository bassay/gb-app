@extends('layout.main')

@section('content')
	<div class="row pt-md-4">
		<h2>Форма создания поста</h2>
		
		<form action="{{ route('post.update', $post->id) }}" class="bg-light p-5 contact-form" method="post">
			@csrf
			@method('Patch')
			<div class="form-group">
				<input type="text" name="title" placeholder="Заголовок поста" class="form-control" value="{{ old('title') ?? $post->title }}">
				@error('title')<p style="color: darkred">*{{ $message }}</p>@enderror
			</div>
			<div class="form-group">
				<input type="text" name="author"  placeholder="Автор" class="form-control"  value="{{ old('author')  ?? $post->author }}">
				@error('author')<p style="color: darkred">*{{ $message }}</p>@enderror
			</div>
			<div class="form-group">
				<textarea name="text"  placeholder="Текст поста" cols="30" rows="7" class="form-control">{{ old('text') ?? $post->text }}</textarea>
				@error('text')<p style="color: darkred">*{{ $message }}</p>@enderror
			</div>
			
			<div class="form-group">
				<label for="category_id">Категория:</label>
				<select name="category_id" id="category_id" class="form-control">
					
					@foreach($categories as $category)
						<option value="{{ $category->id }}"{{ old('category_id') == $category->id ? ' selected' : '' }}>
							{{ $category->title }}
						</option>
					@endforeach
				</select>
			</div>
			
			<div class="form-group">
				<input type="submit" value="Сохранить" class="btn btn-primary py-3 px-5">
			</div>
		</form>
	</div>
@endsection