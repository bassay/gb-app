@extends('layout.main')

@section('content')
	
	<div class="row pt-md-4">
		{{-- start post --}}
		<div class="col-md-12">
			<div class="blog-entry ftco-animate d-md-flex">
				<a href="single.html" class="img img-2"
				   style="background-image: url(images/image_1.jpg);"></a>
				<div class="text text-2 pl-md-4">
					<h3 class="mb-2"><a href="single.html">Привет мир!</a></h3>
					
					<div class="meta-wrap">
						<p class="meta">
							<span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
							<span><a href="single.html"><i
											class="icon-folder-o mr-2"></i>Travel-Category</a></span>
							<span><i class="icon-comment2 mr-2"></i>5 Comment - not working</span>
						</p>
					</div>
					<p class="mb-4">Тут какое то описание на Русском языке</p>
					<p><a href="#" class="btn-custom">Подробнее...<span
									class="ion-ios-arrow-forward"></span></a>
					</p>
				</div>
			</div>
		</div>
		{{-- end post --}}
	</div><!-- END-->
							
@endsection