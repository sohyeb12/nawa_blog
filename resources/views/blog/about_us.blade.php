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

	<!-- Health Section -->
	<section class="health-section">
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="row clearfix">
					
					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="border-line"></div>
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>Who We Are <br> Blog Sohyeb Jarwan</h2>
								<div class="separator"></div>
							</div>
							<div class="text">Where you are at the heart of our mission. We hope you will consider us as your medical home—the place where you feel safe, comfortable and cared for. As a multi-specialty medical group,</div>
							<a href="about.html" class="theme-btn btn-style-one"><span class="txt">More About Us</span></a>
						</div>
					</div>
					
					<!-- Image Column -->
					<div class="image-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="{{ asset('assets/images/resource/image-3.jpg') }}" alt="" />
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Health Section -->
	
	<!-- Featured Section -->
	<section class="featured-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon flaticon-doctor-stethoscope"></div>
							<h3><a href="#">Medical Treatment</a></h3>
						</div>
						<div class="text">Whether you're taking your first steps, just finding your stride,</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon flaticon-ambulance-side-view"></div>
							<h3><a href="#">Emergency Help</a></h3>
						</div>
						<div class="text">Whether you're taking your first steps, just finding your stride,</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon fas fa-user-md"></div>
							<h3><a href="#">Qualified Doctors</a></h3>
						</div>
						<div class="text">Whether you're taking your first steps, just finding your stride,</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="icon fas fa-briefcase-medical"></div>
							<h3><a href="#">Medical Professionals</a></h3>
						</div>
						<div class="text">Whether you're taking your first steps, just finding your stride,</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Counter Section -->
	<section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter style-two">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-logout"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="2350">0</span>
								</div>
								<h4 class="counter-title">Satisfied Patients</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-logout"></div>
								<div class="count-outer count-box alternate">
									+<span class="count-text" data-speed="3000" data-stop="350">0</span>
								</div>
								<h4 class="counter-title">Doctor’s Team</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-logout"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="2150">0</span>
								</div>
								<h4 class="counter-title">Success Mission</h4>
							</div>
						</div>
					</div>
					
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-logout"></div>
								<div class="count-outer count-box">
									+<span class="count-text" data-speed="2500" data-stop="225">0</span>
								</div>
								<h4 class="counter-title">Successfull Surgeries</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->


@endsection('blog')