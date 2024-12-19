<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indeutsch</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- SOCIAL MEDIA META -->

  <meta property="og:description" content="Indeutsch">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="Indeutsch">
  <meta property="og:title" content="Indeutsch">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">

  <!-- FAVICON FILES -->
  <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
  <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
  <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
  <!-- Favicon using PNG image -->
  <link rel="icon" href="favicon.png" type="image/png">

  <!-- CSS FILES -->

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/odometer.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fancybox.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body
  @if(request()->routeIs('viewIndex'))
  class="alith-magic-cursor navbar-overlap"
  @else
  class="alith-magic-cursor"
  @endif
  >

  <!-- Preloader -->

  <div class="preloader d-none" id="preloader">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
      <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    </svg>
    <div class="inner">
      <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
      <figure><img src="{{ asset('frontend') }}/assets/images/preloader.png" alt="Image"></figure>
      <small>Loading...</small>
    </div>
  </div>

  <!-- Page Transition -->
  <!-- <div class="page-transition">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1"><path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path></svg>
    </div> -->

  <!-- Cursors -->
  <div class="cursor">
    <span class="play">
      <img src="{{ asset('frontend') }}/assets/svg/cursor-play.svg" alt="Indeutsch">
      <span>Play</span>
    </span>
    <span class="drag">
      <img src="{{ asset('frontend') }}/assets/svg/cursor-drag.svg" alt="Indeutsch">
      <span>Drag</span>
    </span>

    <span class="view">
      <img src="{{ asset('frontend') }}/assets/svg/cursor-view.svg" alt="Indeutsch">
      <span>View</span>
    </span>
  </div>

  <!-- Page Main Body -->
  <div class="section-wrapper">
    <!-- Sidebar -->
    <x-frontend.sidebar />

    <!-- Header Navbar -->
    <x-frontend.header />
    @yield('content')


    <!-- Footer -->
    <x-frontend.footer />
    <!-- JS Files -->

    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/gsap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ScrollTrigger.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/demo-script.js"></script>


    {{-- <script>

      $(document).ready(function(){

        const data = {
            brushes: ["Artist Brushes", "Cosmetic Brushes", "Nail Brushes", "Miniature Brushes", "Industrial Brushes"],
            canvas: ["Canvas Rolls", "Stretched Canvas", "Canvas Panels", "Canvas Pad"],
            components: ["Ferrules", "Handles", "Precision Components", "Cosmetic Components"],
            art_accessories: ["Easels", "Painting Knife", "Brush Bags", "Brush Wraps", "Aprons"]
        };   

        $('#category').change(function(){
          var category = $(this).val();
          var subcategoryDropdown = $('#subcategory');
          subcategoryDropdown.empty();

          if (category !== '') {
            $.each(data[category], function(index, value){
              subcategoryDropdown.append($('<option>', {
                value: value.toLowerCase().replace(/ /g, '-'),
                text: value
              }));
            });
          }
          else {
            subcategoryDropdown.append($('<option>', {
              text: 'Select Your Sub Category',
              selected: 'selected'
            }));
          }
        });
      });
    </script> --}}
</body>

</html>