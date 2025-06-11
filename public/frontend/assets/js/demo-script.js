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

//Zoom Effect Start From Here
// document.addEventListener('DOMContentLoaded', function() {
//   const zoomContainers = document.querySelectorAll('.zoom-img-container');

//   zoomContainers.forEach(zoomImgContainer => {
//       const featuredImage = zoomImgContainer.querySelector('.ms-featured-img');
//       const lens = document.createElement('div');
//       lens.classList.add('ms-magnifier-lens');
//       zoomImgContainer.appendChild(lens);

//       const imageWidth = featuredImage.width;
//       const imageHeight = featuredImage.height;
//       const magnification = 2.5; // Adjust this to control zoom level
//       const lensSize = 200; // Lens diameter in pixels
//       lens.style.width = `${lensSize}px`;
//       lens.style.height = `${lensSize}px`;

//       zoomImgContainer.addEventListener('mousemove', function(e) {
//           const containerRect = zoomImgContainer.getBoundingClientRect();
//           const mouseX = e.clientX - containerRect.left;
//           const mouseY = e.clientY - containerRect.top;

//           // Calculate the position of the lens, allowing it to exceed the container
//           let lensOffsetX = mouseX - lensSize / 2;
//           let lensOffsetY = mouseY - lensSize / 2;

//           // Ensure the lens does not go beyond the image boundaries
//           lensOffsetX = Math.max(0, Math.min(lensOffsetX, imageWidth)); // Can exceed container but not image
//           lensOffsetY = Math.max(0, Math.min(lensOffsetY, imageHeight)); // Can exceed container but not image

//           // Position the lens
//           lens.style.left = `${lensOffsetX}px`;
//           lens.style.top = `${lensOffsetY}px`;

//           // Set the background image
//           lens.style.backgroundImage = `url(${featuredImage.src})`;

//           // Adjust the background position based on the lens position and magnification
//           lens.style.backgroundPosition = `-${lensOffsetX * magnification}px -${lensOffsetY * magnification}px`;
//       });

//       zoomImgContainer.addEventListener('mouseleave', function() {
//           lens.style.display = 'none';
//           featuredImage.style.opacity = 1; // Reset image opacity
//       });

//       zoomImgContainer.addEventListener('mouseenter', function() {
//           lens.style.display = 'block';
//       });
//   });
// });
document.addEventListener('DOMContentLoaded', function() {
  const zoomContainers = document.querySelectorAll('.zoom-img-container');

  zoomContainers.forEach(container => {
      const image = container.querySelector('.ms-featured-img');
      let lens = container.querySelector('.ms-magnifier-lens'); // Check if lens already exists

      // Create lens only if it doesn't exist
      if (!lens) {
          lens = document.createElement('div');
          lens.classList.add('ms-magnifier-lens');
          container.appendChild(lens);
      }

      // --- Configuration ---
      const magnification = 2.5;
      const lensSize = 200;
      // --- End Configuration ---
      lens.style.width = `${lensSize}px`;
      lens.style.height = `${lensSize}px`;

      let imgWidth, imgHeight, lensHalfSize, bgWidth, bgHeight;
      function setupZoom() {
          // Use offsetWidth/Height for displayed dimensions
          imgWidth = image.offsetWidth;
          imgHeight = image.offsetHeight;
          if (imgWidth === 0 || imgHeight === 0) {
              console.warn("Image dimensions are 0. Zoom may not work correctly yet.");
              return false;
          }
          lensHalfSize = lensSize / 2;
          // Set background properties for the lens
          lens.style.backgroundImage = `url('${image.src}')`;
          bgWidth = imgWidth * magnification;
          bgHeight = imgHeight * magnification;
          lens.style.backgroundSize = `${bgWidth}px ${bgHeight}px`;

          lens.style.display = 'block';
          return true;
      }

      // Function to handle mouse movement
      function moveLens(e) {
          const rect = image.getBoundingClientRect();
          let mouseX = e.clientX - rect.left;
          let mouseY = e.clientY - rect.top;
          mouseX = Math.max(0, Math.min(mouseX, imgWidth));
          mouseY = Math.max(0, Math.min(mouseY, imgHeight));
          let lensX = mouseX - lensHalfSize;
          let lensY = mouseY - lensHalfSize;
          let bgX = -(mouseX * magnification - lensHalfSize);
          let bgY = -(mouseY * magnification - lensHalfSize);
          lensX = Math.max(0, Math.min(lensX, imgWidth - lensSize));
          lensY = Math.max(0, Math.min(lensY, imgHeight - lensSize));
          bgX = Math.max(-(bgWidth - lensSize), Math.min(0, bgX));
          bgY = Math.max(-(bgHeight - lensSize), Math.min(0, bgY));
          lens.style.left = `${lensX}px`;
          lens.style.top = `${lensY}px`;
          lens.style.backgroundPosition = `${bgX}px ${bgY}px`;
      }

      // --- Event Listeners ---
      container.addEventListener('mouseenter', (e) => {
          if (!setupZoom()) {
              lens.style.display = 'none'; 
              return;
          };
          moveLens(e);
      });

      container.addEventListener('mousemove', moveLens);

      container.addEventListener('mouseleave', () => {
          lens.style.display = 'none';
      });
  });
});
//Tab Linking
$(document).ready(function () {
  // Sync category list with tabs
  $('.product-category-list').on('click', function () {
    // Get the ID of the clicked category (this matches the corresponding tab)
    var categoryId = $(this).attr('id'); // Example: portfolio-bag
    
    // Activate the corresponding tab by matching the ID
    var tabId = '#pills-' + categoryId; // Example: #pills-portfolio-bag
    
    // Activate the tab using Bootstrap's tab system
    $('button[data-bs-target="' + tabId + '"]').tab('show');
    
    // Mark the clicked category list as active
    $('.product-category-list').removeClass('active');
    $(this).addClass('active');
    
    // Optionally, mark the corresponding tab button as active
    $('.nav-link').removeClass('active');
    $('button[data-bs-target="' + tabId + '"]').addClass('active');
  });
  
  // Sync tabs with category list
  $('.nav-link').on('click', function () {
    // Get the target tab content ID from data-bs-target
    var targetTab = $(this).data('bs-target').replace('#', ''); // Example: pills-bags
    
    // Activate the corresponding category list item
    $('.product-category-list').removeClass('active');
    $('#' + targetTab).addClass('active');
  });

  // Optional: Auto-activate first category and tab on page load
  $('.nav-link:first').addClass('active');
  $('.product-category-list:first').addClass('active');
  $('#components-pills-tabContent .tab-pane:first').addClass('show active');
});

/* Thumbnail Arrows */
 document.addEventListener('DOMContentLoaded', function () {
        // Scope JavaScript to the specific "Canvas Rolls" product tab
        const canvasRollsProductSection = document.getElementById('pills-canvas-rolls');

        // If this specific product section isn't on the page, don't run the script
        if (!canvasRollsProductSection) {
            // console.warn('Canvas Rolls product section #pills-canvas-rolls not found. Script for this section will not initialize.');
            return;
        }

        const subTabsContainer = canvasRollsProductSection.querySelector('#canvasRollsSubTabs');
        const featuredImg = canvasRollsProductSection.querySelector('#ms-featured-img');
        const thumbnailsContainer = canvasRollsProductSection.querySelector('#ms-thumbnails-container');

        // Ensure all necessary elements are found before proceeding
        if (!subTabsContainer || !featuredImg || !thumbnailsContainer) {
            // console.error('One or more key elements (subTabsContainer, featuredImg, thumbnailsContainer) not found within #pills-canvas-rolls.');
            return;
        }

        // Updates images based on the active sub-tab
        function updateProductVariantImages(activeTabButton) {
            if (!activeTabButton) return; // Should not happen if called from event listener

            const mainImageSrc = activeTabButton.dataset.mainImage;
            const thumbnailsData = JSON.parse(activeTabButton.dataset.thumbnails || '[]');
            const variantName = activeTabButton.textContent.trim();

            // Update main featured image
            if (mainImageSrc) {
                featuredImg.src = mainImageSrc;
                featuredImg.alt = `Featured image for ${variantName}`;
            } else if (thumbnailsData.length > 0) {
                featuredImg.src = thumbnailsData[0].src; // Fallback to first thumbnail
                featuredImg.alt = `Featured image for ${variantName}`;
            } else { // Fallback if no images are defined
                featuredImg.src = 'https://placehold.co/600x400/e1e1e1/909090?text=Image+Not+Available';
                featuredImg.alt = 'Image Not Available';
            }

            // Clear and repopulate thumbnails
            thumbnailsContainer.innerHTML = '';
            if (thumbnailsData.length > 0) {
                thumbnailsData.forEach((thumbData, index) => {
                    const img = document.createElement('img');
                    img.src = thumbData.src;
                    img.alt = thumbData.alt || `Thumbnail for ${variantName} ${index + 1}`;
                    img.classList.add('ms-thumbnail');
                    
                    // Set the first thumbnail as active if its src matches the featured image
                    if (index === 0 && featuredImg.src === thumbData.src) {
                         img.classList.add('active-thumbnail');
                    }

                    img.onclick = function() {
                        featuredImg.src = this.src;
                        featuredImg.alt = this.alt;
                        // Remove active class from all thumbnails in this specific container
                        thumbnailsContainer.querySelectorAll('.ms-thumbnail').forEach(t => t.classList.remove('active-thumbnail'));
                        // Add active class to the clicked one
                        this.classList.add('active-thumbnail');
                    };
                    thumbnailsContainer.appendChild(img);
                });
            } else {
                 // If the main image for the tab is the default canvas-rolls.png (initial state), show its thumbnail
                if (featuredImg.src.includes('/frontend/assets/images/products/canvas/canvas-rolls.png')) {
                    const defaultThumb = document.createElement('img');
                    defaultThumb.src = '/frontend/assets/images/products/canvas/canvas-rolls.png';
                    defaultThumb.alt = 'Canvas Rolls';
                    defaultThumb.classList.add('ms-thumbnail', 'active-thumbnail');
                    // No onclick needed if it's the only thumbnail and already displayed
                    thumbnailsContainer.appendChild(defaultThumb);
                } else {
                    thumbnailsContainer.innerHTML = '<p class="text-muted small">No specific thumbnails for this variant.</p>';
                }
            }
            // Ensure at least one thumbnail is active if thumbnails exist
            if (thumbnailsContainer.querySelector('.ms-thumbnail') && !thumbnailsContainer.querySelector('.ms-thumbnail.active-thumbnail')) {
                thumbnailsContainer.querySelector('.ms-thumbnail').classList.add('active-thumbnail');
            }
        }

        // Event listener for sub-tab changes
        const subTabButtons = subTabsContainer.querySelectorAll('button[data-bs-toggle="pill"]');
        subTabButtons.forEach(button => {
            button.addEventListener('shown.bs.tab', function (event) {
                updateProductVariantImages(event.target); // event.target is the newly activated tab button
            });
        });

        // Initialize images for the initially active sub-tab when the page loads
        const activeSubTabButton = subTabsContainer.querySelector('button.active[data-bs-toggle="pill"]');
        if (activeSubTabButton) {
            updateProductVariantImages(activeSubTabButton);
        }
    });

    //Mouse Grab
document.querySelectorAll('.table-solo-leveling-wrapper').forEach((wrapper) => {
  let isDragging = false;
  let startX;
  let scrollLeft;

  wrapper.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - wrapper.offsetLeft;
    scrollLeft = wrapper.scrollLeft;
  });

  wrapper.addEventListener('mouseleave', () => {
    isDragging = false;
  });

  wrapper.addEventListener('mouseup', () => {
    isDragging = false;
  });

  wrapper.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - wrapper.offsetLeft;
    const walk = (x - startX) * 1; // control scroll speed
    wrapper.scrollLeft = scrollLeft - walk;
  });
});
//Scroll to tab
document.addEventListener('DOMContentLoaded', function () {
    const tabContainer = document.querySelector('#canvasRollsSubTabs');
    const tabContent = document.querySelector('#canvasRollsSubTabContent');

    if (tabContainer) {
        const tabButtons = tabContainer.querySelectorAll('.nav-link');

        tabButtons.forEach(button => {
            button.addEventListener('shown.bs.tab', function (event) {
                const targetPaneId = event.target.getAttribute('data-bs-target');
                const targetPane = document.querySelector(targetPaneId);

                if (targetPane) {
                    // Smoothly scroll the tab content into view
                    targetPane.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
});