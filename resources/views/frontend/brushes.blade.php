@extends('frontend.layouts.app')
@section('content')
<section class="product-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 brushes-banner">
                <h2 class="title-wrap-20">Brush Division</h2>
                <p>Indeutsch Industries is a leading global manufacturer of
                    premium brushes for artist, cosmetic, craft, school & hobby
                    and industrial applications. We meticulously manage every
                    aspect of production, from concept and design to packaging,
                    ensuring exceptional quality. Our handmade brushes are
                    crafted to exceed performance expectations, reflecting our
                    commitment to uncompromising standards, LEAN principles,
                    and a passion for creating tools that inspire and delight.</p>
            </div>
        </div>
    </div>
</section>
<!-- Product List -->
<section class="sec-space">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar Current Page Products  -->
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
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list active" id="brush-division">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Brush Division</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="artist-brushes">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Artist Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="school-hobby-brushes">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>School & Hobby Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="cosmetic-brushes">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Cosmetic Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="shaving-brushes">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Shaving Brushes</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left Sidebar Menu -->
                <div class="product-category-otherlist">
                    <ul class="list-unstyled">
                        <li><a href="{{route('artAccessories')}}">Art Accessories</a></li>
                        <li><a class="{{ Route::is('components') ? 'active' : '' }}" href="{{ route('components') }}">Components</a></li>
                        <!-- <li><a href="{{route('artistCanvas')}}">Artist Canvas</a>
						</li> -->
                        <!-- <li><a href="printingcanvas.php">Printing Canvas</a>
						</li> -->
                    </ul>
                </div>
            </div>
            <!-- Product Tabs -->
            <div class="col-md-9">
                <div class="product-category-tab">
                    <ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-brush-division-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-brush-division" type="button" role="tab"
                                aria-controls="pills-brush-division" aria-selected="true">Brush Division</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-artist-brushes-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-artist-brushes" type="button" role="tab"
                                aria-controls="pills-artist-brushes" aria-selected="true">Artist Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-school-hobby-brushes-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-school-hobby-brushes" type="button" role="tab"
                                aria-controls="pills-school-hobby-brushes" aria-selected="false">School & Hobby Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-cosmetic-brushes-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-cosmetic-brushes" type="button" role="tab"
                                aria-controls="pills-cosmetic-brushes" aria-selected="false"> Cosmetic Brushes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-shaving-brushes-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-shaving-brushes" type="button" role="tab"
                                aria-controls="pills-shaving-brushes" aria-selected="false"> Shaving Brushes</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="components-pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-brush-division" role="tabpanel"
                            aria-labelledby="pills-brush-division-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container" id="brush-division-pad">
                                            <img src="/frontend/assets/images/products/brushes/brush-division.png" loading="lazy" alt="brush-division" id="ms-featured-img" class="ms-featured-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class="mb-2"><span>Brushes<span>></span> </span> Brush Division</h6>
                                            <h2 class="mt-4 fw-bold">Brush <span class="text-accent fw-bold"> Division</span></h2>
                                        </div>
                                        <p>Indeutsch Industries is a leading global manufacturer of
                                            premium brushes for artist, cosmetic, craft, school & hobby
                                            and industrial applications. We meticulously manage every
                                            aspect of production, from concept and design to packaging,
                                            ensuring exceptional quality. Our handmade brushes are
                                            crafted to exceed performance expectations, reflecting our
                                            commitment to uncompromising standards, LEAN principles,
                                            and a passion for creating tools that inspire and delight. </p>
                                        <p>We are experienced in international trade and compliance
                                            regulations, making it easy to partner with us from anywhere in
                                            the world. </p>
                                        <p>Our manufacturing capabilities support high-volume orders and
                                            provide access to a diverse range of filaments, including high
                                            performance synthetic mixtures. We excel at creating
                                            customized brushes, offering flexibility in hair shape, handle &
                                            ferrule design packaging options in order to meet your unique
                                            requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-artist-brushes" role="tabpanel"
                            aria-labelledby="pills-artist-brushes-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/artist-brushes1.png" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/artist-brushes1.png" alt="Artist Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/artist-brushes2.png" alt="Artist Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/artist-brushes3.png" alt="Artist Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/artist-brushes4.png" alt="Artist Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/artist-brushes5.png" alt="Artist Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Brush Division<span>></span> </span> Artist Brushes</h6>
                                            <h2 class="mt-4 fw-bold">Artist<span class="text-accent fw-bold"> Brushes</span></h2>
                                        </div>
                                        <p>At Indeutsch Industries, we understand the
                                            importance of quality tools in the hands of artists. We combine
                                            traditional techniques with modern innovation to create
                                            brushes that meet the rigorous demands of professional artists
                                            and hobbyists alike.</p>
                                        <p>Our state-of-the-art facilities and
                                            meticulous quality control ensure that every brush we produce
                                            is a masterpiece. We are dedicated to building long-term
                                            partnerships, offering flexible private label solutions and
                                            reliable global distribution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-school-hobby-brushes" role="tabpanel"
                            aria-labelledby="pills-school-hobby-brushes-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/school-hobby-brushes.png" loading="lazy" alt="School & Hobby Brushes" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/school-hobby-brushes.png" alt="School & Hobby Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Brush Division<span>></span> </span> School & Hobby Brushes</h6>
                                            <h2 class="mt-4 fw-bold">School &<span class="text-accent fw-bold"> Hobby Brushes</span></h2>
                                        </div>
                                        <p>As a renowned and established supplier of art materials,
                                            we take pride in our extensive range of brushes tailored
                                            for school and hobby applications. We understand the
                                            demands of educational settings and the passion of
                                            hobbyists, which is why our brushes are manufactured to
                                            offer durability, versatility, affordability and reliable
                                            performance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cosmetic-brushes" role="tabpanel"
                            aria-labelledby="pills-cosmetic-brushes-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/cosmetic-brushes1.png" loading="lazy" alt="Cosmetic Brushes" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/cosmetic-brushes1.png" alt="Cosmetic Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/cosmetic-brushes2.png" alt="Cosmetic Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/cosmetic-brushes3.png" alt="Cosmetic Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Brush Division<span>></span> </span> Cosmetic Brushes</h6>
                                            <h2 class="mt-4 fw-bold">Cosmetic<span class="text-accent fw-bold"> Brushes</span></h2>
                                        </div>
                                        <p>As a leading global OEM manufacturer,
                                            Indeutsch Industries offers a comprehensive
                                            range of premium natural & cosmetic brushes
                                            and accessories.</p>
                                        <p> We deliver custom-designed
                                            brushes, renowned for their precision
                                            performance and unique design, alongside highquality brush pouches and bags. With decades
                                            of industry expertise, we develop innovative,
                                            brand-tailored solutions to meet your specific
                                            requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-shaving-brushes" role="tabpanel"
                            aria-labelledby="pills-shaving-brushes-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/shaving1.png" loading="lazy" alt="Shaving Brushes" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="https://indeutsch.com/frontend/assets/images/products/brushes/shaving1.png" alt="Shaving Brushes" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Brush Division<span>></span> </span> Shaving Brushes</h6>
                                            <h2 class="mt-4 fw-bold">Shaving<span class="text-accent fw-bold"> Brushes</span></h2>
                                        </div>
                                        <p>In response to market demand, Indeutsch Industries now
                                            manufactures customized shaving brushes. Our design
                                            capabilities allow for complete flexibility in handle shape and
                                            filament selection, ensuring your unique requirements are
                                            met.</p>
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