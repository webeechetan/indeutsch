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
												<span>Studio Easel –H type</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="easels">
												<span class='bx bx-chevrons-right'></span>
												<span>Lyre Easel- A Type</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="easels">
												<span class='bx bx-chevrons-right'></span>
												<span>Field Folding Easel</span>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="product-category-list" id="easels">
												<span class='bx bx-chevrons-right'></span>
												<span>Table Top Easel</span>
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
						<!-- <li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-painting-knives-tab" data-bs-toggle="pill"
								data-bs-target="#pills-painting-knives" type="button" role="tab"
								aria-controls="pills-painting-knives" aria-selected="false"> Painting Knives</button>
						</li> -->
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-easels-tab-h-type" data-bs-toggle="pill"
								data-bs-target="#pills-easels-h-type" type="button" role="tab"
								aria-controls="pills-easels-h-type" aria-selected="false"> Studio Easel –H type</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-easels-tab-a-type" data-bs-toggle="pill"
								data-bs-target="#pills-easels-a-type" type="button" role="tab"
								aria-controls="pills-easels-a-type" aria-selected="false"> Lyre Easel- A Type</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-easels-tab-folding-easel" data-bs-toggle="pill"
								data-bs-target="#pills-easels-folding-easel" type="button" role="tab"
								aria-controls="pills-easels-folding-easel" aria-selected="false"> Field Folding Easel</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-easels-tab-top-easel" data-bs-toggle="pill"
								data-bs-target="#pills-easels-top-easel" type="button" role="tab"
								aria-controls="pills-easels-top-easel" aria-selected="false"> Table Top Easel</button>
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
											<div class="zoom-img-container">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/travel-bags.png" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/travel-bags.png" alt="travel bags" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/travel-img2.png" alt="travel bags" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Travel Bags</h6>
											<h2 class="mt-4 fw-bold">Travel<span class="text-accent fw-bold"> Bags</span></h2>
										</div>
										<p>These versatile travel bag features a modular interior with
											adjustable compartments, allowing artists to store a wide range
											of essentials – brushes, paints, palettes, and paper pads – for
											watercolor, oil and acrylic painting. Crafted from durable 100%
											cotton in various colors.</p>
										<p>These bag offers a stylish and functional solution for artists on
											the go. The clean & sleek design provides ample space for
											branding, making it perfect for private label brands.</p>
										<!-- Enquire Now Button -->
										<!-- <div class="d-grid mt-5">
											<button class="btn btn-new btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <span class="bx bx-phone me-2"></span>Enquire Now</button>
										</div> -->
										<!-- Modal -->
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-bags" role="tabpanel"
							aria-labelledby="pills-bags-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/portfolio-img.png" loading="lazy" alt="portfolio bag" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/portfolio-img.png" alt="portfolio bag" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Portfolio Bag</h6>
											<h2 class="mt-4 fw-bold">Portfolio<span class="text-accent fw-bold"> Bag</span></h2>
										</div>
										<p>We manufacture and design portfolio bag which
											provides secure and convenient transportation for
											a variety of artwork sizes, including canvases.
											Constructed from high-quality, water-resistant
											polyester to safeguard artwork from dust,
											moisture, and minor impacts. This lightweight and
											foldable design allows for easy transportation</p>
										<p>
											While ideal for canvases, this versatile bag can
											also accommodate other art supplies, offering a
											convenient storage solution for artists and can be
											made in different variety of colors, sizes and
											materials.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-brush-case" role="tabpanel"
							aria-labelledby="pills-brush-case-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/brush-cases.png" loading="lazy" alt="Brush case" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/brush-cases.png" alt="Brush case" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Brush Case</h6>
											<h2 class="mt-4 fw-bold">Brush<span class="text-accent fw-bold"> Case</span></h2>
										</div>
										<p>Indeutsch manufactures brush cases which are
											designed in a way to effectively protect and
											organize your brushes while ensuring easy
											portability. Interior is designed to convert as a
											brush stand. These cases can be designed to
											accommodate brushes as per your requirement.
											They can be crafted from materials like
											–cotton/polyester etc.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-brush-wraps" role="tabpanel"
							aria-labelledby="pills-brush-wraps-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/brush-wraps.png" loading="lazy" alt="Brush wraps" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/brush-wraps.png" alt="Brush wraps" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/brush-wraps2.png" alt="Brush wraps" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/brush-wraps3.png" alt="Brush wraps" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Brush Wraps</h6>
											<h2 class="mt-4 fw-bold">Brush<span class="text-accent fw-bold"> Wraps</span></h2>
										</div>
										<p>We offer a stylish and compact solution for storing
											and transporting your favorite brushes. Indeutsch
											Brush Wraps are a testament to our commitment
											to quality, convenience, and style.</p>
										<p>These can be made with a variety of materials like
											Cotton, Polyester and in Luxurious Synthetic
											leather. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-pencil-case" role="tabpanel"
							aria-labelledby="pills-pencil-case-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/pencil-cases.png" loading="lazy" alt="Pencil Case" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/pencil-cases.png" alt="Pencil Case" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/pencil-cases2.png" alt="Pencil Case" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Pencil Cases</h6>
											<h2 class="mt-4 fw-bold">Pencil<span class="text-accent fw-bold"> Cases</span></h2>
										</div>
										<p>We offer a range of high-quality pencil cases,
											perfect for artists, designers, and anyone who
											needs to keep their pencils safely stored and easily
											accessible.</p>

										<p>Indeutsch pencil cases complement any artistic
											style, making them a pleasure to carry and use.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-apron" role="tabpanel"
							aria-labelledby="pills-apron-tab">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/aprons.png" loading="lazy" alt="Aprons" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/aprons.png" alt="Aprons" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/aprons2.png" alt="Aprons" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Aprons</h6>
											<h2 class="mt-4 fw-bold">Aprons<span class="text-accent fw-bold"> </span></h2>
										</div>
										<p>Indeutsch offers a wide range of high-
											quality aprons . Our aprons are designed
											to meet the needs of both professional
											and aspiring artists, providing:
											unmatched functionality and comfort.</p>
										<p>
											Our aprons come in a variety of styles to
											complement different artistic
											preferences.
										</p>
										<p>
											We take pride in using high-quality
											materials and expert craftsmanship.
										</p>
										<p>
											We offer a smooth onboarding process
											for integrating Indeutsch aprons into
											your brand.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-easels-h-type" role="tabpanel"
							aria-labelledby="pills-easels-h-type">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/studio-easel.png" loading="lazy" alt="Studio Easel –H type" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/studio-easel.png" alt="Studio Easel –H type" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/studio-easel2.png" alt="Studio Easel –H type" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Studio Easel – H type</h6>
											<h2 class="mt-4 fw-bold">Studio Easel –<p class="text-accent fw-bold"> H type</p>
											</h2>
										</div>
										<p>Material:- Beech wood/Pinewood</p>
										<p>Finish- Natural/Colored</p>
										<p>Canvas Height Up to : 130cm (51 inches)</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-easels-a-type" role="tabpanel"
							aria-labelledby="pills-easels-a-type">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/lyre-easel.png" loading="lazy" alt="Lyre Easel - A Type" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/lyre-easel.png" alt="Lyre Easel - A Type" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/lyre-easel2.png" alt="Lyre Easel - A Type" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Lyre Easel - A Type</h6>
											<h2 class="mt-4 fw-bold">Lyre Easel -<p class="text-accent fw-bold"> A Type </p>
											</h2>
										</div>
										<p>Material:- Beech wood/Pinewood
										</p>
										<p>Finish- Natural/Colored</p>
										<p>Canvas Height Up to : 125cm (49 inches)</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-easels-folding-easel" role="tabpanel"
							aria-labelledby="pills-easels-folding-easel">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/folding-easel.png" loading="lazy" alt="Field Folding Easel" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/folding-easel.png" alt="Field Folding Easel" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/folding-easel2.png" alt="Field Folding Easel" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Field Folding Easel</h6>
											<h2 class="mt-4 fw-bold">Field Folding <span class="text-accent fw-bold">Easel </span></h2>
										</div>
										<p>Material:- Beech wood/Pinewood</p>
										<p>Finish- Natural/Colored</p>
										<p>Canvas Height Up to : 118cm(46 inches)</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-easels-top-easel" role="tabpanel"
							aria-labelledby="pills-easels-top-easel">
							<div class="row">
								<div class="col-md-6">
									<div class="ms-product-img">
										<div class="ms-product-img-container">
											<!-- Large Image -->
											<div class="zoom-img-container">
											<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/top-easel.png" loading="lazy" alt="Table Top Easel" id="ms-featured-img" class="ms-featured-img">
											</div>
											<!-- Thumbnails -->
											<div class="ms-thumbnails">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/top-easel.png" alt="Table Top Easel" class="ms-thumbnail" onclick="changeImage(this)">
												<img src="https://indeutsch.com/frontend/assets/images/products/art-accessories/top-easel2.png" alt="Table Top Easel" class="ms-thumbnail" onclick="changeImage(this)">
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-6 ps-md-5">
									<div class="product-content">
										<div class="product-content-title">
											<h6 class=" mb-2"><span>Art Accessories<span>></span> </span> Table Top Easel</h6>
											<h2 class="mt-4 fw-bold">Table <span class="text-accent fw-bold">Top Easel </span></h2>
										</div>
										<p>Material:- Beech wood/Pinewood</p>
										<p>Finish- Natural/Colored</p>
										<p>Canvas Height Up to : 58cm(23 inches)</p>
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