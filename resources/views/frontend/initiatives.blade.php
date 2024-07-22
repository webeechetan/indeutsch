@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Section -->
	<section class="pt-2 pt-lg-0">
		<div class="hero-inner ani_img" data-scroll data-scroll-speed="-0.7">
			<figure class="mb-0">
				<img src="{{ asset('frontend') }}/assets/images/initiatives_hero.jpg" width="100%" alt="Initiatives Banner">
			</figure>
			<div class="bg-overlay opc_05"></div>
			<div class="hero-inner-content" data-scroll data-scroll-speed="-1">
				<div class="container">
					<h2 class="title-big font-weight-300">Initiati<b class="text-accent">ves</b></h2>
				</div>
			</div>
		</div>
	</section>
	<!---  Our Initiatives --->
	<section class="sec-space">
		<div class="init_sec-title text-center">
			<h2>Our Initiatives</h2>
		</div>
		<div class="init_sec">
			<div class="container">
				<div class="row align-items-center pb-5">
					<div class="col-lg-5 spacing-r-md-70" data-scroll data-scroll-speed="1">
						<h3 class="title-wrap-20">Green Initiatives</h3>
						<p>The company takes a comprehensive approach to sustainability and environment protection. This is a continuous process where this is aligned with our vision to continuously improve our raw materials, production processes and eco-friendly initiatives. We are proud to meet several international compliances.</p>
						<div class="initiatives-read-more">
							<a href="{{route('greenInitiatives')}}" class="btn btn-secondary mt-2">Read More</a>
						</div>
					</div>
					<div class="col-lg-7 pt-5 pt-lg-0">
						<div data-scroll data-scroll-speed="1">
							<img src="{{ asset('frontend') }}/assets/images/green-iniative-1.jpg" alt="green"/>
						</div>
					</div>
				</div>
				<div class="row align-items-center flex-column-reverse flex-lg-row mt-4">
					<div class="col-lg-7">
						<div data-scroll data-scroll-speed="1" class="pb-3 pb-md-0">
							<img src="{{ asset('frontend') }}/assets/images/corporate.jpg" alt="corporate" width="100%"/>
						</div>
					</div>
					<div class="col-lg-5 spacing-l-md-70" data-scroll data-scroll-speed="1">
						<h3 class="title-wrap-20">Corporate Social Responsibilities</h3>
						<p>Indeutsch, a beacon of change, sponsors Apna School in Greater Noida, supporting 900 children with their education. We also carryout out other initiatives such as providing solar street lights in village, free bicycle to students etc.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	@endsection