@extends('frontend.layouts.app')
@section('content')

<!-- Hero Section -->

<section>

    <div class="hero-video">

        <!-- <video width="100%" playsinline="" autoplay="" muted="" loop="" poster=""><source src="{{ asset('frontend') }}/assets/videos/demo2.mp4" type="video/mp4"></video> -->

        <img src="{{ asset('frontend') }}/assets/images/banner.jpg" alt="hero-banner">

        <div class="bg-overlay opc_05"></div>

        <div class="hero-content" data-scroll data-scroll-speed="-1">

            <div class="container">

                <!-- <svg width="580" height="400" class="svg-morph">

                        <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />

                    </svg> -->

                <div class="hero-content-wrap">

                    <h2 class="title-big font-weight-300 mb-4">Premier Private <span class="d-lg-block">Label <b>Manufacturer</b></span></h2>

                    <h4 class="font-weight-300">Where technology transforms ideas into art.</h4>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Overview Section -->

<section class="d-lg-none">

    <div class="container-fluid">

        <div class="overview-sec">

            <div class="overview-sec-wrap">

                <div class="overview-sec-content-bg"></div>

                <div class="justify-content-center">

                    <h2 class="overview-sec-content-wrap-title title-wrap-20 text-center"><b>About</b> Us</h2>

                    <div class="overview-sec-content-wrap-text">

                        <p class='text-center'>Indeutsch Industries came into existence in the late 1980s. The journey from supplying aluminium ferrules to becoming one of the best manufacturers of artist and cosmetic brushes has been filled with accomplishments.</p>

                        <p class='text-center'>Enjoying a good reputation with a large number of customers, Indeutsch products can be found worldwide which includes North America, Europe, Australia, New Zealand, Middle East etc. </p>

                        <p class="mb-0 text-center">Our company is extremely conscious of the environment. This is reflected in the raw material used and production processes. Indeutsch carries an array of various certifications for e.g. FSC certification, C-TPAT, ISO 9001, ISO14001, PEFC etc.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="overview-pin">

    <div class="container-fluid">

        <div class="overview-sec pb-0">

            <div class="overview-sec-wrap">

                <div class="overview-sec-img">

                    <div class="overview-sec-img-profile">

                        <figure class="mb-0">

                            <img src="{{ asset('frontend') }}/assets/images/about-us.jpg" class="overview-cover" alt="Image">

                        </figure>

                    </div>

                    <div class="overview-sec-bg-overlay"></div>

                    <div class="usp-counters">

                        <ul class="list-style-none text-center">

                            <li>

                                <div>

                                    <h2><b>2.5</b> MILLION</h2>

                                    <h5>BRUSHES PER MONTH</h5>

                                </div>

                            </li>

                            <li>

                                <div>

                                    <h2><b>5</b> MILLION</h2>

                                    <h5>FERRULES PER MONTH</h5>

                                </div>

                            </li>

                            <li>

                                <div>

                                    <h2><b>0.2</b> MILLION</h2>

                                    <h5>LINEAR METERS OF CANVAS PRIMING PER MONTH</h5>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="overview-sec-content">

                    <div class="overview-sec-content-bg"></div>

                    <div class="overview-sec-content-wrap">

                        <h2 class="overview-sec-content-wrap-title title-wrap-20"><b>About</b> Us</h2>

                        <div class="overview-sec-content-wrap-text">

                            <p>Indeutsch Industries came into existence in the late 1980s. The journey from supplying aluminium ferrules to becoming one of the best manufacturers of artist and cosmetic brushes has been filled with accomplishments.</p>

                            <p>Enjoying a good reputation with a large number of customers, Indeutsch products can be found worldwide which includes North America, Europe, Australia, New Zealand, Middle East etc. </p>

                            <p class="mb-0">Our company is extremely conscious of the environment. This is reflected in the raw material used and production processes. Indeutsch carries an array of various certifications for e.g. FSC certification, C-TPAT, ISO 9001, ISO14001, PEFC etc.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Certifications -->

<section class="certifications-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 col-lg-10 mx-auto text-center title-wrap-20">
                <h2 class="title-wrap-20"> Our Certifications</h2>
                <!-- <p>Explore our extensive selection of certificates that are geared to advance your career and demonstrate your skills. Our certifications are a great tool for achieving your goals and a sign of your dedication to professional development.</p> -->
            </div>
            <div class="col-12">
                <ul class="certifications-icons list-style-none">

                    <!-- Certificate 1 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/certificate_3.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ISO_9001_2015.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">ISO 9001:2015</div>
                        <a class="custom-link certifications-btn-view d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ISO_9001_2015.pdf">View</a>
                    </li>

                    <!-- Certificate 2 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/certificate_4.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ISO_14001_2015.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">ISO 14001:2015</div>
                        <a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ISO_14001_2015.pdf">View</a>
                    </li>

                    <!-- Certificate 3 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/certificate_2.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ISO_45001_2018_NEW_CERTIFICATE_for_6_sites.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">ISO 45001:2018</div>
                        <a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ISO_45001_2018_NEW_CERTIFICATE_for_6_sites.pdf">View</a>
                    </li>

                    <!-- Certificate 4 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/certificate_1.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ENMS_715868-001.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">ISO 50001:2018</div>
                        <a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/ENMS_715868-001.pdf">View</a>
                    </li>

                    <!-- Certificate 5 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/certificate_6.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/INDEUTSCH_PEFC_CERTIFICATE.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">PEFC (Program For The Endorsement Of Forest Certification)</div>
                        <a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/INDEUTSCH_PEFC_CERTIFICATE.pdf">View</a>
                    </li>

                    <!-- Certificate 6 -->
                    <!-- <li>
							<div class="certifications-icons-item">
								<img src="{{ asset('frontend') }}/assets/images/certifications/certificate_5.png" alt="Certificate">
								<a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/Green_Product_Certificate-Indeutsch-05082023.pdf"><i class='bx bx-link-external'></i></a>
							</div>
							<div class="font-weight-600">Green Product Certification</div>
							<a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/Green_Product_Certificate-Indeutsch-05082023.pdf">View</a>
						</li> -->

                    <!-- Certificate 7 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/certificate_7.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/Indeutsch_Industries_Private_Limited_FSC_COC_Certificate_23_12_2024.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">FSC<sup>TM</sup> Certification</div>
                        <a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/Indeutsch_Industries_Private_Limited_FSC_COC_Certificate_23_12_2024.pdf">View</a>
                    </li>
                    <!-- Certificate 8 -->
                    <li>
                        <div class="certifications-icons-item">
                            <img src="{{ asset('frontend') }}/assets/images/certifications/ctpat.png" alt="Certificate">
                            <a class="certifications-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/CTPAT_Certificate_Indeutsch_Industries_Private_Limited.pdf"><i class='bx bx-link-external'></i></a>
                        </div>
                        <div class="font-weight-600">CTPAT Certification</div>
                        <a class="custom-link d-md-none" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-pdf-url="{{ asset('frontend') }}/assets/pdf/CTPAT_Certificate_Indeutsch_Industries_Private_Limited.pdf">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- Global Presence -->

<section class="sec-space pt-0">

    <div class="container">

        <div class="row">

            <div class="col-lg-9 mx-auto text-center title-wrap-40">

                <h5>Global Presence</h5>

                <h2>Exporting to more than <b class="text-accent">35+ countries</b> across the world</h2>

            </div>

            <div class="col-12 text-center">

                <img src="{{ asset('frontend') }}/assets/images/global_map.gif" width="1200" alt="Global Presence | Indeutsch">

            </div>

        </div>

    </div>

</section>

<!-- Milestones -->
<section class="story-sec sec-space pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center title-wrap-40">
                <h2>Milestones</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Story Slider -->
                <div class="story-slider">
                    <div class="container">
                        <div class="swiper story-years swiper-slider-overflow">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>1987</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>1989</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>1991</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>1993</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>1995</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>1997</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2002</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2004</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2009</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2010</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2014</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2016</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2017</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2020</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2022</div>
                                </div>
                                <div class="swiper-slide">
                                    <div>2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper story-slider-main swiper-slider-overflow">
                            <div class="slider-nav-style">
                                <div class="button-prev slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.614" height="14.498" viewBox="0 0 23.614 14.498">
                                        <g id="Component_47_37" data-name="Component 47 – 37" transform="translate(1.414 0.707)">
                                            <g id="Group_1246" data-name="Group 1246" transform="translate(302.271 44.042) rotate(180)">
                                                <path id="Path_5233" data-name="Path 5233" d="M4819.182-4136.214l-6.542-6.542,6.542-6.542" transform="translate(5114.91 -4105.256) rotate(180)" fill="none" stroke="#F74225" stroke-miterlimit="10" stroke-width="2"></path>
                                                <path id="Path_5234" data-name="Path 5234" d="M302.266,37.5H280.607" transform="translate(-0.537)" fill="none" stroke="#F74225" stroke-width="2"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="button-next slide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.614" height="14.498" viewBox="0 0 23.614 14.498">
                                        <g id="Component_47_87" data-name="Component 47 – 87" transform="translate(22.2 13.791) rotate(180)">
                                            <g id="Group_1246" data-name="Group 1246" transform="translate(302.271 44.042) rotate(180)">
                                                <path id="Path_5233" data-name="Path 5233" d="M4819.182-4136.214l-6.542-6.542,6.542-6.542" transform="translate(5114.91 -4105.256) rotate(180)" fill="none" stroke="#F74225" stroke-miterlimit="10" stroke-width="2"></path>
                                                <path id="Path_5234" data-name="Path 5234" d="M302.266,37.5H280.607" transform="translate(-0.537)" fill="none" stroke="#F74225" stroke-width="2"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                <!-- 1987 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Inception of Indeutsch Industries</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/inception-1.jpg" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1989 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of aluminium ferrules</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/aluminum.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1991 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of brass ferrules</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/brass-furrels.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1993 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of school brushes</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/school-brushes2.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1995 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of artist brushes</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/artist-brushes2.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1997 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of cosmetic brushes</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/cosmetic-brushes.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2002 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Launch of Canvas products</h3>
                                                <!-- <ul class="list-style list-style-none list-style-spacing_0 mt-4">
                                                        <li class="font-size-md">Takeover of Grumbacher USA business</li>
                                                        <li class="font-size-md"></li>
                                                    </ul> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/canva-product.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2004 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Commissioned high grade Interlocked Artist Brushes</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/interlocked-artist.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2009 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Elevating Artistry</h3>
                                                <ul class="list-style list-style-none list-style-spacing_0 mt-4">
                                                    <li class="font-size-md">Introduction of Linen Canvas</li>
                                                    <li class="font-size-md">Introduced Brass lacquered ferrules</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/elevating.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2010-->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Development of Spline Stretched Canvas</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/stretched-canvas.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2014 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of brush bags/pencil cases and Aprons</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/bag.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2016 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Commissioned in house product testing laboratory</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/laboratory.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2017 -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Launched Painting knives</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <img src="{{ asset('frontend') }}/assets/images/painting-knives.png" alt="Indeutsch | Story Image">
                                        </div>
                                    </div>
                                </div>
                                <!-- 2020-->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Manufacturing of wooden products for Dental industry</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <img src="{{ asset('frontend') }}/assets/images/dental-industry.png" alt="Indeutsch | Story Image">
                                        </div>
                                    </div>
                                </div>
                                <!-- 2022-->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Journey of Achievements</h3>
                                                <ul class="list-style list-style-none list-style-spacing_0 mt-4">
                                                    <li class="font-size-md">Manufacturing of metal components for Cosmetic industry</li>
                                                    <li class="font-size-md">Manufacturing of wooden components for home furnishing industry</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/achivement.jpg" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2023-->
                                <div class="swiper-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="story-slider-content ps-lg-3 text-center text-lg-start">
                                                <h3>Innovative Milestones</h3>
                                                <ul class="list-style list-style-none font-size-md list-style-spacing_0 mt-4">
                                                    <li>Started manufacturing of metal products for dental Industry</li>
                                                    <li>Introduced water color canvas</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5 text-lg-end">
                                            <figure class="ani_img img_dot img_dot-right is-inview" data-scroll data-scroll-speed="-0.5">
                                                <img src="{{ asset('frontend') }}/assets/images/inovative-milestone.png" alt="Indeutsch | Story Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products -->

<section class="pro_sec sec-space pt-lg-0">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 text-center title-wrap-20">

                <h2>Products</h2>

            </div>

            <div class="col-12">

                <div class="swiper pro_slider">

                    <div class="slider-nav-style pt-0">

                        <div class="button-prev slide-left">

                            <svg xmlns="http://www.w3.org/2000/svg" width="23.614" height="14.498" viewBox="0 0 23.614 14.498">
                                <g id="Component_47_37" data-name="Component 47 – 37" transform="translate(1.414 0.707)">
                                    <g id="Group_1246" data-name="Group 1246" transform="translate(302.271 44.042) rotate(180)">
                                        <path id="Path_5233" data-name="Path 5233" d="M4819.182-4136.214l-6.542-6.542,6.542-6.542" transform="translate(5114.91 -4105.256) rotate(180)" fill="none" stroke="#F74225" stroke-miterlimit="10" stroke-width="2"></path>
                                        <path id="Path_5234" data-name="Path 5234" d="M302.266,37.5H280.607" transform="translate(-0.537)" fill="none" stroke="#F74225" stroke-width="2"></path>
                                    </g>
                                </g>
                            </svg>

                        </div>

                        <div class="button-next slide-right">

                            <svg xmlns="http://www.w3.org/2000/svg" width="23.614" height="14.498" viewBox="0 0 23.614 14.498">
                                <g id="Component_47_87" data-name="Component 47 – 87" transform="translate(22.2 13.791) rotate(180)">
                                    <g id="Group_1246" data-name="Group 1246" transform="translate(302.271 44.042) rotate(180)">
                                        <path id="Path_5233" data-name="Path 5233" d="M4819.182-4136.214l-6.542-6.542,6.542-6.542" transform="translate(5114.91 -4105.256) rotate(180)" fill="none" stroke="#F74225" stroke-miterlimit="10" stroke-width="2"></path>
                                        <path id="Path_5234" data-name="Path 5234" d="M302.266,37.5H280.607" transform="translate(-0.537)" fill="none" stroke="#F74225" stroke-width="2"></path>
                                    </g>
                                </g>
                            </svg>

                        </div>

                    </div>

                    <div class="swiper-wrapper">

                        <div class="swiper-slide cursor-view">

                            <a class="{{ Route::is('brushes') ? 'active' : '' }}" href="{{ route('brushes') }}">

                                <div class="pro_slider-item-overlay"></div>

                                <div class="pro_slider-item-product_img">

                                    <img src="{{ asset('frontend') }}/assets/images/product_img1.jpg" alt="Products Image">

                                </div>

                                <div class="pro_slider-item-content">

                                    <div class="pro_slider-item-title">Brushes</div>

                                    <div class="pro_slider-item-btn"><img src="{{ asset('frontend') }}/assets/svg/right-arrow-white.svg" alt="Right Arrow"></div>

                                </div>

                            </a>

                        </div>

                        <div class="swiper-slide cursor-view">

                            <a class="{{ Route::is('components') ? 'active' : '' }} pro_slider-item" href="{{ route('components') }}">

                                <div class="pro_slider-item-overlay"></div>

                                <div class="pro_slider-item-product_img">

                                    <img src="{{ asset('frontend') }}/assets/images/product_img2.jpg" alt="Products Image">

                                </div>

                                <div class="pro_slider-item-content">

                                    <div class="pro_slider-item-title">Components</div>

                                    <div class="pro_slider-item-btn"><img src="{{ asset('frontend') }}/assets/svg/right-arrow-white.svg" alt="Right Arrow"></div>

                                </div>

                            </a>

                        </div>

                        <div class="swiper-slide cursor-view">

                            <a class="{{ Route::is('canvas') ? 'active' : '' }} pro_slider-item" href="{{ route('canvas') }}">

                                <div class="pro_slider-item-overlay"></div>

                                <div class="pro_slider-item-product_img">

                                    <img src="{{ asset('frontend') }}/assets/images/product_img4.jpg" alt="Products Image">

                                </div>

                                <div class="pro_slider-item-content">

                                    <div class="pro_slider-item-title">Canvases</div>

                                    <div class="pro_slider-item-btn"><img src="{{ asset('frontend') }}/assets/svg/right-arrow-white.svg" alt="Right Arrow"></div>

                                </div>

                            </a>

                        </div>

                        <div class="swiper-slide cursor-view">

                            <a class="{{ Route::is('artAccessories') ? 'active' : '' }} pro_slider-item" href="{{ route('artAccessories') }}">

                                <div class="pro_slider-item-overlay"></div>

                                <div class="pro_slider-item-product_img">

                                    <img src="{{ asset('frontend') }}/assets/images/product_img3.jpg" alt="Products Image">

                                </div>

                                <div class="pro_slider-item-content">

                                    <div class="pro_slider-item-title">Art Accessories</div>

                                    <div class="pro_slider-item-btn"><img src="{{ asset('frontend') }}/assets/svg/right-arrow-white.svg" alt="Right Arrow"></div>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Initiatives -->

<section class="sec-space pt-0">

    <div class="init_sec-title text-center">

        <h2>Initiatives</h2>

    </div>

    <div class="init_sec">

        <div class="container">

            <div class="row align-items-center pb-5">

                <div class="col-lg-5 spacing-r-md-70" data-scroll data-scroll-speed="1">

                    <h3 class="title-wrap-20">Green Initiatives</h3>

                    <p>The company takes a comprehensive approach to sustainability and environment protection. This is a continuous process where this is aligned with our vision to continuously improve our raw materials, production processes and eco-friendly initiatives. We are proud to meet several international compliances.</p>

                    <!-- <div class="initiatives-read-more">

							<a href="green-initatives.php" class="btn btn-secondary mt-2">Read More</a>

						</div> -->

                </div>

                <div class="col-lg-7">

                    <div data-scroll data-scroll-speed="1">

                        <img src="{{ asset('frontend') }}/./assets/images/green-iniative-1.jpg" alt="green" />

                    </div>

                </div>

            </div>

            <div class="row align-items-center flex-column-reverse flex-lg-row mt-4">

                <div class="col-lg-7">

                    <div data-scroll data-scroll-speed="1" class="pb-3 pb-md-0">

                        <img src="{{ asset('frontend') }}/./assets/images/corporate.jpg" alt="corporate" width="100%" />

                    </div>

                </div>

                <div class="col-lg-5 spacing-l-md-70" data-scroll data-scroll-speed="1">

                    <h3 class="title-wrap-20">Corporate Social Responsibilities</h3>

                    <p>Indeutsch, a beacon of change, sponsors Apna School in Greater Noida, supporting 900 children with their education. We also carryout out other initiatives such as providing solar street lights in village, free bicycle to students etc.</p>

                    <!-- <div class="initiatives-read-more">

								<a href="#" class="btn btn-secondary mt-2">Read More</a>

						    </div> -->

                </div>

            </div>

        </div>

    </div>

</section>



<!-- Contact Us -->

<section class="sec-space pt-0">

    <div class="container">

        <div class="row">

            <div class="footer-connect" data-scroll data-scroll-speed="1">

                <div>

                    <h2 class="text-white mb-3 mb-md-0"><b>Connect</b> With Us</h2>

                </div>

                <div class="footer-connect-right">

                    <a href="{{route('contactUs')}}" class="custom-button custom-button-bg-white">Let's Connect</a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Certificate Modal -->

<div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">

    <div class="modal-dialog">

        <div class="modal-content">

            <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>

            <div class="modal-body">

                <iframe id="pdfViewer" style="width:600px; height:500px;" frameborder="0"></iframe>

            </div>

        </div>

    </div>

</div>
@endsection