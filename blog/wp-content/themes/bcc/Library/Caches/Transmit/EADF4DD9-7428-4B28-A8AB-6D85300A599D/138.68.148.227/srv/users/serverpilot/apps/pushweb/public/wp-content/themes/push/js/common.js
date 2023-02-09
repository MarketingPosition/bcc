$(function() {
  // Script for menu button
  $('.burger-menu').on('click', function() {
    if ($(this).hasClass("burger-menu-clicked")) {
      $(this).removeClass("burger-menu-clicked");
      $(this).addClass("burger-menu-closing");
    } else {
      $(this).addClass("burger-menu-clicked");
      $(this).removeClass("burger-menu-closing");
    }
  });
  $('.header__menu-link--dropdowned').click(function(e) {
    e.preventDefault();
    $(this).next('.header__menu__dropdown').stop().slideToggle('normal');
  });
  $('.header__toggle').click(function() {
    $('.header__mobile').stop().slideToggle('normal');
    $(this).stop().toggleClass('active');
  });

  $(window).on('scroll', function() {
    if ($('.why-work').length > 0) {
      var stepsWrap = $('.why-work').offset().top - 200;
      if ($(this).scrollTop() > stepsWrap) {
        $('.count').each(function() {
          $(this).prop('Counter', -1).animate({
            Counter: $(this).attr("data-number")
          }, {
            duration: 1000,
            easing: 'swing',
            step: function(now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
        $(window).off('scroll');
      }
    }
  });

  $('.reviews__items').slick({
    infinite: true,
    dots: true,
    accessibility: false,
    autoplay: false,
    autoplaySpeed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    cssEase: 'ease',
    pauseOnHover: true,
    adaptiveHeight: true, // works only with one slide
    useCSS: true, // - mast be disabled to use custom animaton
    // easing: 'easeInOutElastic', // - custom animation(must include jquery.easing.js)
    speed: 700,
    vertical: false, // - vertical slider
    draggable: true, // - enable drag slides on desctop
    touchMove: true // - enable moves slided with touch
  });

  $('.advantages__toggle').click(function() {
    $(this).parent().parent().next('.advantages__info').stop().slideToggle('normal');
  });
  $('.push-product__toggle').click(function() {
    $(this).parent().next('.push-product__item__info').stop().slideToggle('normal');
  });

});

$(document).ready(function() {
  if ($(window).innerWidth() < 872) {
    sliderInit();
    sliderInit2();
  }
});

$(document).ready(function() {
  $(window).resize(function() {
    if ($(window).innerWidth() < 872) {
      sliderInit();
      sliderInit2();
    }
  });
});

function sliderInit() {
  if ($('.customers__items').length > 0) {
    $('.customers__items').slick({
      infinite: true,
      autoplay: false,
      accessibility: false,
      autoplaySpeed: 1000,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      cssEase: 'ease',
      pauseOnHover: true,
      adaptiveHeight: true, // works only with one slide
      useCSS: true, // - mast be disabled to use custom animaton
      // easing: 'easeInOutElastic', // - custom animation(must include jquery.easing.js)
      speed: 700,
      vertical: false, // - vertical slider
      draggable: true, // - enable drag slides on desctop
      touchMove: true, // - enable moves slided with touch
      centerMode: true,
      centerPadding: '60px',
      responsive: [{
          breakpoint: 6000,
          settings: "unslick"
        },
        {
          breakpoint: 872,
          settings: {
            centerPadding: '60px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 550,
          settings: {
            centerMode: false,
            slidesToShow: 1
          }
        }
      ]
    });
  }
}


function sliderInit2() {
  if ($('.success__items').length > 0) {
    $('.success__items').slick({
      infinite: true,
      autoplay: false,
      accessibility: false,
      autoplaySpeed: 1000,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      cssEase: 'ease',
      pauseOnHover: true,
      adaptiveHeight: true, // works only with one slide
      useCSS: true, // - mast be disabled to use custom animaton
      // easing: 'easeInOutElastic', // - custom animation(must include jquery.easing.js)
      speed: 700,
      vertical: false, // - vertical slider
      draggable: true, // - enable drag slides on desctop
      touchMove: true, // - enable moves slided with touch
      centerMode: true,
      centerPadding: '60px',
      responsive: [{
          breakpoint: 6000,
          settings: "unslick"
        },
        {
          breakpoint: 872,
          settings: {
            centerPadding: '60px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 550,
          settings: {
            centerMode: false,
            slidesToShow: 1
          }
        }
      ]
    });
  }
}

// Magnific Popup

jQuery(document).ready(function($) {
  $('a[href*="youtube.com/watch"]').magnificPopup({
    //disableOn: 700,
    type: 'iframe',
    iframe: {
      patterns: {
        youtube: {
          index: 'youtube.com',
          id: 'v=',
          src: '//www.youtube.com/embed/%id%?rel=0&autoplay=1'
        }
      }
    },
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
});

// Monster Mash

$('.msh-btn').magnificPopup({
  items: [{
    src: '//e.issuu.com/embed.html#27249140/67606479',
    type: 'iframe' // this overrides default type
  }, ],
});

// Monster Mash Ends Here

$(document).ready(function() {
  if ($(window).innerWidth() > 576) {
    $('.advantages__info').attr('style', 'display: block;');
    $('.push-help__item__info').attr('style', 'display: block;');
  } else {
    $('.advantages__info').attr('style', 'display: none;');
    $('.push-help__item__info').attr('style', 'display: none;');
  }
});
$(document).ready(function() {
  $(window).resize(function() {
    if ($(window).innerWidth() > 576) {
      $('.advantages__info').attr('style', 'display: block;');
      $('.push-help__item__info').attr('style', 'display: block;');
    } else {
      $('.advantages__info').attr('style', 'display: none;');
      $('.push-help__item__info').attr('style', 'display: none;');
    }
  });
});

$(document).ready(function() {
  $(".push-product__item").click(function() {
    sectionlink = $(this).find("a").attr("href")
    if ($(window).innerWidth() > 577 && sectionlink) {
      window.location = sectionlink;
    }
  });
});

// Gravity Form Multistep Triggers
jQuery(document).bind('gform_post_render', function(event, form_id, current_page) {
  // Proposal Form
  if (form_id == 1) {
    dataLayer.push({
      'event': 'VirtualPageview',
      'virtualPageURL': '/free-proposal/#step' + current_page,
      'virtualPageTitle': 'Form Step ' + current_page
    });
    // PPC Calculator Form
  } else if (form_id == 5) {
    dataLayer.push({
      'event': 'VirtualPageview',
      'virtualPageURL': '/ppc-css/#step' + current_page,
      'virtualPageTitle': 'Form Step ' + current_page
    });
  }
});

// Smouth Scrolling

jQuery(document).ready(function($) {
  $('a').click(function() {
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    return false;
  });
});

// Banner Overlay

jQuery(function($) {
  $("#close").click(function() {
    $('.overlay-ribbon').addClass("slideout");
  });
});
