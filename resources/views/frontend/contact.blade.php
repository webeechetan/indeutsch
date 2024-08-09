@extends('frontend.layouts.app')
@section('content')

 	<!-- Hero Section -->

	<!-- <section class="pt-2 pt-lg-0">

		<div class="hero-inner ani_img" data-scroll data-scroll-speed="-0.7">

			<figure class="mb-0">

				<img src="assets/images/contact_hero.jpg" width="100%" alt="Contact Banner">

			</figure>

			<div class="bg-overlay opc_05"></div>

			<div class="hero-inner-content" data-scroll data-scroll-speed="-1">

				<div class="container">

					<h2 class="title-big font-weight-300">Contact <b class="text-accent">Us</b></h2>

				</div>

			</div>

		</div>

	</section> -->

	<!--- Contact Us-->

	<section class="sec-space border-top">

		<div class="container">

			<div class="contact-box">

				<div class="row">

					<div class="col-lg-6 mb-4 mb-lg-0">

						<div class="contact-form">   

							<h2 class="title-wrap-20">Contact Us</h2>
							@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
							@endif

							@if(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>
							@endif

							<!-- <h6 class="mb-4">Let's Connect</h6> -->

							<form action="{{route('contactUs')}}" method="post">
								@csrf

								<div class="row">

									<div class="col-lg-6 mb-4">

										<div class="form-group">
											<input type="text" class="form-control" name="first_name" id="first-name" value="{{ old('first_name') }}" placeholder="Enter Your First Name" required>
											<label for=""> <span class='bx bx-user me-1'></span>First Name</label>
										</div>
										@error('first_name')    
										<div class="text-danger mt-2">{{ $message }}</div>
										@enderror

									</div>

									<div class="col-lg-6 mb-4">
										<div class="form-group">
											<input type="text" class="form-control" name="last_name" id="last-name" value="{{ old('last_name') }}" placeholder="Enter Your Last Name" required>
											<label for=""><span class='bx bx-user me-1'></span>Last Name</label>
										</div>
										@error('last_name')    
										<div class="text-danger mt-2">{{ $message }}</div>
										@enderror
									</div>

									<div class="col-lg-6 mb-4">
										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}" placeholder="Enter Your Email" required>
											<label for=""><span class='bx bx-envelope me-1'></span>Email</label>
										</div>
										@error('email')    
										<div class="text-danger mt-2">{{ $message }}</div>
										@enderror
									</div>

									<div class="col-lg-6 mb-4">
										<div class="form-group">
											<input type="number" class="form-control" name="phone" id="number" value="{{old('phone')}}" placeholder="Enter Your Number" required>
											<label for=""><span class='bx bx-phone me-1'></span>Phone</label>
										</div>
										@error('phone')
										<div class="text-danger mt-2">{{ $message }}</div>
										@enderror
									</div>

									<div class="col-lg-12 mb-4">
										<select name="category" id="category" class="form-select" aria-label="Default select" required>
											<option value="" selected disabled>Select Your Category</option>
											<option value="brushes">Brushes</option>
											<option value="canvas">Canvas</option>
											<option value="components">Components</option>
											<option value="art_accessories">Art Accessories</option>
										</select>
										@error('category')
										<div class="text-danger mt-2">{{ $message }}</div>
										@enderror

										<!-- <select id="subcategory" class="form-select" aria-label="Default select">

											<option selected>Select Your Sub Category</option>

										</select> -->

                                    </div>

								

									<div class="col-lg-12 mb-4">
										<div class="form-group">
											<textarea type="text" name="message" id="address" value="{{ old('message') }}" placeholder="Send Message" rows="4" required></textarea>
											<label for=""> <i class='bx bx-message-square-dots me-1' ></i>Message</label>
										</div>
										@error('message')
										<div class="text-danger mt-2">{{ $message }}</div>
										@enderror
									</div>

									<div class="col-lg-12">

										<Button class="btn btn-secondary" >Connect Us</Button>

									</div>

								</div>

							</form>

						</div>

					</div>

					<div class="col-lg-6">

						<div class="contact-banner">

							<img src="{{ asset('frontend') }}/assets/images/contact_banner.jpg" alt="">

							<div class="contact-content">

								<ul class="list-unstyled mb-0">

									<li class="mb-2"><a href="mailto:indeutsch@outlook.com"><span class="bx bx-location-plus me-2 text-accent"></span> indeutsch@outlook.com</a></li>

									<li class="mb-2"><a href="tel:+91-120-4055800"><span class="bx bx-phone me-2 text-accent"></span> +91-120-4055800</a></li>
									<li class="mb-2"><a href="tel:+91 7986249828"><span class="bx bx-phone me-2 text-accent"></span> +91 7986249828</a></li>

									<li class="d-flex gap-1 align-items-start"><span class="bx bx-envelope me-2 text-accent"></span> Plot 30, Noida Special Economic Zone, Noida 201305, Uttar Pradesh, India</li>

									

								</ul>

							</div>

						</div>



					</div>

				</div>

			</div>

		</div>

	</section>

@endsection
