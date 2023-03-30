<div class="sidebar-box ftco-animate">
	<h3 class="sidebar-heading">Категории</h3>
	<ul class="categories">
		@foreach ($categories as $category)
			<li><a href="#">{{ $category->title }}<span></span></a></li>
		@endforeach
	</ul>
</div>