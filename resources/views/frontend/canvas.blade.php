@extends('frontend.layouts.app')
@section('content')
<div class="canvas-banner">
    <section class="new-banner-section">
        <div class="container">
            <div class="new-banner-row">
                <div class="new-banner-col-left">
                    <h2 class="title-wrap-20">Canvas Division
                    </h2>
                    <p>Indeutsch is the Foremost Manufacturer and Exporter of High Quality Canvas Products.
                        Our large-scale manufacturing facility, spanning 80,000 square
                        feet, possesses the capacity to prime 0.2 million linear meters
                        canvas per month.
                    </p>
                </div>
                <div class="new-banner-col-right">
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Product List -->
<section class="sec-space">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar Current Page Products  -->
            <div class="col-md-2">
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
                                            <div class="product-category-list active" id="canvas-division">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Division</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="canvas-rolls">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Rolls</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="canvas-blankets">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Blankets</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="stretched-canvas">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Stretched Canvas</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="canvas-pad">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Pad</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="canvas-panels">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Canvas Panels</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="product-category-list" id="stretcher-bar">
                                                <span class='bx bx-chevrons-right'></span>
                                                <span>Stretcher Bar</span>
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
                        <li><a href="{{route('brushes')}}">Brushes</a>
                        </li>
                        <li><a class="{{ Route::is('components') ? 'active' : '' }}" href="{{ route('components') }}">Components</a></li>
                        <li><a href="{{route('artAccessories')}}">Art Accessories</a></li>
                    </ul>
                </div>
            </div>
            <!-- Product Tabs -->
            <div class="col-md-10">
                <div class="product-category-tab">
                    <ul class="nav nav-pills mb-3" id="components-pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-canvas-division-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-canvas-division" type="button" role="tab"
                                aria-controls="pills-canvas-division" aria-selected="true">Canvas Division</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-canvas-rolls-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-canvas-rolls" type="button" role="tab"
                                aria-controls="pills-canvas-rolls" aria-selected="true">Canvas Rolls</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-canvas-blankets-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-canvas-blankets" type="button" role="tab"
                                aria-controls="pills-canvas-blankets" aria-selected="false">Canvas Blankets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-stretched-canvas-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-stretched-canvas" type="button" role="tab"
                                aria-controls="pills-stretched-canvas" aria-selected="false"> Stretched Canvas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-canvas-pad-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-canvas-pad" type="button" role="tab"
                                aria-controls="pills-canvas-pad" aria-selected="false"> Canvas Pad</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-canvas-panels-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-canvas-panels" type="button" role="tab"
                                aria-controls="pills-canvas-panels" aria-selected="false"> Canvas Panels</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-stretcher-bar-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-stretcher-bar" type="button" role="tab"
                                aria-controls="pills-stretcher-bar" aria-selected="false"> Stretcher Bar</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="components-pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-canvas-division" role="tabpanel"
                            aria-labelledby="pills-canvas-division-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container" id="canvas-division-pad">
                                            <img src="/frontend/assets/images/products/canvas/canvas-division-banner.png" loading="lazy" alt="canvas-division" id="ms-featured-img" class="ms-featured-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class="mb-2"><span>Canvas<span>></span> </span> Canvas Division</h6>
                                            <h2 class="mt-4 fw-bold">Canvas <span class="text-accent fw-bold"> Division</span></h2>
                                        </div>
                                        <p>The Canvas division is equipped with various semi automatic machines to carry out its manufacturing
                                            operations. We are committed to constantly coming up with new improvements and adding new products to
                                            give our customers a competitive edge and a new experience.
                                        </p>
                                        <p>We have an in-house & well-equipped infrastructure to produce Canvas Rolls, Stretched Canvas, Panels, and Canvas Pads. We produce stretched canvas with pine wood stretcher bars. We use 100% Virgin Cotton Yarn, 100% Virgin Linen Yarn, and Polyester Cotton Yarn as per norms. Our machines have different stages of priming, which help to achieve a smooth and universal primed canvas.
                                        </p>
                                        <p>Our canvas production is certified to ISO, PEFC, and REACH standards. We also adhere to ASTM D-4236
                                            (LHAMA) and are a member of the SEDEX Ethical Trade initiative.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-canvas-rolls" role="tabpanel" aria-labelledby="pills-canvas-rolls-tab">
                            <div class="row">
                                <!-- LEFT COLUMN: IMAGE GALLERY -->
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <div class="zoom-img-container">
                                                <img src="/frontend/assets/images/products/canvas/canvas-rolls.png" loading="lazy" alt="Featured Canvas Roll" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <div class="ms-thumbnails" id="ms-thumbnails-container">
                                                <!-- Thumbnails will be dynamically populated by JS -->
                                                <img src="/frontend/assets/images/products/canvas/canvas-rolls.png" alt="Canvas Rolls" class="ms-thumbnail active-thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RIGHT COLUMN: PRODUCT CONTENT & SUB-TABLES -->
                                <div class="col-md-6 ps-md-4">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class="mb-2"><span>Canvas Division<span>&gt;</span> </span> Canvas Rolls</h6>
                                            <h2 class="mt-4 fw-bold">Canvas<span class="text-accent fw-bold"> Rolls</span></h2>
                                        </div>
                                        <p>Universally machine primed</p>
                                        <ul>
                                            <li> The machine primed Gesso canvas ensures consistency in surface, and is ready to use</li>
                                            <li> Ideal for Oil and Acrylic Painting</li>
                                            <li> Acid free Sizing</li>
                                            <li> Gesso confirms to ASTM D-4236</li>
                                        </ul>

                                        <!-- INNER TABS FOR DIFFERENT TABLES/VARIANTS -->
                                        <ul class="nav nav-pills mb-3 mt-4" id="canvasRollsSubTabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-general-specs-tab" data-bs-toggle="pill" data-bs-target="#pills-general-specs-content" type="button" role="tab" aria-controls="pills-general-specs-content" aria-selected="true"
                                                    data-main-image="/frontend/assets/images/products/canvas/canvas-rolls.png"
                                                    data-thumbnails='[{"src":"/frontend/assets/images/products/canvas/canvas-rolls.png", "alt":"Canvas Rolls General"}]'>
                                                    Canvas Rolls
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-unprimed-tab" data-bs-toggle="pill" data-bs-target="#pills-unprimed-content" type="button" role="tab" aria-controls="pills-unprimed-content" aria-selected="false"
                                                    data-main-image="/frontend/assets/images/products/canvas/canvas-rolls.png"
                                                    data-thumbnails='[{"src":"/frontend/assets/images/products/canvas/canvas-rolls.png", "alt":"Unprimed Canvas"}]'>
                                                    Unprimed Canvas
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-primed-linen-tab" data-bs-toggle="pill" data-bs-target="#pills-primed-linen-content" type="button" role="tab" aria-controls="pills-primed-linen-content" aria-selected="false"
                                                    data-main-image="/frontend/assets/images/products/canvas/canvas-rolls-linen.jpg"
                                                    data-thumbnails='[{"src":"/frontend/assets/images/products/canvas/canvas-rolls-linen.jpg", "alt":"Primed Linen Canvas"}]'>
                                                    Primed Linen
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-primed-polycotton-tab" data-bs-toggle="pill" data-bs-target="#pills-primed-polycotton-content" type="button" role="tab" aria-controls="pills-primed-polycotton-content" aria-selected="false"
                                                    data-main-image="/frontend/assets/images/products/canvas/canvas-rolls-polycotton.jpg"
                                                    data-thumbnails='[{"src":"/frontend/assets/images/products/canvas/canvas-rolls-polycotton.jpg", "alt":"Primed Poly-Cotton"}]'>
                                                    Primed Poly-Cotton
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-premium-canvas-tab" data-bs-toggle="pill" data-bs-target="#pills-premium-canvas-content" type="button" role="tab" aria-controls="pills-premium-canvas-content" aria-selected="false"
                                                    data-main-image="/frontend/assets/images/products/canvas/canvas-rolls.png"
                                                    data-thumbnails='[{"src":"/frontend/assets/images/products/canvas/canvas-rolls.png", "alt":"Premium Canvas"}]'>
                                                    Premium Canvas
                                                </button>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="canvasRollsSubTabContent">
                                            <!-- SUB-TAB PANE 0: General Specifications (Your original table) -->
                                            <div class="tab-pane fade show active" id="pills-general-specs-content" role="tabpanel" aria-labelledby="pills-general-specs-tab">
                                                <div class="table-wrap">
                                                    <div class="table-solo-leveling-wrapper">
                                                        <table class="table-solo-leveling table table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Priming</td>
                                                                    <td>Acrylic Titanium Gesso</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fabric Quality</td>
                                                                    <td>4oz, 6oz, 7oz, 8oz, 10oz, 12oz, 14oz</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Quality</td>
                                                                    <td>Double / Triple Primed</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roll Width<br>available in<br>inches</td>
                                                                    <td>42”, 52”, 63”, 72”, 84”</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roll Length</td>
                                                                    <td>5 meters, 10 meters, 25 meters, 50 meters,<br>100 meters, 6 yard, 12 yard, 30 yard, 50 yard<br>and 100 yard</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Packing</td>
                                                                    <td>Outer Tube , Box packing & Bulk packing, Customized<br>packaging is offered upon request</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Primed Colour<br>variety</td>
                                                                    <td>White, Black, Grey & Transparent</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- SUB-TAB PANE 1: Unprimed Canvas -->
                                            <div class="tab-pane fade" id="pills-unprimed-content" role="tabpanel" aria-labelledby="pills-unprimed-tab">
                                                <div class="table-wrap">
                                                    <div class="table-solo-leveling-wrapper">
                                                        <table class="table-solo-leveling">
                                                            <thead>
                                                                <tr>
                                                                    <th>S No.</th>
                                                                    <th>Product Code</th>
                                                                    <th>Fabric</th>
                                                                    <th>Weave</th>
                                                                    <th>Weight (gsm)</th>
                                                                    <th>Grain</th>
                                                                    <th>Width (inches)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>CTRF04105</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Plain</td>
                                                                    <td>105</td>
                                                                    <td>Fine</td>
                                                                    <td>72'' , 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>CTRF05120</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Plain</td>
                                                                    <td>120</td>
                                                                    <td>Medium</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>CTRF06170</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Oxford</td>
                                                                    <td>170</td>
                                                                    <td>Medium</td>
                                                                    <td>63'' , 72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>CTRF07200</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Oxford</td>
                                                                    <td>200</td>
                                                                    <td>Medium</td>
                                                                    <td>60'' , 72'' , 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>CTRF08225</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Oxford</td>
                                                                    <td>225</td>
                                                                    <td>Medium</td>
                                                                    <td>63'' , 72'' , 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>CTRF10305</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Oxford</td>
                                                                    <td>305</td>
                                                                    <td>Medium</td>
                                                                    <td>36'' , 48'' ,56'' , 60'' , 72'' , 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>CTRF12380</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Plain</td>
                                                                    <td>380</td>
                                                                    <td>Coarse</td>
                                                                    <td>60'', 72'' , 84'' , 96'' , 120''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>CTRF15495</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>Plain</td>
                                                                    <td>495</td>
                                                                    <td>Coarse</td>
                                                                    <td>56'' , 72'' , 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>LNRF06160</td>
                                                                    <td>100% Linen</td>
                                                                    <td>Plain</td>
                                                                    <td>160</td>
                                                                    <td>Fine</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>LNRF08225</td>
                                                                    <td>100% Linen</td>
                                                                    <td>Plain</td>
                                                                    <td>225</td>
                                                                    <td>Medium</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>LNRF10270</td>
                                                                    <td>100% Linen</td>
                                                                    <td>Plain</td>
                                                                    <td>270</td>
                                                                    <td>Medium</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>12</td>
                                                                    <td>LNRF12360</td>
                                                                    <td>100% Linen</td>
                                                                    <td>Matty</td>
                                                                    <td>360</td>
                                                                    <td>Coarse</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- SUB-TAB PANE 2: Primed Linen Canvas -->
                                            <div class="tab-pane fade" id="pills-primed-linen-content" role="tabpanel" aria-labelledby="pills-primed-linen-tab">
                                                <div class="table-wrap">
                                                    <div class="table-solo-leveling-wrapper">
                                                        <table class="table-solo-leveling">
                                                            <thead>
                                                                <tr>
                                                                    <th>S No.</th>
                                                                    <th>Product Code</th>
                                                                    <th>Finish</th>
                                                                    <th>Fabric</th>
                                                                    <th>Weight (gsm)</th>
                                                                    <th>Grain</th>
                                                                    <th>Width (inches)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>LN06480240</td>
                                                                    <td>Transparent Primed</td>
                                                                    <td>100% Linen</td>
                                                                    <td>240</td>
                                                                    <td>Fine</td>
                                                                    <td>84"</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>LN06480400</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Linen</td>
                                                                    <td>400</td>
                                                                    <td>Fine</td>
                                                                    <td>84"</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>LN08300450</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Linen</td>
                                                                    <td>450</td>
                                                                    <td>Medium</td>
                                                                    <td>84"</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>LN08300490</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Linen</td>
                                                                    <td>490</td>
                                                                    <td>Medium</td>
                                                                    <td>84"</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>LN10180560</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Linen</td>
                                                                    <td>560</td>
                                                                    <td>Medium</td>
                                                                    <td>84"</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>LN12260700</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Linen</td>
                                                                    <td>700</td>
                                                                    <td>Coarse</td>
                                                                    <td>84"</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- SUB-TAB PANE 3: Primed Poly-Cotton Canvas -->
                                            <div class="tab-pane fade" id="pills-primed-polycotton-content" role="tabpanel" aria-labelledby="pills-primed-polycotton-tab">
                                                <div class="table-wrap">
                                                    <div class="table-solo-leveling-wrapper">
                                                        <table class="table-solo-leveling">
                                                            <thead>
                                                                <tr>
                                                                    <th>S No.</th>
                                                                    <th>Product Code</th>
                                                                    <th>Finish</th>
                                                                    <th>Fabric</th>
                                                                    <th>Weight (gsm)</th>
                                                                    <th>Grain</th>
                                                                    <th>Width (inches)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>PC00050280</td>
                                                                    <td>White -Primed</td>
                                                                    <td>Poly-Cotton Ring Spun</td>
                                                                    <td>280</td>
                                                                    <td>Medium</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td> PC05120350</td>
                                                                    <td>White -Primed</td>
                                                                    <td>Poly-Cotton</td>
                                                                    <td>350</td>
                                                                    <td>Medium</td>
                                                                    <td>72'' , 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td> PC00060320</td>
                                                                    <td>White -Primed</td>
                                                                    <td>Poly-Cotton</td>
                                                                    <td>320</td>
                                                                    <td>Coarse</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td> PC00820500</td>
                                                                    <td>White -Primed</td>
                                                                    <td>Poly-Cotton</td>
                                                                    <td>500</td>
                                                                    <td>Ultra-Smooth</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td> PCLL060350</td>
                                                                    <td>Primed - Linen Look</td>
                                                                    <td>Poly-Cotton</td>
                                                                    <td>350</td>
                                                                    <td>Coarse</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td> PCLL050380</td>
                                                                    <td>Primed - Linen Look</td>
                                                                    <td>Poly-Cotton</td>
                                                                    <td>380</td>
                                                                    <td>Medium</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td> PCLL120560</td>
                                                                    <td>Primed - Linen Look</td>
                                                                    <td>Poly-Cotton</td>
                                                                    <td>560</td>
                                                                    <td>Ultra-Smooth</td>
                                                                    <td>84''</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- SUB-TAB PANE 4: Premium Canvas -->
                                            <div class="tab-pane fade" id="pills-premium-canvas-content" role="tabpanel" aria-labelledby="pills-premium-canvas-tab">
                                                <div class="table-wrap">
                                                    <div class="table-solo-leveling-wrapper">
                                                        <table class="table-solo-leveling">
                                                            <thead>
                                                                <tr>
                                                                    <th>S No.</th>
                                                                    <th>Product Code</th>
                                                                    <th>Finish</th>
                                                                    <th>Fabric</th>
                                                                    <th>Weight (gsm)</th>
                                                                    <th>Grain</th>
                                                                    <th>Width (inches)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>CTW0430320</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>320</td>
                                                                    <td>Very Fine</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>CT04160240</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>240</td>
                                                                    <td>Fine</td>
                                                                    <td>72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>CT04160280</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>280</td>
                                                                    <td>Fine</td>
                                                                    <td>72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>CT05120280</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>280</td>
                                                                    <td>Medium</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>CT07100340</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>340</td>
                                                                    <td>Medium</td>
                                                                    <td>60'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>CT07100380</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>380</td>
                                                                    <td>Medium</td>
                                                                    <td>60'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>CT08080360</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>360</td>
                                                                    <td>Medium</td>
                                                                    <td>63'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>CT08080410</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>410</td>
                                                                    <td>Medium</td>
                                                                    <td>63'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>CT10070430</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>430</td>
                                                                    <td>Medium</td>
                                                                    <td>56'', 60'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>CT10070450</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>450</td>
                                                                    <td>Medium</td>
                                                                    <td>56'', 60'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>CT10070480</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>480</td>
                                                                    <td>Medium</td>
                                                                    <td>56'', 60'', 72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>12</td>
                                                                    <td>CT12210540</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>540</td>
                                                                    <td>Coarse</td>
                                                                    <td>72'', 84''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>13</td>
                                                                    <td>CT15207700</td>
                                                                    <td>White Primed</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>700</td>
                                                                    <td>Coarse</td>
                                                                    <td>56'', 72'', 84''</td>
                                                                </tr>

                                                                <!-- Coloured Canvas Section -->
                                                                <tr>
                                                                    <td colspan="7" style="text-align: center; font-weight: bold;">Coloured Canvas</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>14</td>
                                                                    <td>CTOG710340</td>
                                                                    <td>Orange</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>340</td>
                                                                    <td>Medium</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>15</td>
                                                                    <td>CTGN710340</td>
                                                                    <td>Green</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>340</td>
                                                                    <td>Medium</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>16</td>
                                                                    <td>CTGY710340</td>
                                                                    <td>Grey</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>340</td>
                                                                    <td>Medium</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>17</td>
                                                                    <td>CTOV710340</td>
                                                                    <td>Olive</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>340</td>
                                                                    <td>Medium</td>
                                                                    <td>72''</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>18</td>
                                                                    <td>CTB0710340</td>
                                                                    <td>Black</td>
                                                                    <td>100% Cotton</td>
                                                                    <td>340</td>
                                                                    <td>Medium</td>
                                                                    <td>60''</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                        </div> <!-- End of sub-tab-content -->
                                    </div> <!-- End of product-content -->
                                </div> <!-- End of col-md-6 ps-md-4 -->
                            </div> <!-- End of row -->
                        </div>
                        <div class="tab-pane fade" id="pills-canvas-blankets" role="tabpanel"
                            aria-labelledby="pills-canvas-blankets-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="/frontend/assets/images/products/canvas/canvas-blankets2.jpg" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="/frontend/assets/images/products/canvas/canvas-blankets2.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-4">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Canvas Division<span>></span> </span> Canvas Blankets</h6>
                                            <h2 class="mt-4 fw-bold">Canvas<span class="text-accent fw-bold"> Blankets</span></h2>
                                        </div>
                                        <p>Our convenient, 100% cotton, loom-state (Woven Cotton Fabric/non-dyed) folded canvases come in a variety of lengths: 1, 3, 5, and 6 yards. Each piece is individually wrapped and packaged for easy handling and storage. We offer unparalleled customization options, allowing you to add personalized labels to each piece and select from a wide range of widths, from 36 inches to 84 inches, to perfectly suit your project.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-stretched-canvas" role="tabpanel"
                            aria-labelledby="pills-stretched-canvas-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas.jpg" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails scale-container">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas6.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas7.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas3.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas2.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas4.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas5.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretched-canvas8.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-4">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Canvas Division<span>></span> </span> Stretched Canvas</h6>
                                            <h2 class="mt-4 fw-bold">Stretched<span class="text-accent fw-bold"> Canvas</span></h2>
                                        </div>
                                        <p>Universally primed with Acrylic Titanium Gesso on Fabric</p>
                                        <ul>
                                            <li> Primed Canvas is stretched over kiln dried Pinewood stretcher frames</li>
                                            <li> Stretcher Frames can be extended through Wooden Keys (wedges)</li>
                                            <li> Each Stretched Canvas is individually shrink wrapped to protect from dust and acidic contact</li>
                                            <li> Stretched Canvas available in various sizes and profiles</li>
                                            <li> Acid free Sizing</li>
                                            <li> Available in different Shapes- Oval, Rectangle, Round & Square</li>
                                            <li> Suitable for Oil and Acrylic Painting</li>
                                        </ul>
                                        <div class="table-wrap">
                                            <div class="table-solo-leveling-wrapper">
                                                <table class="table-solo-leveling">
                                                    <tr>
                                                        <td>Pack / Box</td>
                                                        <td>5pcs, 6pcs 10pcs, 36 pcs (On Request)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shrink Pack</td>
                                                        <td>Individual / Twin Pack / Multi Pack</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric Quality</td>
                                                        <td>4oz, 5oz, 7oz, 8oz, 10oz, 12oz, 14oz,17oz</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wood Profile</td>
                                                        <td>19x38mm, 24x 38mm, 35 x 35mm , 51 x 35mm (Customization is offered)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Priming</td>
                                                        <td>Double / Triple Primed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wood Type</td>
                                                        <td>Pine Wood</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Frame<br>Support</td>
                                                        <td>Single / Cross / Diamond</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric</td>
                                                        <td>100% Cotton / 100% Linen & Polycotton</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-canvas-pad" role="tabpanel"
                            aria-labelledby="pills-canvas-pad-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="/frontend/assets/images/products/canvas/canvas-pad.jpg" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="/frontend/assets/images/products/canvas/canvas-pad.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-4">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Canvas Division<span>></span> </span> Canvas Pad</h6>
                                            <h2 class="mt-4 fw-bold">Canvas<span class="text-accent fw-bold"> Pad</span></h2>
                                        </div>
                                        <p>Primed Canvas available in a Pad form containing 10 leafs</p>
                                        <ul>
                                            <li> Each Canvas Pad is individually shrink wrapped to protect from dust and acidic contact</li>
                                            <li> Suitable for Oil and acrylic Painting</li>
                                            <li> Available in a wide range of sizes upto 18” x 24”</li>
                                        </ul>
                                        <div class="table-wrap">
                                            <div class="table-solo-leveling-wrapper">
                                                <table class="table-solo-leveling">
                                                    <tr>
                                                        <td>Pack / Box</td>
                                                        <td>12 pcs,10 pcs (Customization is offered)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shrink Pack</td>
                                                        <td>Individual</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric Quality</td>
                                                        <td>4oz,6oz, 7Oz, 8oz</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Priming</td>
                                                        <td>Double / Triple Primed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Primed Colour variety</td>
                                                        <td>White, Black & Pastel Colors</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric</td>
                                                        <td>100% Cotton / Polycotton / 100% Linen</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-canvas-panels" role="tabpanel"
                            aria-labelledby="pills-canvas-panels-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="/frontend/assets/images/products/canvas/canvas-panels.jpg" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="/frontend/assets/images/products/canvas/canvas-panels.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/canvas-panels2.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-4">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Canvas Division<span>></span> </span> Canvas Panels</h6>
                                            <h2 class="mt-4 fw-bold">Canvas<span class="text-accent fw-bold"> Panels</span></h2>
                                        </div>
                                        <p>Primed Canvas is pasted on MDF(CARB
                                            Complaint)/Paperboard</p>
                                        <ul>
                                            <li> Each Canvas Panel is individually shrink wrapped to protect from dust and acidic contact.</li>
                                            <li> Ideal for Oil and Acrylic Painting</li>
                                            <li> Acid free Sizing</li>
                                            <li> Available in a wide range of sizes upto 24” x 36”</li>
                                        </ul>
                                        <div class="table-wrap">
                                            <div class="table-solo-leveling-wrapper">
                                                <table class="table-solo-leveling">
                                                    <tr>
                                                        <td>Pack / Box</td>
                                                        <td>10pcs, 12pcs, 15pcs, 20pcs, 36pcs (Customization is offered)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shrink Pack</td>
                                                        <td>Individual / Twin Pack / Multi Pack</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric Quality</td>
                                                        <td>4oz, 5oz, 6oz, 7oz, 8oz, 10oz</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Priming</td>
                                                        <td>Double / Triple Primed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fabric</td>
                                                        <td>100% Cotton / 100% Linen / Transparent Linen</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-stretcher-bar" role="tabpanel"
                            aria-labelledby="pills-stretcher-bar-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-product-img">
                                        <div class="ms-product-img-container">
                                            <!-- Large Image -->
                                            <div class="zoom-img-container">
                                                <img src="/frontend/assets/images/products/canvas/stretcher-bar.jpg" loading="lazy" alt="Featured" id="ms-featured-img" class="ms-featured-img">
                                            </div>
                                            <!-- Thumbnails -->
                                            <div class="ms-thumbnails">
                                                <img src="/frontend/assets/images/products/canvas/stretcher-bar.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">
                                                <img src="/frontend/assets/images/products/canvas/stretcher-bar2.jpg" alt="Canvas Rolls" class="ms-thumbnail" onclick="changeImage(this)">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ps-md-4">
                                    <div class="product-content">
                                        <div class="product-content-title">
                                            <h6 class=" mb-2"><span>Canvas Division<span>></span> </span> Stretcher Bar</h6>
                                            <h2 class="mt-4 fw-bold">Stretcher<span class="text-accent fw-bold"> Bar</span></h2>
                                        </div>
                                        <p>As dedicated manufacturers of stretcher bars, Indeutsch
                                            Industries provides the essential foundation for artists to bring
                                            their visions to life. We understand that a strong and stable
                                            frame is crucial for stretching canvas and ensuring the longevity
                                            of artwork. That's why we meticulously craft our stretcher bars
                                            using sustainably sourced pine, high-grade wood and employ
                                            precise manufacturing techniques to deliver exceptional quality
                                            and reliability.
                                        </p>
                                        <ul>
                                            <li> Wood: Pine Wood</li>
                                            <li> Profile: 35mmx35mm, 19x35mm, 24x35mm, 38x35mm</li>
                                            <li> Can be customized as per requirement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add HTML Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection