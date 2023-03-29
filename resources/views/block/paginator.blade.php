<div class="row">
	<div class="col">
		<div class="block-27">
			<ul>
{{--				<li><a href="{{ $paginator->previousPageUrl() }}">&lt;</a></li>--}}
				
				{{-- Previous Page Link --}}
				@if ($paginator->onFirstPage())
{{--					<li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--						<span aria-hidden="true">&lsaquo;</span>--}}
{{--					</li>--}}
				@else
					<li>
						<a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lt;</a>
					</li>
				@endif
				{{-- Pagination Elements --}}
				@foreach ($elements as $element)
					{{-- "Three Dots" Separator --}}
					@if (is_string($element))
						<li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
					@endif
					
					{{-- Array Of Links --}}
					@if (is_array($element))
						@foreach ($element as $page => $url)
							@if ($page == $paginator->currentPage())
								<li class="active"><span>{{ $page }}</span></li>
							@else
								<li><a href="{{ $url }}">{{ $page }}</a></li>
							@endif
						@endforeach
					@endif
				@endforeach
				
{{--				--}}
{{--				<li class="active"><span>1</span></li>--}}
{{--				<li><a href="#">2</a></li>--}}
{{--				<li><a href="#">3</a></li>--}}
{{--				<li><a href="#">4</a></li>--}}
{{--				<li><a href="#">5</a></li>--}}
{{--				<li><a href="{{ $paginator->nextPageUrl() }}">&gt;</a></li>--}}
				
				{{-- Next Page Link --}}
				@if ($paginator->hasMorePages())
					<li>
						<a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&gt;</a>
					</li>
				@else
{{--					<li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--						<span aria-hidden="true">&rsaquo;</span>--}}
{{--					</li>--}}
				@endif
			</ul>
		</div>
	</div>
</div>