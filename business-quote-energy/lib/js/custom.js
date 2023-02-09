jQuery(document).ready(function($){
	$('.slider').slick({
	  dots: false,
	  autoplay: true,
	  infinite: true,
	  speed: 500,
	  autoplaySpeed: 1500,
	  slidesToShow: 8,
	  pauseOnHover: false,
	  centerMode: false,
	  arrows: false,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    }
	  ]
	});
});

jQuery(document).ready(function($){
	$('.datepicker').pickadate({
		 min: +1
	})
});

var form = jQuery('#pform');

form.validate({
	errorElement: 'label',
	errorPlacement: function(error, element) {
		if (element.attr("name") == "question1" || element.attr("name") == "question2"){
		  error.appendTo( element.parent(".form-check").parent().last() );
		}
		 else {
		  error.insertAfter(element);
		}
	},
	rules: {
		question1: {
			required: true
		},
		question2: {
			required: true
		},
		question3: {
			required: true
		},
		question4: {
			number: true,
			required: true
		},
		question5: {
			required: true
		},
		question7: {
			required: true
		},
		question8: {
			required: true
		},
		question9: {
			required: true
		},
		question10: {
			required: true
		},
		question12: {
			email: true,
			required: true
		},
		question11: {
			required: true,
			d8val_inttelephone_mobile_line_opt: [ { name: "BarredPrefixes", value: "+4470" } ],
			phoneUK: true
		},
		question6: {
			required: true,
			postcodeValidation: true
		}
	},
	// messages: {
  //     fname: "Please enter your firstname",
  //     lname: "Please enter your lastname",
  //     email: "Please enter a valid email address"
  //   },
	submitHandler: function(form) {
		form.submit();
	}
});



jQuery.validator.addMethod( "postcodeValidation", function( value, element ) {
    return this.optional( element ) || /^((([A-PR-UWYZ][0-9])|([A-PR-UWYZ][0-9][0-9])|([A-PR-UWYZ][A-HK-Y][0-9])|([A-PR-UWYZ][A-HK-Y][0-9][0-9])|([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRVWXY]))\s?([0-9][ABD-HJLNP-UW-Z]{2})|(GIR)\s?(0AA))$/i.test( value );
}, "Please enter a valid UK postcode" );

jQuery.validator.addMethod('phoneUK', function(phone_number, element) {
  return this.optional(element) || phone_number.length > 9 &&
  phone_number.match(/^\(?(?:(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?\(?(?:0\)?[\s-]?\(?)?|0)(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}|\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4}|\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3})|\d{5}\)?[\s-]?\d{4,5}|8(?:00[\s-]?11[\s-]?11|45[\s-]?46[\s-]?4\d))(?:(?:[\s-]?(?:x|ext\.?\s?|\#)\d+)?)$/);
  }, 'Please specify a valid phone number'
);


jQuery(document).ready(function($){
	$('.supplier').hide();
	$('input:radio[name="question2"]').change(function(){
	    if($(this).val() == 'Other'){
	       $('.supplier').fadeIn();
	    }else{
				$('.supplier').fadeOut();
			}
	});
});



var _uf = _uf || {};
_uf.domain = "energysavingcompare.co.uk";
