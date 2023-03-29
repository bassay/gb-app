@extends('layout.main')

@section('content')
	
	{{-- start post --}}
	@foreach($posts as $post)
		<div class="row pt-md-4">
			<div class="col-md-12">
				<div class="blog-entry ftco-animate d-md-flex">
					<a href="{{ route('post.show', $post->id ) }}"
					   class="img img-2"
					   style="background-image: url(images/image_1.jpg);"></a>
					<div class="text text-2 pl-md-4">
						<h3 class="mb-2">
							<a href="{{ route('post.show', $post->id ) }}">
								{{ Str::limit($post->title, 25) }}
							</a>
						</h3>
						
						<div class="meta-wrap">
							<p class="meta">
								<span><i class="icon-calendar mr-2"></i>{{ $post->created_at }}</span>
								<span>
									<a href="{{ route('post.show', $post->id ) }}">
										<i class="icon-folder-o mr-2"></i>Travel-Category
									</a>
								</span>
								<span><i class="icon-comment2 mr-2"></i>Автор: {{ $post->author }}</span>
							</p>
						</div>
						<p class="mb-4">{{ Str::limit($post->text, 120) }}</p>
						<p><a href="{{ route('post.show', $post->id ) }}" class="btn-custom">Подробнее...<span class="ion-ios-arrow-forward"></span></a>
						</p>
					</div>
				</div>
			</div>
			{{-- end post --}}
		</div><!-- END-->
	@endforeach
	{{ $posts->links() }}
	

@endsection