@extends('layout.main')

@section('content')
	
	<div class="row pt-md-4">
		{{-- start post --}}
		
		@foreach($posts as $post)
			<p>
				{{ $post->id }}
				
				
				
				
			</p>

		@endforeach
		
		<hr>
		<div class="col-md-12">
			<div class="blog-entry ftco-animate d-md-flex">
				<a href="single.html" class="img img-2"
				   style="background-image: url(images/image_1.jpg);"></a>
				<div class="text text-2 pl-md-4">
					<h3 class="mb-2"><a href="single.html">{{ $post->title }}</a></h3>
					
					<div class="meta-wrap">
						<p class="meta">
							<span><i class="icon-calendar mr-2"></i>{{ $post->created_at }}</span>
							<span><a href="single.html"><i
											class="icon-folder-o mr-2"></i>Travel-Category</a></span>
							<span><i class="icon-comment2 mr-2"></i>Автор: {{ $post->author }}</span>
						</p>
					</div>
					<p class="mb-4">{{ $post->text }}</p>
					<p><a href="#" class="btn-custom">Подробнее...<span
									class="ion-ios-arrow-forward"></span></a>
					</p>
				</div>
			</div>
		</div>
		{{-- end post --}}
	</div><!-- END-->
							
@endsection