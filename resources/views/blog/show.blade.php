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



<div class="sidebar-page-container">
	<div class="auto-container">
		<div class="row clearfix">

			<!--Content Side-->
			<div class="content-side col-lg-8 col-md-12 col-sm-12">
				<div class="news-detail">
					<div class="inner-box">
						<div class="image">
							<img src="{{ $article->image_url }}" alt="" />
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
									<li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
									<li><span class="icon flaticon-heart"></span> 126</li>
								</ul>
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3>Diagnostic Services for Efficient Results Picking Right</h3>
								<div class="text">
									<p>{{ $article->article_text }}</p>

								</div>
							</div>
						</div>
					</div>

					<!-- Other Options -->
					<div class="post-share-options clearfix">
						<div class="pull-right">
							<p>Tags : </p>
							<ul class="tags">
								<li><a href="#">Body Surgery,</a></li>
								<li><a href="#">Dental Care,</a></li>
								<li><a href="#">Eye Care</a>,</li>
							</ul>
						</div>
						<div class="pull-left">
							<p>Shere : </p>
							<ul class="social-icon">
								<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
								<li><a href="#"><span class="fab fa-google-plus"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-facebook"></span></a></li>
								<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
							</ul>
						</div>
					</div>

					<!-- New Posts -->
					<div class="new-posts">
						<span class="grid-icon flaticon-menu-3"></span>
						<div class="clearfix">
							<div class="pull-left">
								<a href="#">Prev Post <span>Tips on Minimalist</span></a>
							</div>
							<div class="pull-right">
								<a href="#" class="next-post">Next Post <span>Tips on Minimalist</span></a>
							</div>
						</div>
					</div>

					<!-- Doctor Testimonial Block -->
					<div class="doctor-testimonial-boxed">
						<div class="inner-boxed">

							<div class="single-item-carousel owl-carousel owl-theme">

								<div class="doctor-block-two">
									<div class="inner-block">
										<div class="image">
											<img src="images/resource/author-6.jpg" alt="" />
										</div>
										<h3>MD. Salim Rana</h3>
										<ul class="social-icon">
											<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
											<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
											<li><a href="#"><span class="fab fa-twitter"></span></a></li>
											<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
											<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
										</ul>
										<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor. </div>
										<div class="quote-icon flaticon-quote"></div>
									</div>
								</div>

								<div class="doctor-block-two">
									<div class="inner-block">
										<div class="image">
											<img src="images/resource/author-6.jpg" alt="" />
										</div>
										<h3>MD. Salim Rana</h3>
										<ul class="social-icon">
											<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
											<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
											<li><a href="#"><span class="fab fa-twitter"></span></a></li>
											<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
											<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
										</ul>
										<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor. </div>
										<div class="quote-icon flaticon-quote"></div>
									</div>
								</div>

								<div class="doctor-block-two">
									<div class="inner-block">
										<div class="image">
											<img src="images/resource/author-6.jpg" alt="" />
										</div>
										<h3>MD. Salim Rana</h3>
										<ul class="social-icon">
											<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
											<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
											<li><a href="#"><span class="fab fa-twitter"></span></a></li>
											<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
											<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
										</ul>
										<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor. </div>
										<div class="quote-icon flaticon-quote"></div>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div>

				<!--Comments Area-->
				<div class="comments-area">

					<div class="group-title">
						<h2>{{ count($article->comments) }} Comments</h2>
					</div>

					<!--Comment Box-->
					@foreach($article->comments as $comment)
					<div class="comment-box">
						<div class="comment">
							<div class="author-thumb"><img src="images/resource/author-7.jpg" alt=""></div>
							<div class="comment-inner">
								<div class="comment-info clearfix"><strong>{{ $article->user->name }}</strong>
									<div class="comment-time">{{ $comment->created_at }}</div>
								</div>
								<div class="text">{{ $comment->comment_text }}</div>
								<!-- <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a> -->
							</div>
						</div>
					</div>
					@endforeach
					<!--Comment Box-->
					


				<!-- Comment Form -->
				<div class="comment-form">

					<div class="group-title">
						<h2>Leave a Commnet</h2>
					</div>

					<!-- Comment Form -->
					<div class="comment-form">
						<div>
							@if ($errors->any())
							<div class="alert alert-danger">
								You have some errors:
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
						</div>

						<form action="{{ route('comments.store') }}" method="post">
							@csrf
							
								<input type="hidden" id="hidden" name="article_id" value="{{ $article->id }}">
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea name="comment_text" placeholder="Leave a Commnet"></textarea>
									<div>
										@error('comment_text')
										<p class="invalid-feedback">{{$message}}</p>
										@enderror
									</div>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<button class="theme-btn comment-btn" type="submit">Post Comments</button>
								</div>

							</div>
						</form>

					</div>
					<!--End Faq Form -->

				</div>



			</div>

			<!--Sidebar Side-->
			<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
				<aside class="sidebar">

					<!-- Search -->
					<div class="sidebar-widget search-box">
						<form method="post" action="contact.html">
							<div class="form-group">
								<input type="search" name="search-field" value="" placeholder="Search..." required>
								<button type="submit"><span class="icon fa fa-search"></span></button>
							</div>
						</form>
					</div>

					<!--Category Blog-->
					<div class="sidebar-widget categories-blog">
						<div class="sidebar-title">
							<h2>Best Categories</h2>
							<div class="separator"></div>
						</div>
						<ul>
							<li><a href="#">Body Surgery <span>05</span></a></li>
							<li><a href="#">Dental Care <span>12</span></a></li>
							<li><a href="#">Eye Care <span>35</span></a></li>
							<li><a href="#">Blood Cancer <span>25</span></a></li>
							<li><a href="#">Neurology Sargery <span>65</span></a></li>
							<li><a href="#">Health Care <span>12</span></a></li>
						</ul>
					</div>

					<!-- Popular Posts -->
					<div class="sidebar-widget popular-posts">
						<div class="sidebar-title">
							<h2>Recent Posts</h2>
							<div class="separator"></div>
						</div>

						<div class="widget-content">

							<article class="post">
								<div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
								<h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
								<span class="date">Dec. 20, 2017</span>
							</article>

							<article class="post">
								<div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
								<h3><a href="blog-detail.html">Achieving Better Health Care One Patient Time</a></h3>
								<span class="date">Dec. 20, 2017</span>
							</article>

							<article class="post">
								<div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-5.jpg" alt=""></a></div>
								<h3><a href="blog-detail.html">Doctor Appointment for the Client to check up.</a></h3>
								<span class="date">Dec. 20, 2017</span>
							</article>

						</div>

					</div>

					<!-- Archive Category -->
					<div class="sidebar-widget categories-blog">
						<div class="sidebar-title">
							<h2>Archives</h2>
							<div class="separator"></div>
						</div>
						<ul>
							<li><a href="#">February 2019</a></li>
							<li><a href="#">January 2019</a></li>
							<li><a href="#">December 2018</a></li>
						</ul>
					</div>

					<!-- Gallery Widget -->
					<div class="sidebar-widget gallery-widget">
						<div class="sidebar-title">
							<h2>Gallery</h2>
							<div class="separator"></div>
						</div>
						<div class="gallery-outer clearfix">
							<figure class="image">
								<a href="images/resource/news-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-1.jpg" alt=""></a>
							</figure>

							<figure class="image">
								<a href="images/resource/news-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-2.jpg" alt=""></a>
							</figure>

							<figure class="image">
								<a href="images/resource/news-3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-3.jpg" alt=""></a>
							</figure>

							<figure class="image">
								<a href="images/resource/news-4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-4.jpg" alt=""></a>
							</figure>

							<figure class="image">
								<a href="images/resource/news-5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-5.jpg" alt=""></a>
							</figure>

							<figure class="image">
								<a href="images/resource/news-6.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-6.jpg" alt=""></a>
							</figure>
						</div>
					</div>

					<!-- Tags -->
					<div class="sidebar-widget tags">
						<div class="sidebar-title">
							<h2>Cool Tags</h2>
							<div class="separator"></div>
						</div>
						<ul class="tag-list clearfix">
							<li><a href="#">Blood</a></li>
							<li><a href="#">Eye Care</a></li>
							<li><a href="#">Care</a></li>
							<li><a href="#">Body Surgery</a></li>
							<li><a href="#">Dental</a></li>
							<li><a href="#">Diabetes</a></li>
							<li><a href="#">Appointment</a></li>
						</ul>
					</div>

				</aside>
			</div>

		</div>
	</div>
</div>
@endsection('blog')