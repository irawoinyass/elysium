@extends('MainLayouts.staticapp')
@section('content')


      <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(/main/images/background/image-2.jpg);"></div>
            <!-- <div class="shape-1"></div>
            <div class="shape-2"></div> -->
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1 style="font-size: 60px !important;">{{$title}}</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->






<section class="featured-section featured-section__about-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class=""><img src="/main/images/resource/featured-image-8.jpg" alt=""></div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h6>we help businesses leverage the on-demand benefits of the internet with a cloud service provider.</h6>
                                <p>As a leading Google service provider with a proven track record of successful Google projects. Our Google Workspace team has years of experience supporting Google products for both public and private sectors. We will help your organization transition storage, collaboration, and communication to the cloud. Leverage the amazing features of Google for Business applications to help your team work together better.</p>
                            </div>
                      

                        </div>
                    </div>
                </div>
            </div>
        </section>








@endsection        