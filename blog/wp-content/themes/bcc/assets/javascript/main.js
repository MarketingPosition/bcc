  jQuery(document).bind('gform_post_render', function(event, form_id, current_page){
  if( jQuery('.auto-check').length > 0 ) {
	jQuery('.gfield_radio input[type=radio]').bind("click", function() {
	  jQuery(this).closest('.gform_page').find('.gform_page_footer .gform_next_button.button').click();
	});
	}
});
  
  jQuery(function() {

    $('.privacy').on('click', function() {

      var divHeight = parseInt($('#lightbox').height()) * 0.6;

      //console.log("div height " + divHeight);

      $('.lightbox-inner').css('max-height', divHeight + 'px');

      $('.lightbox-inner').animate({
        'top':'50%'
      });

      // show lightbox
      $('#lightbox').fadeIn();

    });

    // click event to fade out lightbox

    $('#lightbox, .close-privacy').on('click', function() {

      $('.lightbox-inner').animate({
        'top':'40%'
      }, 500, function () {
        $('.lightbox-inner').css('top','');
      });

      $('#lightbox').fadeOut(500);
    });


    $('.overlay-form').on('click', function() {
      var divHeight = parseInt($('#overlay-form').height()) * 0.8;
      //console.log("div height " + divHeight);
      $('.overlay-inner').css('max-height', divHeight + 'px');
      $('.overlay-inner').animate({
        'top':'50%'
      });

      // show lightbox
      $('#overlay-form').fadeIn();

    });

    // click event to fade out lightbox

    $('.close-btn, #overlaybg').on('click', function() {

      $('.overlay-inner').animate({
        'top':'40%'
      }, 500, function () {
        $('.overlay-inner').css('top','');
      });

      $('#overlay-form').fadeOut(500);
    });

  });

  // Slider for Suppliers
  $('.our-suppliers .suppliers').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      responsive:{
          0:{
              items:3
          },
          991:{
              items:6
          }
      }
  });

  // Checkpost Code Suppliers
  $('#check-postcode .suppliers').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:false,
      autoplay:true,
      autoplayTimeout:1000,
      mouseDrag: false,
      touchDrag: false,
      responsive:{
          0:{
              items:3
          },
          991:{
              items:4
          }
      }
  });

  // Blocks Slider
  $('.row-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        991:{
            items:3
        }
    }
  })

  // Accordion
  $('#accordion').find('.accordion h3 .arrow').click(function(){
    $(this).parent().addClass('active').next().slideToggle('fast');
    $(".accordion ul").not($(this).parent().next()).slideUp('fast');
  });

  // Get Query
  function getQueryParams(qs) {
    qs = qs.split("+").join(" ");
    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
            = decodeURIComponent(tokens[2]);
    }

    return params;
  }

  var $_GET = getQueryParams(document.location.search);

  var page_location = $_GET['location'];
  var page_keyword = $_GET['headline'];

  if(page_location){
    document.getElementById("location").innerHTML = page_location + ' ';
  }

 if(page_keyword){
	document.getElementById("pkeyword").innerHTML = page_keyword + ' ';
  }

  // Get GCLID

  function setCookie(name, value, days){
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    var expires = "; expires=" + date.toGMTString();
    document.cookie = name + "=" + value + expires;
  }
  function getParam(p){
      var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
      return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }
  var gclid = getParam('gclid');
  if(gclid){
      var gclsrc = getParam('gclsrc');
      if(!gclsrc || gclsrc.indexOf('aw') !== -1){
          setCookie('gclid', gclid, 90);
      }
  }

// Quote 2 Step 5 Search Suppliers

jQuery(document).bind('gform_post_render', function(event, form_id, current_page){
      jQuery("#gform_next_button_1_9").css('visibility', 'hidden');
    if (  form_id == 1 && current_page == 5 ) {
      setTimeout(function () {
        jQuery("#gform_next_button_1_9").click();
    }, 3000);
  };
});

//

jQuery(document).on('gform_post_render', function(){
  jQuery(document).ready(function(){
    jQuery('#field_3_17').hide();
    jQuery('#choice_3_4_7').click(function(){
      jQuery('#field_3_17').show();
    });
    jQuery('input:not(#choice_3_4_7)').click(function(){
      jQuery('#field_3_17').hide();
    });
  });
});

/* Counter Function */
/*
var aCount = 0;
jQuery(window).scroll(function() {
  var oTop = jQuery('.counter').offset().top - window.innerHeight;
  if (aCount == 0 && jQuery(window).scrollTop() > oTop) {
    jQuery('.count-number').each(function() {
      var $this = jQuery(this),
        countTo = $this.attr('data-to');
      jQuery({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }
        });
    });
    aCount = 1;
  }
});
*/

/* Counter Function */

jQuery(function($) {
  $('.tabs nav a').on('click', function() {
    show_content($(this).index());
  });

  show_content(0);

  function show_content(index) {
    // Make the content visible
    $('.tabs .content.visible').removeClass('visible');
    $('.tabs .content:nth-of-type(' + (index + 1) + ')').addClass('visible');

    // Set the tab to selected
    $('.tabs nav a.selected').removeClass('selected');
    $('.tabs nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
  }
});

/* Accordion */
jQuery(function($) {

  var allPanels = $('.accordion > dd').hide();

  $('.accordion > dt > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();
    return false;
  });

});


// Navigation

/*Page AB*/

// Slider functionality for Trustpilot reviews
// var slideIndex = 1;
// showSlides(slideIndex);

/*
var slideIndex = 0;
showSlides();

// Pager controls
function currentSlide(n) {
    //showSlides(slideIndex = n);
}
*/

// function showSlides(n) {
//     var i;
//     var slides = document.querySelectorAll(".page-id-1135 .review-slides .slide");
//     var dots = document.querySelectorAll(".page-id-1135 .review-slides .dot");
//     if (n > slides.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " active";
// }


/*
function showSlides() {
    var i;
    var slides = document.querySelectorAll(".page-id-1135 .review-slides .slide");
    var dots = document.querySelectorAll(".page-id-1135 .review-slides .dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";

    setTimeout(showSlides, 6000);
}
*/


// Accordion functionality for FAQ section
var acc = document.querySelectorAll(".energy-saving-faqs .faqs-accordion-block .accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        document.querySelector(".energy-saving-faqs .faqs-accordion-block .accordion.active").classList.remove('active');
        this.classList.toggle("active");
    });
}
/*Page AB*/



/* Loading Text On Get QUote Form  */
/*
jQuery(document).ready(function(){
    
	jQuery("#quoteform .submit-btn").prop('disabled', true);
	var toValidate = jQuery('#first_name, #last_name, #companyname, #phonenumber, #emailaddress'),
	    valid = false;
	toValidate.keyup(function () {
	    if (jQuery(this).val().length > 0) {
	        jQuery(this).data('valid', true);
	    } else {
	        jQuery(this).data('valid', false);
	    }
	    toValidate.each(function () {
	        if (jQuery(this).data('valid') == true) {
	            valid = true;
	        } else {
	            valid = false;
	        }
	    });
	    if (valid === true) {
	        jQuery("#quoteform .submit-btn").prop('disabled', false);
	    } else {
	        jQuery("#quoteform .submit-btn").prop('disabled', true);
	    }
	});

	jQuery('#quoteform .submit-btn').on('click', function() {
		jQuery('#loading').show();
		setTimeout(function(){
		jQuery('#loading').hide();
		}, 3000);		
	});
});*/






