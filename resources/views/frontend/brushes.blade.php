@extends('frontend.layouts.app')
@section('content')
<section class="product-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-wrap-20">Brushes</h2>
                <p>Enjoying a good reputation with a large number of buyers, Indeutsch products can be found
                    in North America, almost all European countries, Australia, New Zealand, Middle East
                    Asia, Latin America and other parts of the world.</p>
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
                                Brushes
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionCategory">
                            <div class="accordion-body">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">
                                            <div class="product-category-list active" id="artist">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Artist Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="product-category-list" id="cosmetic">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Cosmetic Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="product-category-list" id="nail">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Nail Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="product-category-list" id="miniature">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Miniature Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="product-category-list" id="industrial">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Industrial Brushes</span>
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
                        <li><a href="components.php">Components</a></li>
                        <li><a href="canvas.php">Canvas</a></li>
                        <li><a href="artaccessories.php">Art Accessories</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-9">
                <div class="product-category-tab">
                    <ul class="nav nav-pills mb-3" id="brushes-pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-artist-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-artist" type="button" role="tab"
                                aria-controls="pills-artist" aria-selected="true">Artist Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-cosmetic-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-cosmetic" type="button" role="tab"
                                aria-controls="pills-cosmetic" aria-selected="false">Cosmetic
                                Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-nail-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-nail" type="button" role="tab"
                                aria-controls="pills-nail" aria-selected="false">Nail Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-miniature-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-miniature" type="button" role="tab"
                                aria-controls="pills-miniature" aria-selected="false">Miniature
                                Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-industrial-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-industrial" type="button" role="tab"
                                aria-controls="pills-industrial" aria-selected="false">Industrial
                                Brushes</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="brushes-pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-artist" role="tabpanel"
                            aria-labelledby="pills-artsit-tab">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="product-category-image">
                                        <img src="{{ asset('frontend') }}/assets/images/water-color.jpg"
                                            alt="water color brushes">
                                        <div class="product-category-content">
                                            <p class="product-category-title mb-0">Water Color <span
                                                    class="fw-bold">Brushes</span></p>
                                            <a href="{{route('waterColor')}}" type="button"
                                                class="btn btn-product btn-primary">View
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
                                            <a type="button" class="btn btn-product btn-primary">View
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
                                            <a type="button" class="btn btn-product btn-primary">View
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
                                            <a type="button" class="btn btn-product btn-primary">View
                                                Product</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cosmetic" role="tabpanel"
                            aria-labelledby="pills-cosmetic-tab">...</div>
                        <div class="tab-pane fade" id="pills-nail" role="tabpanel"
                            aria-labelledby="pills-nail-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="pills-miniature" role="tabpanel"
                            aria-labelledby="pills-miniature-tab">...</div>
                        <div class="tab-pane fade" id="pills-industrial" role="tabpanel"
                            aria-labelledby="pills-industrial-tab">...</div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>  
@endsection
