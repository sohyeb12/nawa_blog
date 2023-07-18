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


<section class="contact-page-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>{{ $title }}</h2>
            <div class="separator"></div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">

            <!--Contact Form-->
            <form action="{{ route('communications.store') }}" method="post" >
                @csrf
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="Name">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="phone" placeholder="Phone">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="subject" placeholder="Subject">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="text_message" placeholder="Your Message"></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                        <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Contact Us</span></button>
                    </div>

                </div>
            </form>

            <!--End Contact Form -->

        </div>
</section>
<!-- End Contact Page Section -->
@endsection('blog')