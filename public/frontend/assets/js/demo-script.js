(function ($) {
  $(document).ready(function () {
    "use strict";
      gsap.registerPlugin(ScrollTrigger);

     // Overview 
      const overview_img = gsap.timeline({
        scrollTrigger: {
          trigger: ".overview-pin",
          scrub: 0.5,
          start: "top end",
          end: "+=100%",
          pin: true,
          markers: false
        }
      });

      overview_img.to(".overview-sec-content-wrap", {
        y: -50,
        opacity: 0
      }, 0.2)

      .to(".overview-sec-img", {
        width: '100%',
        height: '100%'
      }, 0.2)

      .to(".overview-sec-bg-overlay", {
        opacity: 0.5
      }, 0.5)

      .to(".overview-cover", {
        scale: 1.2
      }, 0.7)

      .to(".usp-counters > ul li:nth-child(1) > div", {
        opacity: 1,
        y: 0
      }, 0.6)
      
      .to(".usp-counters > ul li:nth-child(2) > div", {
        opacity: 1,
        y: 0
      }, 0.7)

      .to(".usp-counters > ul li:nth-child(3) > div", {
        opacity: 1,
        y: 0
      }, 0.8);

      // ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
      ScrollTrigger.refresh();


    // BACK BUTTON RELOAD
    window.onpageshow = function (event) {
      if (event.persisted) {
        window.location.reload()
      }
    };


    // ACCORDION
    var allPanels = $('.accordion > dd').hide();
    $('.accordion > dt > a').click(function () {
      var panel = $(this).parent().next();
      panel.slideToggle();
      setTimeout(function () {
        locoScroll.update();
      }, 400); // Delay for 1 second
      return false;
    });

    // Site Sub Menu
    $('.site-dropdown > span').on('click', function () {
      $(".site-submenu").toggleClass("open");
    }); 

    /* HAMBURGER */
    $('.hamburger').on('click', function () {
      $(".hamburger").toggleClass("active")
      $(".sidebar-widget").toggleClass("active")
      $(".section-wrapper").toggleClass("no-transform")
    })

    /* SEARCH */
    $('.search-button').on('click', function () {
      $(".search-box").toggleClass("active")
      $(".section-wrapper").toggleClass("no-transform")
    })


    // PAGE TRANSITION
    $('body a').on('click', function (e) {

      var target = $(this).attr('target');
      var fancybox = $(this).data('fancybox');
      var url = this.getAttribute("href");
      if (target != '_blank' && typeof fancybox == 'undefined' && url.indexOf('#') < 0) {


        e.preventDefault();
        var url = this.getAttribute("href");
        if (url.indexOf('#') != -1) {
          var hash = url.substring(url.indexOf('#'));


          if ($('body ' + hash).length != 0) {
            $('.page-transition').removeClass("active");


          }
        } else {
          $('.page-transition').toggleClass("active");
          setTimeout(function () {
            window.location = url;
          }, 1000);

        }
      }
    });


    // TAB
    $(".tab-nav li").on('click', function (e) {
      $(".tab-item").hide();
      $(".tab-nav li").removeClass('active');
      $(this).addClass("active");
      var selected_tab = $(this).find("a").attr("href");
      $(selected_tab).stop().show();
      return false;
    });

    if ($("body").not(".is-mobile").hasClass("alith-magic-cursor")) {

      const cursor = document.querySelector(".cursor");
      const cursorScale = document.querySelectorAll(".cursor-scale");

      document.body.addEventListener("pointermove", function (e) {
        positionCircle(e);
      });

      function positionCircle(e) {
        let relX = e.clientX;
        let relY = e.clientY;
        TweenMax.from(cursor, 0.3, {
          x: relX - 50,
          y: relY - 70
        });
      }

      const cursorPlay = document.querySelectorAll(".cursor-play");
      
      cursorPlay.forEach((cursorPlay) => {
        cursorPlay.addEventListener("mouseenter", function () {
          document.querySelector(".cursor").classList.add("cursor-play");
        });

        cursorPlay.addEventListener("mouseleave", function () {
          document.querySelector(".cursor").classList.remove("cursor-play");
        });
      });

      const cursorDrag = document.querySelectorAll(".swiper-container");
      
      cursorDrag.forEach((cursorDrag) => {
        cursorDrag.addEventListener("mouseenter", function () {
          document.querySelector(".cursor").classList.add("cursor-drag");
        });

        cursorDrag.addEventListener("mouseleave", function () {
          document.querySelector(".cursor").classList.remove("cursor-drag");
        });
      });

      const cursorView = document.querySelectorAll(".cursor-view");

      cursorView.forEach((cursorView) => {
        cursorView.addEventListener("mouseenter", function () {
          document.querySelector(".cursor").classList.add("cursor-view");
        });

        cursorView.addEventListener("mouseleave", function () {
          document.querySelector(".cursor").classList.remove("cursor-view");
        });
      });
      
    } else {
      $(".cursor").remove();
    }


  });
  // END DOCUMENT READY


  // DATA BACKGROUND IMAGE
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", "url(" + $(this).data("background") + ")");
    }
  });


  // DATA BACKGROUND COLOR
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", $(this).data("background"));
    }
  });

  // Magic cursor (no effect on small screens!)


  // Story Slider
  var storyYears = new Swiper('.story-years', {
    slidesPerView: 6,
    breakpoints: {
      360: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  var storyMainSlider = new Swiper('.story-slider-main', {
    fadeEffect: { 
      crossFade: true 
    },
    effect: "fade",
    speed: 600,
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    keyboard: {
      enabled: true,
    },
    thumbs: {
      swiper: storyYears,
    }
  });

  storyMainSlider.controller.control = storyYears;

  // Product Slider
  var proSlider = new Swiper('.pro_slider', {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerView: 'auto',
    loop: true,
    speed: 700,
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    }
  });


  // IMAGE BOX CAROUSEL
  var swiper = new Swiper('.image-box-carousel', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 60,
      },
    }
  });


  // SLIDER
  var sliderimages = new Swiper('.slider-images', {
    spaceBetween: 0,
    direction: 'vertical',
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    touchRatio: 0,

    pagination: {
      el: '.swiper-fraction',
      type: 'fraction',
    },


    loop: true,
    loopedSlides: 1,
    thumbs: {
      swiper: slidertexts
    }
  });


  // SLIDER THUMBS
  var slidertexts = new Swiper('.slider-texts', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 1,
    touchRatio: 0,
    slideToClickedSlide: false,
    loop: true,
    loopedSlides: 1,

    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },

  });

  if ($(".slider-images")[0]) {
    sliderimages.controller.control = slidertexts;
    slidertexts.controller.control = sliderimages;
  } else {

  }


  // KINETIC TEXTS
  var slidertexts = new Swiper('.kinetic-texts', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 1,
    touchRatio: 0,
    slideToClickedSlide: false,
    loop: true,
    loopedSlides: 1,
    effect: 'fade',
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },

  });


  /* COLLECTION SLIDER */

  // SLIDER
  var artsliderimages = new Swiper('.art-slider-images', {
    spaceBetween: 0,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    loop: true,
    loopedSlides: 4,
    thumbs: {
      swiper: artslidercontent
    },
    breakpoints: {
      1024: {
        loopedSlides: 3,
      },
      768: {
        loopedSlides: 2,
      },
      640: {
        loopedSlides: 1
      },
      320: {
        loopedSlides: 1
      }
    }
  });


  // SLIDER THUMBS
  var artslidercontent = new Swiper('.art-slider-content', {
    spaceBetween: 30,
    direction: 'vertical',
    slidesPerView: 4,
    loop: true,
    loopedSlides: 4,
    breakpoints: {
      1024: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 2
      },
      640: {
        slidesPerView: 1
      },
      320: {
        slidesPerView: 1
      }
    }
  });

  if ($(".art-slider-images")[0]) {
    artsliderimages.controller.control = artslidercontent;
    artslidercontent.controller.control = artsliderimages;
  } else {

  };


  // PRELOADER
  let settings = {
    progressSize: 320,
    progressColor: '#ffffff',
    lineWidth: 2,
    lineCap: 'round',
    preloaderAnimationDuration: 800,
    startDegree: -90,
    finalDegree: 270
  }

  function setAttributes(elem, attrs) {

    for (let key in attrs) {
      elem.setAttribute(key, attrs[key]);
    }

  }

  let preloader = document.createElement('div'),
    canvas = document.createElement('canvas'),
    size;

  (function () {

    let width = window.innerWidth,
      height = window.innerHeight;

    if (width > height) {

      size = Math.min(settings.progressSize, height / 2);

    } else {

      size = Math.min(settings.progressSize, width - 50);

    }

  })();

  setAttributes(preloader, {
    class: "preloader",
    id: 'preloader',
    style: 'transition: opacity ' + settings.preloaderAnimationDuration / 1000 + 's'
  });
  setAttributes(canvas, {
    class: 'progress-bar',
    id: 'progress-bar',
    width: settings.progressSize,
    height: settings.progressSize
  });


  preloader = document.getElementById('preloader');

  let progressBar = document.getElementById('progress-bar'),
    images = document.images,
    imagesAmount = images.length,
    imagesLoaded = 0,
    barCtx = progressBar.getContext('2d'),
    circleCenterX = progressBar.width / 2,
    circleCenterY = progressBar.height / 2,
    circleRadius = circleCenterX - settings.lineWidth,
    degreesPerPercent = 3.6,
    currentProgress = 0,
    showedProgress = 0,
    progressStep = 0,
    progressDelta = 0,
    startTime = null,
    running;

  (function () {

    return requestAnimationFrame
      || mozRequestAnimationFrame
      || webkitRequestAnimationFrame
      || oRequestAnimationFrame
      || msRequestAnimationFrame
      || function (callback) {
        setTimeout(callback, 1000 / 60);
      };

  })();

  Math.radians = function (degrees) {
    return degrees * Math.PI / 180;
  };


  progressBar.style.opacity = settings.progressOpacity;
  barCtx.strokeStyle = settings.progressColor;
  barCtx.lineWidth = settings.lineWidth;
  barCtx.lineCap = settings.lineCap;
  let angleMultiplier = (Math.abs(settings.startDegree) + Math.abs(settings.finalDegree)) / 360;
  let startAngle = Math.radians(settings.startDegree);
  document.body.style.overflowY = 'hidden';
  preloader.style.backgroundColor = settings.preloaderBackground;


  for (let i = 0; i < imagesAmount; i++) {

    let imageClone = new Image();
    imageClone.onload = onImageLoad;
    imageClone.onerror = onImageLoad;
    imageClone.src = images[i].src;

  }

  function onImageLoad() {

    if (running === true) running = false;

    imagesLoaded++;

    if (imagesLoaded >= imagesAmount) hidePreloader();

    progressStep = showedProgress;
    currentProgress = ((100 / imagesAmount) * imagesLoaded) << 0;
    progressDelta = currentProgress - showedProgress;

    setTimeout(function () {

      if (startTime === null) startTime = performance.now();
      running = true;
      animate();

    }, 10);

  }

  function animate() {

    if (running === false) {
      startTime = null;
      return;
    }

    let timeDelta = Math.min(1, (performance.now() - startTime) / settings.preloaderAnimationDuration);
    showedProgress = progressStep + (progressDelta * timeDelta);

    if (timeDelta <= 1) {


      barCtx.clearRect(0, 0, progressBar.width, progressBar.height);
      barCtx.beginPath();
      barCtx.arc(circleCenterX, circleCenterY, circleRadius, startAngle, (Math.radians(showedProgress * degreesPerPercent) * angleMultiplier) + startAngle);
      barCtx.stroke();
      requestAnimationFrame(animate);

    } else {
      startTime = null;
    }

  }

  function hidePreloader() {
    setTimeout(function () {
      $("body").addClass("page-loaded");
      document.body.style.overflowY = '';
    }, settings.preloaderAnimationDuration + 100);
  }
  var resizeTimer;

  // ODOMETER
  $(".odometer").each(function () {
    $(this).html($(this).data('count'));
  });

  // load certificate dynamically
  $('.certifications-btn').click(function() {
    var pdfUrl = $(this).data('pdf-url');
    $('#pdfViewer').attr('src', pdfUrl+'#toolbar=0');
    $('#exampleModal').modal('show');
});

})(jQuery);
// Product Thumbnail Style MS
function changeImage(thumbnail) {
  const featuredImg = thumbnail.closest('.ms-product-img-container').querySelector('.ms-featured-img');
  featuredImg.src = thumbnail.src;
}

// Read more
    function toggleContent() {
        const fullContent = document.querySelector('.content-full');
        const button = document.querySelector('.read-more');

        if (fullContent.style.display === 'none') {
            fullContent.style.display = 'block';
            button.innerText = 'Read Less';
        } else {
            fullContent.style.display = 'none';
            button.innerText = 'Read More';
        }
    }

// // // Image Zoom Effect MS
// document.addEventListener('DOMContentLoaded', function() {
//   const zoomImgContainer = document.querySelector('.zoom-img-container');
//   const featuredImage = document.querySelector('.ms-featured-img');
//   const lens = document.createElement('div');
//   lens.classList.add('ms-magnifier-lens');
//   zoomImgContainer.appendChild(lens);

//   // Get the dimensions of the featured image
//   const imageWidth = featuredImage.width;
//   const imageHeight = featuredImage.height;

//   // Set up the magnification (zoom level)
//   const magnification = 2.5; // Adjust this to control zoom level

//   // Lens size (adjust this based on your desired lens size)
//   const lensSize = 150; // Lens diameter in pixels
//   lens.style.width = `${lensSize}px`;
//   lens.style.height = `${lensSize}px`;

//   // Lens movement and magnification logic
//   zoomImgContainer.addEventListener('mousemove', function(e) {
//       const containerRect = zoomImgContainer.getBoundingClientRect();
//       const mouseX = e.clientX - containerRect.left;
//       const mouseY = e.clientY - containerRect.top;

//       // Calculate the position of the lens, ensuring it stays within image bounds
//       const lensOffsetX = Math.min(Math.max(mouseX - lensSize / 2, 0), imageWidth - lensSize);
//       const lensOffsetY = Math.min(Math.max(mouseY - lensSize / 2, 0), imageHeight - lensSize);

//       // Position the lens directly under the cursor
//       lens.style.left = `${lensOffsetX}px`;
//       lens.style.top = `${lensOffsetY}px`;

//       // Set the background image and apply magnification to simulate zoom
//       lens.style.backgroundImage = `url(${featuredImage.src})`;
//       lens.style.backgroundSize = `${imageWidth * magnification}px ${imageHeight * magnification}px`;

//       // Adjust the background position to center the zoomed-in view
//       lens.style.backgroundPosition = `-${lensOffsetX * magnification}px -${lensOffsetY * magnification}px`;
//   });

//   // Hide the lens when the mouse leaves the container
//   zoomImgContainer.addEventListener('mouseleave', function() {
//       lens.style.display = 'none';
//       featuredImage.style.opacity = 1; // Reset image opacity
//   });

//   // Show the lens when mouse enters
//   zoomImgContainer.addEventListener('mouseenter', function() {
//       lens.style.display = 'block';
//   });
// });
