	@extends('layouts.blog')

	@section('blog')
	<!--Page Title-->
	<section class="page-title" style="background-image:url(images/background/7.jpg);">
		<div class="auto-container">
			<h1>{{ $blog_information->name }}</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Latest News</li>
			</ul>
		</div>
	</section>
	<!--End Page Title-->

	<!-- Blog Page Section -->
	<section class="blog-page-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- News Block Two -->
				<!-- edit now -->
				@foreach ($articles as $article)
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">

							<a href="{{ route('show.article' , $article->id) }}"><img src="{{ $article->image_url }}" alt="" width="500" height="300"/></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
									<li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> {{ $article->comments_count }}</li>
									<!-- <li><span class="icon flaticon-heart"></span> 126</li> -->
								</ul>
								<ul class="post-meta">
									<li>{{ $article->created_at }}</li>
									<li>Post By: {{ $article->user->name }}</li>
								</ul>
								<h3><a href="{{ route('show.article' , $article->id) }}">{{ $article->title }}</a></h3>
								<div class="text">{{ substr($article->article_text,0,122) }} ...</div>
								<a href="{{ route('show.article' , $article->id) }}" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
						</div>
					</div>
				</div>
				@endforeach


			</div>

			<!-- Styled Pagination -->
			<div class="styled-pagination text-center">
				<ul class="inner-container clearfix">
					<!-- <li class="prev"><a href="#" class="active"><i class="flaticon-left-arrow"></i> Prev</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li class="active"><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li class="next"><a href="#" class="active">Next <i class="flaticon-right-arrow-1"></i></a></li> -->

					{{ $articles->links() }}
				</ul>
			</div>

		</div>
	</section>
	<!-- End Portfolio Page Section -->

	@endsection('blog')