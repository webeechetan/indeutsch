@extends('frontend.layouts.app')
@section('content')
<!--- Breadcrumb --->
<section class="breadcrumb-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('brushes')}}">Brushes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Water Color Brush</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--- Single Product Section --->
<section class="sec-space pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 pe-md-0">
                <div class="accordion" id="accordionCategory">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Brushes
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionCategory">
                            <div class="accordion-body">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#pills-artist">
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
                        <li><a href="{{route('components')}}">Components</a></li>
                        <li><a href="{{route('canvas')}}">Canvas</a></li>
                        <li><a href="{{route('artAccessories')}}">Art Accessories</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-img">
                            <div class="product-img-card">
                                
                                    <img src="{{ asset('frontend') }}/assets/images/watercolor.jpg" loading="lazy" alt="Watercolor" id="featured-img">
                                
                                <div class="swiper-container product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img
                                                    src="{{ asset('frontend') }}/assets/images/watercolor.jpg" alt="water-color" class="small-img"></div>
                                        <div class="swiper-slide"><img
                                                    src="{{ asset('frontend') }}/assets/images/oilbrushes.jpg" alt="oil" class="small-img"></div>
                                        <div class="swiper-slide"><img
                                                    src="{{ asset('frontend') }}/assets/images/Arcylicbrushes.jpg" alt="Arcylic-brushes" class="small-img"></div>
                                        <div class="swiper-slide"><img
                                                    src="{{ asset('frontend') }}/assets/images/multimediabrushes.jpg" alt="multimedia-brushes" class="small-img"></div>
                                    </div>
                                    <!-- Add Navigation Arrows -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 ps-md-5">
                        <div class="product-content">
                            <div class="product-content-title">
                                <h6 class="text-accent mb-2">Artist Brushes</h6>
                                <h4>Water Color<span class="text-accent fw-bold"> Brushes</span></h4>
                            </div>
                            <p>Enjoying a good reputation with a large number of buyers, Indeutsch products
                                can be found in North America, almost all European countries, Australia, New
                                Zealand, Middle East Asia, Latin America and other parts of the world.</p>
                            
                            <div class="product-content-description border-top mt-3">
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

                            </div>
                            <div class="product-content-description">
                                <div>
                                    <h6 class="fw-bold">Weight :</h6>
                                </div>
                                <div>
                                    <p class="mb-0">1.28 kg</p>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class=" btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"> <span class="bx bx-phone me-2"></span>Quick Inquiry</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="staticBackdropLabel">Inquiry Details
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="modal-form">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-group">
                                                                
                                                                <input type="text" class="form-control" id="first-name" placeholder="Enter Your First Name" required>
                                                                <label for=""> <span class='bx bx-user me-1'></span>First Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="last-name" placeholder="Enter Your Last Name">
                                                                <label for=""><span class='bx bx-user me-1'></span>Last Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-group">
                                                                
                                                                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                                                                <label for=""><span class='bx bx-envelope me-1'></span>Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-group">
                                                                
                                                                <input type="number" class="form-control" id="number" placeholder="Enter Your Number" required>
                                                                <label for=""><span class='bx bx-phone me-1'></span>Phone</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-4">
                                                            <div class="form-group">
                                                                <textarea type="text" id="address" placeholder="Send Message" rows="4"></textarea>
                                                                <label for=""> <i class='bx bx-message-square-dots me-1' ></i>Message</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <Button class="btn btn-secondary" >Send Query</Button>
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
                                    <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-description" type="button" role="tab"
                                        aria-controls="pills-description" aria-selected="true">Description</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                    aria-labelledby="pills-description-tab">
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
        </div>
        
</section>
@endsection
