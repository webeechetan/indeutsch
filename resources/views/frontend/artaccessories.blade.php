@extends('frontend.layouts.app')
@section('content')
<!-- Product Banner  -->
<section class="product-banner4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="title-wrap-20 text-light">Art Accessories</h2>
				<p class="text-light">Indeutsch manufactures a comprehensive line of expertly designed brush bags, portfolio cases etc,
					in a variety of materials and colors to seamlessly integrate with your brand identity. We also produce
					durable and spacious portfolio cases to accommodate a wide range of art supplies. We are capable
					of manufacturing these products as per design and specifications provided by our customers.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Product List -->
<section class="sec-space">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="accordion" id="accordionCategory">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseOne" aria-expanded="true"
								aria-controls="collapseOne">
								Art Accessories
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show"
							aria-labelledby="headingOne" data-bs-parent="#accordionCategory">
							<div class="accordion-body">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list active" id="travel-bags">
												<span class='bx bx-chevrons-right'></span>
												<span>Travel Bags</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="portfolio-bag">
												<span class='bx bx-chevrons-right'></span>
												<span>Portfolio Bag</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="brush-case">
												<span class='bx bx-chevrons-right'></span>
												<span>Brush Case</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="brush-wraps">
												<span class='bx bx-chevrons-right'></span>
												<span>Brush Wraps</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="pencil-case">
												<span class='bx bx-chevrons-right'></span>
												<span>Pencil Case</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="apron">
												<span class='bx bx-chevrons-right'></span>
												<span>Apron</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="painting-knives">
												<span class='bx bx-chevrons-right'></span>
												<span>Painting Knives</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="easels">
												<span class='bx bx-chevrons-right'></span>
												<span>Easels</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-category-otherlist">
					<ul class="list-unstyled">
						<li><a href="{{route('brushes')}}">Brushes</a></li>
						<li><a href="components.php">Components</a></li>
						<li><a href="{{route('artistCanvas')}}">Artist Canvas</a>
						</li>
						<li><a href="printingcanvas.php">Printing Canvas</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-category-tab">
					<ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-travel-bags-tab" data-bs-toggle="pill"
								data-bs-target="#pills-travel-bags" type="button" role="tab"
								aria-controls="pills-travel-bags" aria-selected="true">Travel Bags</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-bags-tab" data-bs-toggle="pill"
								data-bs-target="#pills-bags" type="button" role="tab"
								aria-controls="pills-bags" aria-selected="false">Portfolio Bag</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-brush-case-tab" data-bs-toggle="pill"
								data-bs-target="#pills-brush-case" type="button" role="tab"
								aria-controls="pills-brush-case" aria-selected="false"> Brush Case</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-brush-wraps-tab" data-bs-toggle="pill"
								data-bs-target="#pills-brush-wraps" type="button" role="tab"
								aria-controls="pills-brush-wraps" aria-selected="false"> Brush Wraps</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-pencil-case-tab" data-bs-toggle="pill"
								data-bs-target="#pills-pencil-case" type="button" role="tab"
								aria-controls="pills-pencil-case" aria-selected="false"> Pencil Case</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-apron-tab" data-bs-toggle="pill"
								data-bs-target="#pills-apron" type="button" role="tab"
								aria-controls="pills-apron" aria-selected="false"> Apron</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-painting-knives-tab" data-bs-toggle="pill"
								data-bs-target="#pills-painting-knives" type="button" role="tab"
								aria-controls="pills-painting-knives" aria-selected="false"> Painting Knives</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-easels	-tab" data-bs-toggle="pill"
								data-bs-target="#pills-easels" type="button" role="tab"
								aria-controls="pills-easels" aria-selected="false"> Easels</button>
						</li>
					</ul>
					<div class="tab-content" id="components-pills-tabContent">
						<div class="tab-pane fade show active" id="pills-travel-bags" role="tabpanel"
							aria-labelledby="pills-travel-bags-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<img src="http://localhost:8000/frontend/assets/images/travel-bags.png" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">

											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/travel-bags.png" alt="Watercolor" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/bag-2.webp" alt="Oil Brushes" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/bag-3.webp" alt="Acrylic Brushes" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/bag-4.webp" alt="Multimedia Brushes" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Travel Bags</h6>
											<h2 class="mt-4">Travel<span class="text-accent fw-bold"> Bags</span></h2>
										</div>
										<p>These versatile travel bag features a modular interior with
											adjustable compartments, allowing artists to store a wide range
											of essentials – brushes, paints, palettes, and paper pads – for
											watercolor, oil and acrylic painting. Crafted from durable 100%
											cotton in various colors.</p>
										<p>These bag offers a stylish and functional solution for artists on
											the go. The clean & sleek design provides ample space for
											branding, making it perfect for private label brands.</p>

										<!-- <div class="product-content-description border-top mt-3">
											<div>
												<h6 class="fw-bold mb-3">Color:</h6>
											</div>
											<div class="product-content-color">
												<span class="color-swtaches"></span>
												<span class="color-swtaches2"></span>
												<span class="color-swtaches3"></span>
												<span class="color-swtaches4"></span>
												<span class="color-swtaches5"></span>
											</div>

										</div> -->
										<!-- <div class="product-content-description">
											<div>
												<h6 class="fw-bold">Weight :</h6>
											</div>
											<div>
												<p class="mb-0">1.28 kg</p>
											</div>
										</div> -->
										<div class="d-grid mt-5">
											<button class="btn btn-new btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <span class="bx bx-phone me-2"></span>Enquire Now</button>
										</div>
										<!-- Modal -->
										<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog ">
												<div class="modal-content">
													<div class="modal-header">
														<h6 class="modal-title" id="staticBackdropLabel">Inquiry Details
														</h6>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body p-4">
														<div class="modal-form">
															<form>
																<div class="row">
																	<div class="col-md-6 mb-4">
																		<div class="form-group">

																			<input type="text" class="form-control" id="first-name" placeholder="Enter Your First Name" required="">
																			<label for=""> <span class="bx bx-user me-1"></span>First Name</label>
																		</div>
																	</div>
																	<div class="col-md-6 mb-4">
																		<div class="form-group">
																			<input type="text" class="form-control" id="last-name" placeholder="Enter Your Last Name">
																			<label for=""><span class="bx bx-user me-1"></span>Last Name</label>
																		</div>
																	</div>
																	<div class="col-md-6 mb-4">
																		<div class="form-group">

																			<input type="email" class="form-control" id="email" placeholder="Enter Your Email" required="">
																			<label for=""><span class="bx bx-envelope me-1"></span>Email</label>
																		</div>
																	</div>
																	<div class="col-md-6 mb-4">
																		<div class="form-group">

																			<input type="number" class="form-control" id="number" placeholder="Enter Your Number" required="">
																			<label for=""><span class="bx bx-phone me-1"></span>Phone</label>
																		</div>
																	</div>
																	<div class="col-md-12 mb-4">
																		<div class="form-group">
																			<textarea type="text" id="address" placeholder="Send Message" rows="4"></textarea>
																			<label for=""> <i class="bx bx-message-square-dots me-1"></i>Message</label>
																		</div>
																	</div>
																	<div class="col-md-12">
																		<button class="btn btn-secondary">Send Query</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="product-content-description-bottom">
										<ul class="nav nav-pills" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">Description</button>
											</li>
										</ul>
										<div class="tab-content" id="pills-tabContent">
											<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
												<div class="product-content-description">
													<p>Enjoying a good reputation with a large number of buyers,
														Indeutsch products can be found in North America, almost all
														European countries, Australia, New Zealand, Middle East Asia,
														Latin America and other parts of the world.</p>
													<p>Enjoying a good reputation with a large number of buyers,
														Indeutsch products can be found in North America, almost all
														European countries, Australia, New Zealand, Middle East Asia,
														Latin America and other parts of the world.</p>
													<p class="mb-0">Enjoying a good reputation with a large number of
														buyers, Indeutsch products can be found in North America, almost
														all European countries, Australia, New Zealand, Middle East
														Asia, Latin America and other parts of the world.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-bags" role="tabpanel"
							aria-labelledby="pills-bags-tab">...</div>
						<div class="tab-pane fade" id="pills-brush-case" role="tabpanel"
							aria-labelledby="pills-brush-case-tab">
							...
						</div>
						<div class="tab-pane fade" id="pills-brush-wraps" role="tabpanel"
							aria-labelledby="pills-brush-wraps-tab">
							...
						</div>
						<div class="tab-pane fade" id="pills-pencil-case" role="tabpanel"
							aria-labelledby="pills-pencil-case-tab">
							...
						</div>
						<div class="tab-pane fade" id="pills-apron" role="tabpanel"
							aria-labelledby="pills-apron-tab">
							...
						</div>
						<div class="tab-pane fade" id="pills-painting-knives" role="tabpanel"
							aria-labelledby="pills-painting-knives-tab">
							...
						</div>
						<div class="tab-pane fade" id="pills-easels" role="tabpanel"
							aria-labelledby="pills-easels">
							...
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection