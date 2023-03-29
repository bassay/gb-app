@extends('layout.main')

@section('content')
	
	<div class="row pt-md-4">
		{{-- start post --}}
		
		<p><a href="{{ route('post.index') }}">Назад</a></p>
		<hr>
		<div class="row pt-md-4">
			<h1 class="mb-3">{{ $post->title }}</h1>
			
			
			<div>
				{{ $post->text }}
			</div>
			
			<div class="tag-widget post-tag-container mb-5 mt-5">
				<div class="tagcloud">
					<a href="#" class="tag-cloud-link">Life</a>
					<a href="#" class="tag-cloud-link">Sport</a>
					<a href="#" class="tag-cloud-link">Tech</a>
					<a href="#" class="tag-cloud-link">Travel</a>
				</div>
			</div>
			
			<div class="about-author d-flex p-4 bg-light">
				<div class="bio mr-5">
					<img src="images/person_1.jpg" alt="Image placeholder"
					     class="img-fluid mb-4">
				</div>
				<div class="desc">
					<h3>George Washington</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Ducimus itaque, autem necessitatibus voluptate quod
						mollitia delectus aut, sunt placeat nam vero culpa
						sapiente consectetur similique, inventore eos fugit
						cupiditate numquam!</p>
				</div>
			</div>
			
{{--			комменты--}}
{{--			<div class="pt-5 mt-5">--}}
{{--				<h3 class="mb-5 font-weight-bold">6 Comments</h3>--}}
{{--				<ul class="comment-list">--}}
{{--					<li class="comment">--}}
{{--						<div class="vcard bio">--}}
{{--							<img src="images/person_1.jpg"--}}
{{--							     alt="Image placeholder">--}}
{{--						</div>--}}
{{--						<div class="comment-body">--}}
{{--							<h3>John Doe</h3>--}}
{{--							<div class="meta">October 03, 2018 at 2:21pm</div>--}}
{{--							<p>Lorem ipsum dolor sit amet, consectetur--}}
{{--								adipisicing elit. Pariatur quidem laborum--}}
{{--								necessitatibus, ipsam impedit vitae autem, eum--}}
{{--								officia, fugiat saepe enim sapiente iste iure!--}}
{{--								Quam voluptas earum impedit necessitatibus,--}}
{{--								nihil?</p>--}}
{{--							<p><a href="#" class="reply">Reply</a></p>--}}
{{--						</div>--}}
{{--					</li>--}}
{{--					--}}
{{--					<li class="comment">--}}
{{--						<div class="vcard bio">--}}
{{--							<img src="images/person_1.jpg"--}}
{{--							     alt="Image placeholder">--}}
{{--						</div>--}}
{{--						<div class="comment-body">--}}
{{--							<h3>John Doe</h3>--}}
{{--							<div class="meta">October 03, 2018 at 2:21pm</div>--}}
{{--							<p>Lorem ipsum dolor sit amet, consectetur--}}
{{--								adipisicing elit. Pariatur quidem laborum--}}
{{--								necessitatibus, ipsam impedit vitae autem, eum--}}
{{--								officia, fugiat saepe enim sapiente iste iure!--}}
{{--								Quam voluptas earum impedit necessitatibus,--}}
{{--								nihil?</p>--}}
{{--							<p><a href="#" class="reply">Reply</a></p>--}}
{{--						</div>--}}
{{--						--}}
{{--						<ul class="children">--}}
{{--							<li class="comment">--}}
{{--								<div class="vcard bio">--}}
{{--									<img src="images/person_1.jpg"--}}
{{--									     alt="Image placeholder">--}}
{{--								</div>--}}
{{--								<div class="comment-body">--}}
{{--									<h3>John Doe</h3>--}}
{{--									<div class="meta">October 03, 2018 at--}}
{{--										2:21pm--}}
{{--									</div>--}}
{{--									<p>Lorem ipsum dolor sit amet, consectetur--}}
{{--										adipisicing elit. Pariatur quidem--}}
{{--										laborum necessitatibus, ipsam impedit--}}
{{--										vitae autem, eum officia, fugiat saepe--}}
{{--										enim sapiente iste iure! Quam voluptas--}}
{{--										earum impedit necessitatibus, nihil?</p>--}}
{{--									<p><a href="#" class="reply">Reply</a></p>--}}
{{--								</div>--}}
{{--								--}}
{{--								--}}
{{--								<ul class="children">--}}
{{--									<li class="comment">--}}
{{--										<div class="vcard bio">--}}
{{--											<img src="images/person_1.jpg"--}}
{{--											     alt="Image placeholder">--}}
{{--										</div>--}}
{{--										<div class="comment-body">--}}
{{--											<h3>John Doe</h3>--}}
{{--											<div class="meta">October 03, 2018--}}
{{--												at 2:21pm--}}
{{--											</div>--}}
{{--											<p>Lorem ipsum dolor sit amet,--}}
{{--												consectetur adipisicing elit.--}}
{{--												Pariatur quidem laborum--}}
{{--												necessitatibus, ipsam impedit--}}
{{--												vitae autem, eum officia, fugiat--}}
{{--												saepe enim sapiente iste iure!--}}
{{--												Quam voluptas earum impedit--}}
{{--												necessitatibus, nihil?</p>--}}
{{--											<p><a href="#"--}}
{{--											      class="reply">Reply</a></p>--}}
{{--										</div>--}}
{{--										--}}
{{--										<ul class="children">--}}
{{--											<li class="comment">--}}
{{--												<div class="vcard bio">--}}
{{--													<img src="images/person_1.jpg"--}}
{{--													     alt="Image placeholder">--}}
{{--												</div>--}}
{{--												<div class="comment-body">--}}
{{--													<h3>John Doe</h3>--}}
{{--													<div class="meta">October--}}
{{--														03, 2018 at 2:21pm--}}
{{--													</div>--}}
{{--													<p>Lorem ipsum dolor sit--}}
{{--														amet, consectetur--}}
{{--														adipisicing elit.--}}
{{--														Pariatur quidem laborum--}}
{{--														necessitatibus, ipsam--}}
{{--														impedit vitae autem, eum--}}
{{--														officia, fugiat saepe--}}
{{--														enim sapiente iste iure!--}}
{{--														Quam voluptas earum--}}
{{--														impedit necessitatibus,--}}
{{--														nihil?</p>--}}
{{--													<p><a href="#"--}}
{{--													      class="reply">Reply</a>--}}
{{--													</p>--}}
{{--												</div>--}}
{{--											</li>--}}
{{--										</ul>--}}
{{--									</li>--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--						</ul>--}}
{{--					</li>--}}
{{--					--}}
{{--					<li class="comment">--}}
{{--						<div class="vcard bio">--}}
{{--							<img src="images/person_1.jpg"--}}
{{--							     alt="Image placeholder">--}}
{{--						</div>--}}
{{--						<div class="comment-body">--}}
{{--							<h3>John Doe</h3>--}}
{{--							<div class="meta">October 03, 2018 at 2:21pm</div>--}}
{{--							<p>Lorem ipsum dolor sit amet, consectetur--}}
{{--								adipisicing elit. Pariatur quidem laborum--}}
{{--								necessitatibus, ipsam impedit vitae autem, eum--}}
{{--								officia, fugiat saepe enim sapiente iste iure!--}}
{{--								Quam voluptas earum impedit necessitatibus,--}}
{{--								nihil?</p>--}}
{{--							<p><a href="#" class="reply">Reply</a></p>--}}
{{--						</div>--}}
{{--					</li>--}}
{{--				</ul>--}}
{{--				<!-- END comment-list -->--}}
{{--				--}}
{{--				<div class="comment-form-wrap pt-5">--}}
{{--					<h3 class="mb-5">Leave a comment</h3>--}}
{{--					<form action="#" class="p-3 p-md-5 bg-light">--}}
{{--						<div class="form-group">--}}
{{--							<label for="name">Name *</label>--}}
{{--							<input type="text" class="form-control" id="name">--}}
{{--						</div>--}}
{{--						<div class="form-group">--}}
{{--							<label for="email">Email *</label>--}}
{{--							<input type="email" class="form-control" id="email">--}}
{{--						</div>--}}
{{--						<div class="form-group">--}}
{{--							<label for="website">Website</label>--}}
{{--							<input type="url" class="form-control" id="website">--}}
{{--						</div>--}}
{{--						--}}
{{--						<div class="form-group">--}}
{{--							<label for="message">Message</label>--}}
{{--							<textarea name="" id="message" cols="30" rows="10"--}}
{{--							          class="form-control"></textarea>--}}
{{--						</div>--}}
{{--						<div class="form-group">--}}
{{--							<input type="submit" value="Post Comment"--}}
{{--							       class="btn py-3 px-4 btn-primary">--}}
{{--						</div>--}}
{{--					--}}
{{--					</form>--}}
{{--				</div>--}}
			</div>
		</div>

@endsection