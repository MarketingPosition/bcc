var post_code = jQuery("input[name='postcode']");

function isValidPostcode(p) {
  //var postcodeRegEx = /[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}/i;
  var postcodeRegEx = /[A-Z]{1,2}[0-9][0-9A-Z]? ?[0-9][A-Z]{2}/i;
  return postcodeRegEx.test(p);
}

/*formats a VALID postcode nicely: AB120XY -> AB1 0XY */
function formatPostcode(p) {
  if (isValidPostcode(p)) {
    var postcodeRegEx = /(^[A-Z]{1,2}[0-9][0-9A-Z]?)([0-9][A-Z]{2}$)/i;
    return p.replace(postcodeRegEx,"$1 $2");
  } else {
    return p;
  }
}

post_code.on('input', function(evt) {
  var input = $(this);
  var start = input[0].selectionStart;
  $(this).val(function (_, val) {
    return formatPostcode(val.toUpperCase());
  });
  input[0].selectionStart = input[0].selectionEnd = start;
});

// Adding the method
  jQuery.validator.addMethod("cdnPostal", function(postal, element) {
    return this.optional(element) ||
    postal.match(/[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}/);
  }, "Please specify a valid postcode.");


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

/** Form Validaton **/
var pform = jQuery("#pform");
pform.validate({
  validClass: "is-valid",
  errorClass: "is-invalid",
  errorElement: 'span',
  errorPlacement: function(error, element) {
   if (element.attr("name") == "company_type")
     error.insertAfter(".protectionq1_container");
   else if (element.attr("name") == "smoking")
     $(".protectionq2_container").append(error);
   else if (element.attr("name") == "covered")
     $(".protectionq3_container").append(error);
   else if (element.attr("name") == "broker")
     error.insertAfter(".protectionq4_container");
   else if (element.attr("name") == "renewal")
     error.insertAfter(".protectionq5_container");
   else if (element.attr("name") == "employees")
     $(".protectionq6_container").append(error);
   else if (element.attr("name") == "startdate")
     error.insertAfter(".protectionq7_container");
   else
    error.insertAfter(element);
  },
  rules: {
    email: {
      required: true,
      email: true
    },
    phone: {
      required: true,
      d8val_inttelephone_mobile: 'Invalid telephone number'
    }
  },
  messages: {
    energy_type: "Please select an option",
    first_name: "Enter your first name",
    last_name: "Enter your last name",
    email: "Enter a valid address",
    phone: "Enter your phone number",
    renewal_dd: {
      min: jQuery.validator.format("Enter day between 1 to 31."),
      max: jQuery.validator.format("Enter day between 1 to 31."),
      maxlength: jQuery.validator.format("Max 2 digits!")
    },
    renewal_mm: {
      min: jQuery.validator.format("Enter month between 01 and 12."),
      max: jQuery.validator.format("Enter month between 01 and 12."),
      maxlength: jQuery.validator.format("Max 2 digits!")
    },
    dob_yyyy: "Error! Please check."
  },
  groups: {
    renewal_date: "dob_dd dob_mm dob_yyyy"
  }
});


function showTab(n) {
  var x = document.getElementsByClassName("tab");
  var the_form = document.getElementById("pform");
  x[n].style.display = "block";

  if (n == 0) {
    document.getElementById("prevBtn").style.visibility = "hidden";
  } else {
    document.getElementById("prevBtn").style.visibility = "visible";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Get Quotes";
  } else {
    document.getElementById("nextBtn").innerHTML = "Continue";
  }

  var user_width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
  if(user_width < 786){
    the_form.scrollIntoView();
  }

  progressBar(n);
}

function nextPrev(n) {
  var currentTabName = 'step' + currentTab;
  var elmnt = document.getElementById(currentTabName);
  var x = document.getElementsByClassName("tab");
  if( n === 1){
    if(pform.valid() === false){
      return false;
    }
  }

  x[currentTab].style.display = "none";
  currentTab = currentTab + n;

  var localData = localStorage.getItem("confirmation-viewed");

  if (currentTab >= x.length) {
    elmnt.style.display = "block";
    document.getElementById("loading").style.display = "flex";

    var pfh = document.getElementById('pformholder');
    pfh.classList.add("filter-blur");

    /*if (!localData) {
      localStorage.setItem("confirmation-viewed", "true");
      dataLayer.push({
        'event': 'formSubmission',
        'form_id': 'LP Form 1'
      });
    }*/

    pform.submit();
    return false;
  }
  showTab(currentTab);
}

function progressBar(n){
    var i, x = document.getElementsByClassName("tab");
    var indicator = document.getElementById('progress').querySelector('span');
    var tabs = x.length;
    var width = (100/tabs) * (n + 1);
    indicator.style.width = width + "%";
    indicator.innerHTML = Math.floor(width) + "%";
}

function autoNext() {
  var currentTabName = 'step' + currentTab;
  var input_names = {};
  var x = document.getElementById(currentTabName).querySelectorAll('input[type=radio]');

  var i;
  for (i = 0; i < x.length; i++) {
    input_names[x[i].name] = true;
  }
  var input_count = 0;
  for (var input_name in input_names) {
    if (input_names.hasOwnProperty(input_name)) {
        input_count++;
    }
  }
  var y = document.getElementById(currentTabName).querySelectorAll('input[type=radio]:checked');
  if(y.length === input_count) {
    nextPrev(1);
  }

}
