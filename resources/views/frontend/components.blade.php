@extends('frontend.layouts.app')
@section('content')
  <!-- Product Banner  -->
	<section class="product-banner1">
		<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="title-wrap-20">Components</h2>
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
								<div class="product-category-list" id="handle">
									<span class='bx bx-chevrons-right'></span>
									<span>Handle</span>
								</div>
							</a>
							</li>
							<li>
							<a href="javascript:void(0);">
								<div class="product-category-list" id="cosmetic">
									<span class='bx bx-chevrons-right'></span>
									<span>Cosmetic Components</span>
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
				<li><a href="{{route('brushes')}}">Brushes</a>
				</li>
				<li><a href="canvas.php">Canvas</a></li>
				<li><a href="{{route('artAccessories')}}">Art
						Accessories</a></li>
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
					<button class="nav-link" id="pills-handle-tab" data-bs-toggle="pill"
						data-bs-target="#pills-handle" type="button" role="tab" aria-controls="pills-handle"
						aria-selected="false">Handle</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-cosmetic-tab" data-bs-toggle="pill"
						data-bs-target="#pills-cosmetic" type="button" role="tab"
						aria-controls="pills-cosmetic" aria-selected="false">Cosmetic
						Components</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-precision-tab" data-bs-toggle="pill"
						data-bs-target="#pills-precision" type="button" role="tab"
						aria-controls="pills-precision" aria-selected="false">Precision
						Components</button>
				</li>
				</ul>
				<div class="tab-content" id="components-pills-tabContent">
				<div class="tab-pane fade show active" id="pills-ferrules" role="tabpanel"
					aria-labelledby="pills-precision-tab">
					
				</div>
				<div class="tab-pane fade" id="pills-handle" role="tabpanel"
					aria-labelledby="pills-handle-tab"> <div class="row">
						<div class="col-md-4 mb-3">
							<div class="product-category-image">
							<img src="{{ asset('frontend') }}/assets/images/water-color.jpg" alt="water color brushes">
							<div class="product-category-content">
								<p class="product-category-title mb-0"><span
										class="fw-bold">Wooden</span></p>
								<a href="{{route('waterColor')}}" type="button" class="btn btn-product">View
									Product</a>
							</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="product-category-image">
							<img src="{{ asset('frontend') }}/assets/images/oil-brushes.jpg" alt="water color brushes">
							<div class="product-category-content">
								<p class="product-category-title mb-0"><span class="fw-bold">Arcylic</span>
								</p>
								<a type="button" class="btn btn-product">View
									Product</a>
							</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="product-category-image">
							<img src="{{ asset('frontend') }}/assets/images/Arcylic-brushes.jpg" alt="water color brushes">
							<div class="product-category-content">
								<p class="product-category-title mb-0"><span
										class="fw-bold">Metal</span></p>
								<a type="button" class="btn btn-product">View
									Product</a>
							</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="product-category-image">
							<img src="{{ asset('frontend') }}/assets/images/multimedia-brushes.jpg" alt="water color brushes">
							<div class="product-category-content">
								<p class="product-category-title mb-0"><span
										class="fw-bold">Plastics</span></p>
								<a type="button" class="btn btn-product">View
									Product</a>
							</div>
							</div>
						</div>
					</div></div>
				<div class="tab-pane fade" id="pills-precision" role="tabpanel"
					aria-labelledby="pills-precision-tab">...</div>
				<div class="tab-pane fade" id="pills-cosmetic" role="tabpanel"
					aria-labelledby="pills-cosmetic-tab">
					...
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
@endsection