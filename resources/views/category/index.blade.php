@extends('layout.main')

@section('content')
	
	<h1>Список всех категорий</h1>
	
	<a href="{{ route('category.create') }}">Добавить</a> | <a href="{{ route('post.index') }}">На главную</a>
	
	<ul>
	@foreach($categories as $category)
		<li>
			<a href="{{ route('category.edit' , $category->id ) }}">Изм.</a>, <a href="{{ route('category.destroy' , $category->id ) }}">Del</a> --
			<span>id: {{ $category->id }}. {{ $category->title }}</span>
		</li>
	@endforeach
	</ul>
	
	
{{-- start post --}}

{{--		<div class="row pt-md-4">--}}
{{--			<div class="col-md-12">--}}
{{--				<div class="blog-entry ftco-animate d-md-flex">--}}
{{--					<a href=""--}}
{{--					   class="img img-2"--}}
{{--					   style="background-image: url(images/image_1.jpg);"></a>--}}
{{--					<div class="text text-2 pl-md-4">--}}
{{--						<h3 class="mb-2">--}}
{{--							<a href="">--}}
{{--								ссылкуа--}}
{{--							</a>--}}
{{--						</h3>--}}
{{--						--}}
{{--						<div class="meta-wrap">--}}
{{--							<p class="meta">--}}
{{--								<span><i class="icon-calendar mr-2"></i>ДЖата</span>--}}
{{--								<span>--}}
{{--									<a href="">--}}
{{--										<i class="icon-folder-o mr-2"></i>Travel-Category--}}
{{--									</a>--}}
{{--								</span>--}}
{{--								<span><i class="icon-comment2 mr-2"></i>Автор: </span>--}}
{{--							</p>--}}
{{--						</div>--}}
{{--						<p class="mb-4">текст</p>--}}
{{--						<p><a href="" class="btn-custom">Подробнее...<span class="ion-ios-arrow-forward"></span></a>--}}
{{--						</p>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			--}}{{-- end post --}}
{{--		</div><!-- END-->--}}


@endsection