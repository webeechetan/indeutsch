@extends('frontend.layouts.app')
@section('content')
  <!-- Product Banner  -->
	<section class="product-banner4">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title-wrap-20">Art Accessories</h2>
					<p>Enjoying a good reputation with a large number of buyers, Indeutsch products can be found
						in
						North America, almost all European countries, Australia, New Zealand, Middle East Asia,
						Latin
						America and other parts of the world.
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
												<div class="product-category-list active" id="aprons">
													<span class='bx bx-chevrons-right'></span>
													<span>Aprons</span>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<div class="product-category-list" id="bags">
													<span class='bx bx-chevrons-right'></span>
													<span>Brush Wraps & Bags</span>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<div class="product-category-list" id="knives">
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
								<button class="nav-link active" id="pills-aprons-tab" data-bs-toggle="pill"
									data-bs-target="#pills-aprons" type="button" role="tab"
									aria-controls="pills-aprons" aria-selected="true">Aprons</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-bags-tab" data-bs-toggle="pill"
									data-bs-target="#pills-bags" type="button" role="tab"
									aria-controls="pills-bags" aria-selected="false">Brush Wraps & Brush
									Bags</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-knives-tab" data-bs-toggle="pill"
									data-bs-target="#pills-knives" type="button" role="tab"
									aria-controls="pills-knives" aria-selected="false"> Painting Knives</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-easels-tab" data-bs-toggle="pill"
									data-bs-target="#pills-easels" type="button" role="tab"
									aria-controls="pills-easels" aria-selected="false"> Easels</button>
							</li>
						</ul>
						<div class="tab-content" id="components-pills-tabContent">
							<div class="tab-pane fade show active" id="pills-aprons" role="tabpanel"
								aria-labelledby="pills-aprons-tab">
								<div class="row">
									<div class="col-md-4 mb-3">
										<div class="product-category-image">
											<img src="{{ asset('frontend') }}/assets/images/water-color.jpg"
												alt="water color brushes">
											<div class="product-category-content">
												<p class="product-category-title mb-0">Water Color <span
														class="fw-bold">Brushes</span></p>
												<a href="./water-color.php" type="button"
													class="btn btn-product">View
													Product</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 mb-3">
										<div class="product-category-image">
											<img src="{{ asset('frontend') }}/assets/images/oil-brushes.jpg"
												alt="water color brushes">
											<div class="product-category-content">
												<p class="product-category-title mb-0">Oil<span
														class="fw-bold">Brushes</span></p>
												<a type="button" class="btn btn-product">View
													Product</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 mb-3">
										<div class="product-category-image">
											<img src="{{ asset('frontend') }}/assets/images/Arcylic-brushes.jpg"
												alt="water color brushes">
											<div class="product-category-content">
												<p class="product-category-title mb-0">Arcylic<span
														class="fw-bold">Brushes</span></p>
												<a type="button" class="btn btn-product">View
													Product</a>
											</div>
										</div>
									</div>
									<div class="col-md-4 mb-3">
										<div class="product-category-image">
											<img src="{{ asset('frontend') }}/assets/images/multimedia-brushes.jpg"
												alt="water color brushes">
											<div class="product-category-content">
												<p class="product-category-title mb-0">Multimedia<span
														class="fw-bold">Brushes</span></p>
												<a type="button" class="btn btn-product">View
													Product</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-bags" role="tabpanel"
								aria-labelledby="pills-bags-tab">...</div>
							<div class="tab-pane fade" id="pills-knives" role="tabpanel"
								aria-labelledby="pills-knives-tab">
								...
							</div>
							<div class="tab-pane fade" id="pills-easels" role="tabpanel"
								aria-labelledby="pills-easels-tab">
								...
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection