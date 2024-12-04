@extends('frontend.layouts.app')
@section('content')

<!-- Hero Section -->
	<section class="pt-2 pt-lg-0">
		<div class="hero-inner">
			<figure class="mb-0">
				<img src="{{ asset('frontend') }}/assets/images/about-banner.jpg" width="100%" alt="About Banner">
			</figure>
			<div class="bg-overlay opc_05"></div>
			<div class="hero-inner-content">
				<div class="container">
					<h2 class="title-big font-weight-300">About <b class="text-accent">Us</b></h2>
				</div>
			</div>
		</div>
	</section>

	<!-- About Us -->
	<section class="sec-space">
		<div class="container">
			<div class="row align-items-center flex-column-reverse flex-lg-row ">
				<div class="col-lg-6">
					<figure class="img_dot img_dot-left is-inview">
						<img src="{{ asset('frontend') }}/assets/images/who-we-are.jpg" class="img-responsive" alt="" width='100%'>
					</figure>
				</div>
				<div class="col-lg-6 ps-lg-5 pb-5 pb-lg-0">
					<h2 class="title-wrap-30 font-weight-300">Who We<b class="text-accent"> Are?</b></h2>
					<p>Indeutsch Industries came into existence in the late 1980s. The journey from supplying aluminium ferrules to becoming one of the best manufacturers of artist and cosmetic brushes has been filled with accomplishments.</p>
					<p>Enjoying a good reputation with a large number of customers, Indeutsch products can be found worldwide which includes North America, Europe, Australia, New Zealand, Middle East etc. </p>
					<p class="mb-0">Our company is extremely conscious of the environment. This is reflected in the raw material used and production processes. Indeutsch carries an array of various certifications for e.g. FSC certification, C-TPAT, ISO 9001, ISO14001, PEFC etc.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- President Section -->
	<!-- <section class="sec-space pt-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 pe-md-5">
					<h4 class="title-wrap-20 font-weight-300">Lorem Ipsum , <b class="text-accent">President</b>
					</h4>
					<p>Enjoying a good reputation with a large number of buyers, Indeutsch products can be found
						in North America, almost all European countries, Australia, New Zealand, Middle East
						Asia, Latin America and other parts of the world.</p>
					<p>Our company is extremely conscious of the environment - all the wood that's used for
						handle production is drawn from plantations that are re-grown and are approved for use
						by CITES. All the paints used are non-toxic in nature and conform to European and
						American safety standards</p>
					<p>We have technical and manufacturing expertise to produce and develop brushes, ferrules,
						and handles in any shape and size as per requirement. All components are produced under
						one roof. We have a well equipped in-house tool room where we develop machines, tools,
						dies, and fixtures required for brush manufacturing. We also have the capability to
						develop customized packaging for brushes in line with customers’ needs. </p>
					<p>We can offer artist and cosmetic brushes in any size and shape. The brushes can be made
						with select natural hairs, synthetic filaments or their mixtures depending upon the
						specific needs of the customer. Synthetic filaments can also be developed in any colour.
						In short, a brush can be customized as per the specifications provided by the customer
						and their price point.</p>
				</div>
				<div class="col-lg-5 text-center">
					<div class="pres_quote">
						<figure class="ani_img img_dot img_dot-right is-inview" data-scroll
							data-scroll-speed="-0.5">
							<img src="assets/images/president_profile.jpg" class="w-100 img-responsive" alt="">
						</figure>
					</div>

				</div>
			</div>
		</div>
	</section> -->

	<!-- Vision & Mission -->
	<section  class="sec-space pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-4 mb-lg-0">
					<div class="vision-box" data-scroll data-scroll-speed="0.5">
						<div class="vision-content">
							<h2 class="title-wrap-20 font-weight-300">Our <b class="text-accent">Vision</b></h2>
							<p>We want to become a globally recognized player with a strong national presence, and our commitment to legal principles and environmental concerns. Our vision is to enhance the self-esteem of our users through diverse
								products and assist Indian companies in sourcing precision components. We also
								aim to inspire creativity by encouraging users to create art, enriching human
								life through an elevated sense of aesthetics. Crucially, we provide a supportive
								environment for our employees, fostering talent and instilling pride in their
								contributions. Our journey is not just about products; it's a commitment to
								positive impact and enduring pride.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="vision-box" data-scroll data-scroll-speed="0.5">
						<div class="vision-content">
							<h2 class="title-wrap-20 font-weight-300">Our <b class="text-accent">Mission</b>
							</h2>
							<!-- <p>Our commitment is to deliver top-notch products, exceed customer expectations, and contribute positively to the various industries and the environment.</p> -->
							<p>Our mission is to be the top supplier of aesthetic products, including cosmetic brushes, art materials, and precision components. We aim to lead in private labeling, cater to diverse customer needs, and constantly innovate in design and delivery. Using efficient sales channels, sustainability is our foremost priority towards the environment. Our commitment is to deliver top-notch products, exceed customer expectations, and contribute positively to the various industries and the environment.</p>
						</div>
					</div>
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
                                    <div class="swiper-slide"><div>1987</div></div>
                                    <div class="swiper-slide"><div>1989</div></div>
                                    <div class="swiper-slide"><div>1991</div></div>
                                    <div class="swiper-slide"><div>1993</div></div>
                                    <div class="swiper-slide"><div>1995</div></div>
                                    <div class="swiper-slide"><div>1997</div></div>
                                    <div class="swiper-slide"><div>2002</div></div>
                                    <div class="swiper-slide"><div>2004</div></div>
                                    <div class="swiper-slide"><div>2009</div></div>
                                    <div class="swiper-slide"><div>2010</div></div>
                                    <div class="swiper-slide"><div>2014</div></div>
                                    <div class="swiper-slide"><div>2016</div></div>
                                    <div class="swiper-slide"><div>2017</div></div>
                                    <div class="swiper-slide"><div>2020</div></div>
                                    <div class="swiper-slide"><div>2022</div></div>
                                    <div class="swiper-slide"><div>2023</div></div>
                                </div>
                            </div>
                            <div class="swiper story-slider-main swiper-slider-overflow">
                                <div class="slider-nav-style">
                                    <div class="button-prev slide-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.614" height="14.498" viewBox="0 0 23.614 14.498"><g id="Component_47_37" data-name="Component 47 – 37" transform="translate(1.414 0.707)">    <g id="Group_1246" data-name="Group 1246" transform="translate(302.271 44.042) rotate(180)"><path id="Path_5233" data-name="Path 5233" d="M4819.182-4136.214l-6.542-6.542,6.542-6.542" transform="translate(5114.91 -4105.256) rotate(180)" fill="none" stroke="#F74225" stroke-miterlimit="10" stroke-width="2"></path><path id="Path_5234" data-name="Path 5234" d="M302.266,37.5H280.607" transform="translate(-0.537)" fill="none" stroke="#F74225" stroke-width="2"></path></g></g></svg>
                                    </div>
                                    <div class="button-next slide-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.614" height="14.498" viewBox="0 0 23.614 14.498">  <g id="Component_47_87" data-name="Component 47 – 87" transform="translate(22.2 13.791) rotate(180)">    <g id="Group_1246" data-name="Group 1246" transform="translate(302.271 44.042) rotate(180)">      <path id="Path_5233" data-name="Path 5233" d="M4819.182-4136.214l-6.542-6.542,6.542-6.542" transform="translate(5114.91 -4105.256) rotate(180)" fill="none" stroke="#F74225" stroke-miterlimit="10" stroke-width="2"></path>      <path id="Path_5234" data-name="Path 5234" d="M302.266,37.5H280.607" transform="translate(-0.537)" fill="none" stroke="#F74225" stroke-width="2"></path>    </g>  </g></svg>
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
                                                <img src="{{ asset('frontend') }}/assets/images/school-brushes.png" alt="Indeutsch | Story Image">
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
                                                <img src="{{ asset('frontend') }}/assets/images/artist-brushes.png" alt="Indeutsch | Story Image"> 
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

@endsection