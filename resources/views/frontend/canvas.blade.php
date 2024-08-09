@extends('frontend.layouts.app')
@section('content')
<!-- Product Banner  -->
<section class="product-banner2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-wrap-20">Canvas</h2>
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
                                Canvas
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionCategory">
                            <div class="accordion-body">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list active" id="artistcanvas">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Artist Canvas</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="printingcanvas">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Printing Canvas</span>
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
                        <li><a href="brushes.php">Brushes</a></li>
                        <li><a href="components.php">Components</a></li>
                        <li><a href="artaccessories.php">Art
                                Accessories</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-category-tab">
                    <ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-artistcanvas-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-artistcanvas" type="button"
                                role="tab" aria-controls="pills-artistcanvas" aria-selected="true">Artist
                                Canvas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-printingcanvas-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-printingcanvas" type="button" role="tab"
                                aria-controls="pills-printingcanvas" aria-selected="false">Printing
                                Canvas</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="components-pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-artistcanvas" role="tabpanel"
                            aria-labelledby="pills-precision-tab">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/canvas-rolls.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Canvas<span
                                                    class="fw-bold">Rolls</span></p>
                                            <a  href="#" onclick="onViewProductClick('rolls')" type="button" class="btn btn-primary" data-category="rolls">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/strretched-canvas.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Stretched<span
                                                    class="fw-bold">Canvas</span></p>
                                            <a href="#" onclick="onViewProductClick('stretched')" type="button" class="btn btn-primary" data-category="stretched">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/canvas-special.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Canvas<span
                                                    class="fw-bold">Panels</span></p>
                                            <a href="#" onclick="onViewProductClick('canva-panel')" type="button" class="btn btn-primary" data-category="canva-panel">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/canvas-rolls.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Canvas<span
                                                    class="fw-bold">Pads</span></p>
                                                    <a href="#" onclick="onViewProductClick('pads')" type="button" class="btn btn-primary" data-category="pads">
                                                        View Product
                                                    </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/canvas-special.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Special<span
                                                    class="fw-bold">Canvas Rolls</span>
                                            </p>
                                            <a href="#" onclick="onViewProductClick('special')" type="button" class="btn btn-primary" data-category="special">
                                                View Product
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-printingcanvas" role="tabpanel"
                            aria-labelledby="pills-printingcanvas-tab">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/water-color.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Printing<span
                                                    class="fw-bold">Canvas</span></p>
                                            <a href="water-color.php" type="button" class="btn btn-primary">View
                                                Product</a>
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
