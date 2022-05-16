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
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->



<!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
              <!--   <div class="sec-title centered">
                    <h2>Offices near you<span class="dot">.</span></h2>
                </div> -->

                <div class="upper-info">
                    <div class="row clearfix">
                        <div class="info-block col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Email Address</h5>
                                <div class="text">
                                    <ul class="info">
                                 
                                        <li><a href="mailto:info@elysiumtechnologiesltd.co.uk">info@elysiumtechnologiesltd.co.uk</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Office Address</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>159 Bolton Drive, Shinfield, Reading. RG2 9WL </li>
                                      <!--   <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Phone Number</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>Call us on:</li>
                                        <li><a href="tel:01189889511">01189889511</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                   

                    </div>
                </div>

          

            </div>
        </section>






@endsection
