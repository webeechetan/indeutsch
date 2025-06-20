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
											<div class="product-category-list active" id="manufacturing-division">
												<span class='bx bx-chevrons-right'></span>
												<span>Manufacturing Division</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="ferrules">
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
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="handles">
												<span class='bx bx-chevrons-right'></span>
												<span>Handles</span>
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
						<!-- <li><a href="{{route('artistCanvas')}}">Artist Canvas</a></li> -->
						<li><a href="{{route('artAccessories')}}">Art Accessories</a></li>
						<li><a href="{{route('canvas')}}">Canvas</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="product-category-tab">
					<ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-manufacturing-division-tab" data-bs-toggle="pill"
								data-bs-target="#pills-manufacturing-division" type="button" role="tab"
								aria-controls="pills-manufacturing-division" aria-selected="true">Manufacturing Division</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-ferrules-tab" data-bs-toggle="pill"
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
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-handles-tab" data-bs-toggle="pill"
								data-bs-target="#pills-handles" type="button" role="tab"
								aria-controls="pills-handles" aria-selected="false">Handles</button>
						</li>
					</ul>
					<div class="tab-content" id="components-pills-tabContent">
						<div class="tab-pane fade show active" id="pills-manufacturing-division" role="tabpanel"
							aria-labelledby="pills-manufacturing-division-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container" id="manufacturing-division-pad">
											<!-- <div class="zoom-img-container"> -->
											<img src="https://indeutsch.com/frontend/assets/images/products/components/manufacturing-division.png" loading="lazy" alt="manufacturing-division" id="ms-featured-img" class="ms-featured-img">
											<!-- </div> -->
											<!-- <div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/manufacturing-division.png" alt="manufacturing-division" class="ms-thumbnail" onclick="changeImage(this)">
											</div> -->
										</div>
									</div>
								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class="mb-2"><span>Components<span>></span> </span> Manufacturing Division</h6>
											<h2 class="mt-4 fw-bold">Manufacturing <span class="text-accent fw-bold"> Division</span></h2>
										</div>
										<p>We have a separate Component manufacturing plant, with a facility to manufacture different types of Ferrules for Brushes (Artist, Cosmetic and Industrial) and Components for makeup packaging. </p>
										<p>We have a well-equipped In-house Tool Room where we develop machines, tools, dies and fixtures required for component manufacturing. This technical centre is equipped with CAD/CAM technology that enables us to design and develop high precision components in the least possible time. </p>
										<p>We have an in-house Pipe drawing plant that can draw Brass and Aluminium Pipes from diameters as small as 2mm to large diameters such as 35 mm. This provides the required input for our components division.</p>
										<strong>Certification : </strong>
										<p><small>
												All our components are REACH/ CPSIA compliant.
												All wood components used in manufacturing are FSC certified.</small></p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-ferrules" role="tabpanel"
							aria-labelledby="pills-ferrules-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<div class="zoom-img-container">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/brass-aluminium.png" loading="lazy" alt="brass-aluminium" id="ms-featured-img" class="ms-featured-img">
											</div>
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/brass-aluminium.png" alt="brass-aluminium" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/brass-aluminium2.png" alt="brass-aluminium" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/brass-aluminium3.png" alt="brass-aluminium" class="ms-thumbnail" onclick="changeImage(this)">
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
										<p>Different Finishes which we can offer are :</p>
										<p><strong>Brass –</strong> Nickel plated, Chrome Plated, Matt Nickel, Matt Chrome, Gold Plated (24 Carat) and lacquered ferrules in different colours.</p>
										<p><strong>Aluminium –</strong> Silver Anodised, Gold Anodised, Matt Silver, Matt Gold, Copper, Red, Blue, Green (both in Glossy and Matt finishes)</p>
										<p>We have a fully functional effluent treatment plant where we treat all the waste water from our Plating and Anodising sections.</p>
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
											<div class="zoom-img-container">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/packaging.png" loading="lazy" alt="packaging" id="ms-featured-img" class="ms-featured-img">
											</div>
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/packaging.png" alt="packaging" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/packaging2.png" alt="packaging" class="ms-thumbnail" onclick="changeImage(this)">
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
											<div class="zoom-img-container">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/precision-components.png" loading="lazy" alt="precision-components" id="ms-featured-img" class="ms-featured-img">
											</div>
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/precision-components.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/precision-components2.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/precision-components3.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/precision-components4.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
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
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-handles" role="tabpanel"
							aria-labelledby="pills-handles-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<div class="zoom-img-container">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/handle.png" loading="lazy" alt="precision-components" id="ms-featured-img" class="ms-featured-img">
											</div>
											<div class="ms-thumbnails" style="margin-top: 20px;">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/handle.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/handle2.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/components/handle3.png" alt="precision-components" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class="mb-2"><span>Components<span>></span> </span> Handles</h6>
											<h2 class="mt-4 fw-bold">Handles<span class="text-accent fw-bold"> </span></h2>
										</div>
										<div class="content-preview">
											<p>Our skilled employees give highest emphasis on dimensional accuracy of handles and its component. All handles are
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