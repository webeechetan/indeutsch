(function ($) {
    $(document).ready(function () {
      "use strict";
  
  
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
        setTimeout(function() {
          locoScroll.update();
        }, 400); // Delay for 1 second
        return false;
      });
  
  
      /* HAMBURGER */
      // $('.hamburger').on('click', function () {
      //   console.log('click script.js');
      //   $(".hamburger").toggleClass("active")
      //   $(".sidebar-widget").toggleClass("active")
      //   $(".section-wrapper").toggleClass("no-transform")
      // })
  
      /* SEARCH */
      // $('.search-button').on('click', function () {
      //   $(".search-box").toggleClass("active")
      //   $(".section-wrapper").toggleClass("no-transform")
      // })
  
  
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
    if ($("body").not(".is-mobile").hasClass("alith-magic-cursor")) {
      const cursor = document.querySelector(".cursor");
      const cursorScale = document.querySelectorAll(".cursor-scale");
      document.addEventListener("pointermove", function (e) {
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

    // Story Slider
    var storyYears = new Swiper('.story-years', {
      slidesPerView: 6,
      freeMode: true,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      },
    });

    var storySliderContent = new Swiper('.story-slider-content', {
      navigation: {
        nextEl: '.story-next',
        prevEl: '.story-prev',
      },
      thumbs: {
        swiper: storyYears,
      }
    });

    var storySliderImg = new Swiper('.story-slider-img', {
      mousewheel: true,
      effect: "cube",
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      thumbs: {
        swiper: storyYears,
      }
    });

    //storySliderContent.controller.control = storySliderImg;
    // storySliderImg.controller.control = storySliderContent;

    // Product Slider
    var proSlider = new Swiper('.pro_slider', {
      slidesPerView: 4,
      spaceBetween: 30,
      slidesPerView: 'auto',
      grabCursor: true,
      loop: true,
      speed: 700,
      navigation: false
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

    // Overview 
    //  gsap.registerPlugin(ScrollTrigger);

    // LOCOMOTIVE
    // const locoScroll = new LocomotiveScroll({
    //   el: document.querySelector(".smooth-scroll"),
    //   smooth: true,
    //   class: 'is-inview'
    // });

    // locoScroll.on("scroll", ScrollTrigger.update);
    
    // ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
    // ScrollTrigger.refresh();

    //  === Issue from here === //
    //Overview 
    // const overview_img = gsap.timeline({
    //   scrollTrigger: {
    //     trigger: ".overview-pin",
    //     scrub: 0,
    //     start: "top end",
    //     end: "+=100%",
    //     pin: true,
    //     markers: false
    //   }
    // });

    // overview_img.to(".overview-sec-img", {
    //   width: '100%',
    //   height: '100%'
    // })

    // overview_img.to(".overview-sec-bg-overlay", {
    //   opacity: 0.5
    // })
    
    // overview_img.to(".usp-counters", {
    //   y: 0
    // });
// Define a variable to track if animation has been triggered
let animationTriggered = false;

// Create a GSAP timeline for the stats animation
const statsAnimation = gsap.timeline();

// Add animations to the timeline for the stats
statsAnimation.to(".usp-counters", {
    y: 0,
    duration: 0.1
});

// ScrollTrigger to trigger stats animation when element is in viewport
gsap.to('.overview-pin', {
    scrollTrigger: {
        trigger: ".overview-pin",
        start: "top end", 
        end: "+=100%",
        once: true,
        onEnter: () => {
            if (!animationTriggered) {
                // Trigger the stats animation if it hasn't been triggered yet
                statsAnimation.play();
            }
        }
    }
});

    //  === Issue end here === //
  
    // ODOMETER
    // $(".odometer").each(function () {
    //   $(this).html($(this).data('count'));
    // });

  

})(jQuery);

// Product Filters
document.addEventListener("DOMContentLoaded", () => {
  const checkboxContainers = document.querySelectorAll(".product-category-list");
  let currentlyCheckedCheckbox = document.querySelector(".product-category-list.active");
  const navLinks = document.querySelectorAll(".nav-link");

  checkboxContainers.forEach((container) => {
    const checkbox = container;
    const category = checkbox.id.trim().toLowerCase();

    checkbox.addEventListener("click", () => {
      uncheckPreviousCheckbox(checkbox);

      if (currentlyCheckedCheckbox && currentlyCheckedCheckbox !== checkbox) {
        currentlyCheckedCheckbox.classList.remove("active");
      }

      currentlyCheckedCheckbox = checkbox;

      activateTab(category);
      updateLabelColor(category);

      console.log("Clicked on " + category);
    });
  });

  function uncheckPreviousCheckbox(currentCheckbox) {
    checkboxContainers.forEach((container) => {
      const checkbox = container;

      if (checkbox !== currentCheckbox) {
        checkbox.classList.remove("active");
      }
    });
  }

  function activateTab(category) {
    const tab = document.querySelector(`#pills-${category}-tab`);
    const tabPane = document.querySelector(`#pills-${category}`);

    document.querySelectorAll('.product-category-tab .nav-link').forEach(link => link.classList.remove('active'));
    document.querySelectorAll('.product-category-tab .tab-pane').forEach(pane => pane.classList.remove('active', 'show'));

    if (tab && tabPane) {
      tab.classList.add('active');
      tabPane.classList.add('active', 'show');
    }
  }

  function updateLabelColor(category) {
    checkboxContainers.forEach((container) => {
      const checkbox = container;

      if (checkbox.id.trim().toLowerCase() === category) {
        checkbox.classList.add("active");
      } else {
        checkbox.classList.remove("active");
      }
    });
  }

  // Additional for category tabs
  navLinks.forEach((navLink, index) => {
    navLink.addEventListener("click", () => {
      const category = checkboxContainers[index].id.trim().toLowerCase();
      activateTab(category);
      updateLabelColor(category);
    });
  });
});

// Canvas  Tabs

function onViewProductClick(category) {

  sessionStorage.setItem('selectedCategory', category);

  window.location.href = 'artistcanvas.html';
}

document.addEventListener('DOMContentLoaded', function() {

  var selectedCategory = sessionStorage.getItem('selectedCategory');

  sessionStorage.removeItem('selectedCategory');

  if (selectedCategory) {

      document.querySelectorAll('.nav-link').forEach(function(tabLink) {
          tabLink.classList.remove('active');
      });

      var tab = document.querySelector('#pills-' + selectedCategory + '-tab');
      if (tab) {
          tab.classList.add('active');
          tab.click(); 
      }
  }
});




// Accordion Collapse For Product Category Tab
document.addEventListener("DOMContentLoaded", () => {
  const accordionButtons = document.querySelectorAll(".accordion-button");

  accordionButtons.forEach(button => {
    button.addEventListener("click", () => {
      const targetAccordionId = button.getAttribute("data-bs-target");
      const targetAccordion = document.querySelector(targetAccordionId);

      targetAccordion.classList.toggle("show");

      const otherAccordionSections = document.querySelectorAll(".accordion-collapse:not(" + targetAccordionId + ")");
      otherAccordionSections.forEach(section => {
        section.classList.remove("show");
      });
    });
  });
});

// Product Slider
var swiper = new Swiper(".product-slider", {
  slidesPerView: 3,
  spaceBetween: 10,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  mousewheel: true,
  keyboard: true,
  lazy: {
      loadOnTransitionStart: true,
      preloadImages: false,
  },
});
//Sub Menu Dropdown
function closeDropdown() {
  $('.site-dropdown a span').removeClass('rotate');
  $('.site-submenu').removeClass('site-submenu-open');
}

// For desktop
if ($(window).width() >= 768) {
  var closeTimer; 

  $('.site-dropdown').hover(function () { 

    $('.site-dropdown a span').addClass('rotate');
    $('.site-submenu').addClass('site-submenu-open');
    
    clearTimeout(closeTimer);
  }, function() {

    closeTimer = setTimeout(function() {
      closeDropdown();
    }, 500); 
  });

  // Function to close the dropdown
  function closeDropdown() {
    $('.site-dropdown a span').removeClass('rotate');
    $('.site-submenu').removeClass('site-submenu-open');
  }
}


// For mobile devices
if ($(window).width() < 768) {
  $('.site-dropdown').on('click', function() {
    $('.site-dropdown a span').toggleClass('rotate');
    $('.site-submenu').toggleClass('site-submenu-open');
  });
}

// Close dropdown when clicking outside of it
$(document).on('click', function (event) {
  if (!$(event.target).closest('.site-submenu').length && !$(event.target).closest('.site-dropdown').length) {
    closeDropdown();
  }
});


// Single Product Gallery

let featuredImg = document.getElementById('featured-img');
let smallImgs = document.getElementsByClassName('small-img');

for (let i = 0; i < smallImgs.length; i++){
  smallImgs[i].addEventListener('click', () => {
    featuredImg.src = smallImgs[i].src;
    featuredImg.loading = 'lazy';
    for (let j = 0; j < smallImgs.length; j++){
      if (i == j) {
        smallImgs[j].classList.add('product-slider-img-border');
      }
      else {
        smallImgs[j].classList.remove('product-slider-img-border');
      }
    }
  })
}

