@extends('frontend.layouts.app')
@section('content')
<!-- Product Banner  -->
<section class="product-banner2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-wrap-20">Canvas</h2>
                <p>Enjoying a good reputation with a large number of buyers, Indeutsch products can be found
                    in North America, almost all European countries, Australia, New Zealand, Middle East Asia,
                    Latin America and other parts of the world.
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
                                <h6 class="mt-3 text-accent">Artist Canvas</h6>
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list active" id="rolls">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Rolls</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="stretched">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Stretched Canvas</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="canva-panel">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Panel</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="pads">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Pads</span>
                                            </div>
                                        </a>
                                    </li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="special">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Special Canvas Products</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="mt-4 text-dark"><a href="#">Printing Canvas</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-category-otherlist">
                    <ul class="list-unstyled">
                        <li><a href="product.php">Brushes</a></li>
                        <li><a href="components.php">Components</a></li>
                        <li><a href="{{route('artAccessories')}}">Art Accessories</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="product-category-tab">
                    <ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-rolls-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-rolls" type="button" role="tab"
                                aria-controls="pills-rolls" aria-selected="true">Canvas Rolls</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-stretched-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-stretched" type="button" role="tab"
                                aria-controls="pills-stretched" aria-selected="false">Stretched
                                Canvas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-canva-panel-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-canva-panel" type="button" role="tab"
                                aria-controls="pills-canva-panel" aria-selected="false">Canvas Panel</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-pads-tab" data-bs-toggle="pill" data-bs-target="#pills-pads" type="button" role="tab" aria-controls="pills-pads" aria-selected="false" data-category="pads">
                                Canvas Pads
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-special-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-special" type="button" role="tab"
                                aria-controls="pills-special" aria-selected="false">Special Canvas
                                Products</button>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="components-pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-rolls" role="tabpanel"
                            aria-labelledby="pills-rolls-tab">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/cotton.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Cotton</span></p>
                                            <a href="./water-color.php" type="button"
                                                class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/linen.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Linen</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/polycotton.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Polycotton</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-special" role="tabpanel"
                            aria-labelledby="pills-special-tab">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/special-shape.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Special<span
                                                    class="fw-bold">Shape</span></p>
                                            <a href="./water-color.php" type="button"
                                                class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/canva-leaf.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Canvas<span
                                                    class="fw-bold">Leaf</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-stretched" role="tabpanel"
                            aria-labelledby="pills-stretched-tab">
                                <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/stre-cotton.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Cotton</span></p>
                                            <a href="./water-color.php" type="button"
                                                class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/stre-linen.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Linen</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/stre-poly.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Polycotton</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-canva-panel" role="tabpanel"
                            aria-labelledby="pills-canva-panel-tab">
                                <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/stre-cotton.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Cotton</span></p>
                                            <a href="./water-color.php" type="button"
                                                class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/stre-linen.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Linen</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/stre-poly.png"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0"><span
                                                    class="fw-bold">Polycotton</span></p>
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pads" role="tabpanel"
                        aria-labelledby="pills-pads-tab">
                            <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="product-category-image">
                                    <img src="{{ asset('frontend') }}/assets/images/stre-cotton.png"
                                        alt="water color brushes">
                                    <div class="product-category-content">
                                        <p class="product-category-title mb-0"><span
                                                class="fw-bold">Cotton</span></p>
                                        <a href="./water-color.php" type="button"
                                            class="btn btn-product btn-primary">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="product-category-image">
                                    <img src="{{ asset('frontend') }}/assets/images/stre-linen.png"
                                        alt="water color brushes">
                                    <div class="product-category-content">
                                        <p class="product-category-title mb-0"><span
                                                class="fw-bold">Linen</span></p>
                                        <a type="button" class="btn btn-product btn-primary">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="product-category-image">
                                    <img src="{{ asset('frontend') }}/assets/images/stre-poly.png"
                                        alt="water color brushes">
                                    <div class="product-category-content">
                                        <p class="product-category-title mb-0"><span
                                                class="fw-bold">Polycotton</span></p>
                                        <a type="button" class="btn btn-product btn-primary">View
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
