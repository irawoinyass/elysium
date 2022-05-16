@extends('MainLayouts.staticapp')
@section('content')


      <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(/main/images/background/image-3.jpg);"></div>
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
                            <div class=""><img src="/main/images/resource/featured-image-12.jpg" alt=""></div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h6>we serve the purpose of preventing the unauthorized access to or theft of a computer network’s resources.</h6>
                                <p>The internet brings great opportunity and risk. When you connect to the internet, you invite every hacker, virus, and spammer to infiltrate your business, but you also gain access to a world of opportunity.  The best and worst of what the world has to offer is just a click away. The blessing and risks of the internet multiply with every connected employee.</p>
                                <p>Elysium’s Network Security as a Service allows your business to experience the benefits of connected growth while protecting you, your team, and your data from the threats of being online.</p>
                            </div>
                   
                        </div>
                    </div>
                </div>
            </div>
        </section>








@endsection        