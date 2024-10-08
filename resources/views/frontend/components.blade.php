@extends('frontend.layouts.app')
@section('content')
<!-- Product Banner  -->
<section class="product-banner1">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="title-wrap-20">Components</h2>
				<p>We have a separate Component manufacturing plant, with a facility to manufacture different types of Ferrules for Brushes (Artist, Cosmetic and Industrial) and Components for makeup packaging.</p>
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
								data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Components
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
							data-bs-parent="#accordionCategory">
							<div class="accordion-body">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list active" id="ferrules">
												<span class='bx bx-chevrons-right'></span>
												<span>Ferrules</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="makeup-packaging">
												<span class='bx bx-chevrons-right'></span>
												<span>Makeup Packaging</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="precision">
												<span class='bx bx-chevrons-right'></span>
												<span>Precision Components</span>
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
						<li><a href="{{route('artistCanvas')}}">Artist Canvas</a></li>
						<li><a href="{{route('artAccessories')}}">Art Accessories</a></li>
						<li><a href="printingcanvas.php">Printing Canvas</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-category-tab">
					<ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-ferrules-tab" data-bs-toggle="pill"
								data-bs-target="#pills-ferrules" type="button" role="tab"
								aria-controls="pills-ferrules" aria-selected="true">Ferrules</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-makeup-packaging-tab" data-bs-toggle="pill"
								data-bs-target="#pills-makeup-packaging" type="button" role="tab" aria-controls="pills-makeup-packaging"
								aria-selected="false">Makeup Packaging</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-precision-tab" data-bs-toggle="pill"
								data-bs-target="#pills-precision" type="button" role="tab"
								aria-controls="pills-precision" aria-selected="false">Precision Components</button>
						</li>
					</ul>
					<div class="tab-content" id="components-pills-tabContent">
						<div class="tab-pane fade show active" id="pills-ferrules" role="tabpanel"
							aria-labelledby="pills-ferrules-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/brass-aluminium.png" loading="lazy" alt="brass-aluminium" id="ms-featured-img" class="ms-featured-img">
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/brass-aluminium.png" alt="brass-aluminium" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/brass-aluminium2.png" alt="brass-aluminium" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/brass-aluminium3.png" alt="brass-aluminium" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class="mb-2"><span>Components<span>></span> </span> Ferrules</h6>
											<h2 class="mt-4 fw-bold">Ferrules<span class="text-accent fw-bold"> </span></h2>
										</div>
										<div class="content-preview">
											<p>We have an in-house Pipe drawing plant that can draw Brass and Aluminium Pipes from diameters as small as 2mm to large diameters such as 35 mm. This provides the required input for our components division.</p>
											<p>Our installed capacity is around 5 million components per month which includes Brass and Aluminium. We are producing these components with close tolerances (+/- 0.05 mm in diameter and +/- 0.5 mm in length).</p>
											<p>We can offer components in Cylindrical, Conical, Semi-Conical, Fan, Triangular and Square shapes.</p>
											<p>Different Finishes which we can offer are :</p>
											<button class="read-more" onclick="toggleContent()">Read More</button>
										</div>
										<div class="content-full" style="display:none;">
											<p><strong>Brass –</strong> Nickel plated, Chrome Plated, Matt Nickel, Matt Chrome, Gold Plated (24 Carat) and lacquered ferrules in different colours.</p>
											<p><strong>Aluminium –</strong> Silver Anodised, Gold Anodised, Matt Silver, Matt Gold, Copper, Red, Blue, Green (both in Glossy and Matt finishes)</p>
											<p>We have a fully functional effluent treatment plant where we treat all the waste water from our Plating and Anodising sections.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-makeup-packaging" role="tabpanel"
							aria-labelledby="pills-makeup-packaging-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/packaging.png" loading="lazy" alt="packaging" id="ms-featured-img" class="ms-featured-img">
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/packaging.png" alt="packaging" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class="mb-2"><span>Components<span>></span> </span> Makeup Packaging</h6>
											<h2 class="mt-4 fw-bold">Makeup<span class="text-accent fw-bold"> Packaging</span></h2>
										</div>
										<div class="content-preview">
											<p>We utilized our technical and manufacturing expertise developed over the years to produce Lipstick components like - A-Shell, Stylo-A-Shell, Perfume Cap and Dropper-A-Shell in Aluminium and Brass.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-precision" role="tabpanel"
							aria-labelledby="pills-precision-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/handle.png" loading="lazy" alt="precision-components" id="ms-featured-img" class="ms-featured-img">
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/handle.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/handle2.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class="mb-2"><span>Components<span>></span> </span> Precision Components</h6>
											<h2 class="mt-4 fw-bold">Precision<span class="text-accent fw-bold"> Components</span></h2>
										</div>
										<div class="content-preview">
											<p>We have developed sustainable wooden components for the Makeup Industry.</p>
											<p>We also make metal components for Dental and Pen Industry.</p>
											<p><strong>Handles -</strong> Our skilled employees give highest emphasis on dimensional accuracy of handles and its component. All handles are
												manufactured using state-of-the-art technology and in compliance with European and American Toy Safety standards.
												We offer handles in Wood, Acrylic and in Metal.</p>
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