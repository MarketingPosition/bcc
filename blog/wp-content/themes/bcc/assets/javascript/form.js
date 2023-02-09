jQuery(document).ready(function () {
  var stepcount = 5;

  // Variables
  var lead_position = jQuery(".step-lead-position-item"),
    lead_step = jQuery(".step-lead-item"),
    btn_next = jQuery(".next-btn"),
    btn_prev = jQuery(".prev-btn"),
    check_postcode = jQuery(".check-btn");
  (lead_form = jQuery(".step-lead-form")),
    (form_submit = jQuery(".submit-btn")),
    (current_host = window.location.hostname),
    (posturl = "<?php echo $domain;?>/api/form.php");

  // User Variables
  var phone_number = jQuery("#phonenumber"),
    first_name = jQuery("#first_name"),
    post_code = jQuery("#postcodefield");

  function isValidPostcode(p) {
    //var postcodeRegEx = /[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}/i;
    var postcodeRegEx = /[A-Z]{1,2}[0-9][0-9A-Z]? ?[0-9][A-Z]{2}/i;
    return postcodeRegEx.test(p);
  }

  /*formats a VALID postcode nicely: AB120XY -> AB1 0XY */
  function formatPostcode(p) {
    if (isValidPostcode(p)) {
      var postcodeRegEx = /(^[A-Z]{1,2}[0-9][0-9A-Z]?)([0-9][A-Z]{2}$)/i;
      return p.replace(postcodeRegEx, "$1 $2");
    } else {
      return p;
    }
  }

  post_code.on("input", function (evt) {
    var input = $(this);
    var start = input[0].selectionStart;
    $(this).val(function (_, val) {
      return formatPostcode(val.toUpperCase());
    });
    input[0].selectionStart = input[0].selectionEnd = start;
  });

  // Adding the method
  jQuery.validator.addMethod(
    "cdnPostal",
    function (postal, element) {
      return (
        this.optional(element) ||
        postal.match(
          /[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}/
        )
      );
    },
    "Please specify a valid postcode."
  );

  // Preselect
  var i = document.location.href.lastIndexOf("?");
  var types = document.location.href
    .substr(i + 1)
    .replace(/type=/g, "")
    .split("&");

  // Hide Steps
  lead_step.hide();

  // Disable Form Submit
  form_submit.attr("disabled", true);

  // Form Validation
  lead_form.validate({
    errorElement: "span",
    errorClass: "help-block",
    highlight: function (element, errorClass, validClass) {
      jQuery(element).closest("label").addClass("has-error");
    },
    unhighlight: function (element, errorClass, validClass) {
      jQuery(element)
        .closest("label")
        .removeClass("has-error")
        .addClass("has-success");
    },
    rules: {
      postcode: {
        required: true,
        cdnPostal: true,
      },
    },
  });

  // Form Validator - For rechecking validation e.g. via phone api.
  var validator = lead_form.validate();

  // Form Navigation
  lead_position.on("click", function (e) {
    e.preventDefault();
    var select_lead_step = jQuery(jQuery(this).attr("href")),
      lead_position_item = jQuery(this);

    if (!lead_position_item.hasClass("disabled")) {
      lead_position.removeClass("step-active").addClass("step-complete");
      lead_position_item.addClass("step-active");
      lead_step.hide();
      select_lead_step.fadeIn(900);
      select_lead_step.find("input:eq(0)").focus();
    }
  });

  // Next Page
  btn_next.on("click", function (e) {
    e.preventDefault();

    var current_lead_step = jQuery(this).closest(".step-lead-item"),
      current_btn = current_lead_step.attr("id"),
      next_lead_position = jQuery(
        '.step-lead-position-item[href="#' + current_btn + '"]'
      ).next("a"),
      next_lead = jQuery(this).attr("data-step");
    current_step = jQuery(this).attr("data-step") - 1;

    if (lead_form.valid() === true) {
      if (jQuery("#step-lead-" + current_step).is(":visible")) {
        current_fs = jQuery("#step-lead-" + current_step);
        next_fs = jQuery("#step-lead-" + next_lead);
        next_lead_position.removeAttr("disabled").trigger("click");
      }
      next_fs.show();
      current_fs.hide();

      if (current_step < 6) {
        // Trigger GA Virtual Page
        dataLayer.push({
          event: "VirtualPageview",
          virtualPageURL: "/get-a-quote/step" + next_lead,
          virtualPageTitle: "Quick Quote - Step " + next_lead,
        });
      }
    }
  });

  // Previous Page
  btn_prev.on("click", function (e) {
    e.preventDefault();
    var current_lead_step = jQuery(this).closest(".step-lead-item"),
      current_btn = current_lead_step.attr("id"),
      prev_lead_position = jQuery(
        '.step-lead-position-item[href="#' + current_btn + '"]'
      ).prev("a");
    prev_lead_position.trigger("click");
  });

  // Postcode Check
  check_postcode.on("click", function (e) {
    e.preventDefault();

    if (lead_form.valid() === true) {
      jQuery("#check-postcode").fadeIn();

      setTimeout(function () {
        jQuery("#check-postcode").fadeOut();
        jQuery("#step-lead-4 .next-btn").trigger("click");
      }, 4000);
    }

    // Enable Form Submit
    form_submit.attr("disabled", false);
  });

  // Submit Form
  jQuery(".submit-btn").click(function (e) {
    e.preventDefault();

    if (lead_form.valid() === true) {
      // Check if phone number is real.
      $.ajax({
        url: "<?php echo $domain;?>/api/phone.php?number=" + phone_number.val(),
        dataType: "json",
        success: function (phonecheck) {
          if (phonecheck.valid === true) {
            postForm();

            // Trigger GA Event
            dataLayer.push({ event: "formSubmission" });
          } else {
            validator.showErrors({
              phonenumber: "This is not a valid phone number.",
            });
          }
        },
      });
    }
    return false;
  });

  // Post to Saleforce
  function postForm() {
    //lead_form.append(jQuery('<span>Please Wait...</span>').addClass('loading-form pulsate'));

    var lead_data = lead_form.serialize();

    //jQuery Post Request
    var jqxhr = jQuery.post(posturl, lead_data, function (data) {
      // Trigger GA Virtual Page
      dataLayer.push({
        event: "VirtualPageview",
        virtualPageURL: "/get-a-quote/thank-you",
        virtualPageTitle: "Quick Quote - Submission",
      });

      window.location.href = "<?php echo $domain;?>/thank-you/";

      /* Show Thank You Page
      var thankYou = jQuery('#quoteform');
      jQuery(".thank-you-message h3").html("Thank You, " + first_name.val());
      jQuery('#step-lead-6').show();
      jQuery('#step-lead-5').hide();
      jQuery('html,body').animate({scrollTop: thankYou.offset().top},'slow');*/
    });
  }

  jQuery(".step-active").trigger("click");

  // Auto Select Type if Query is in URL
  jQuery('input[name="question1"]').prop("checked", function () {
    return $.inArray(this.value, types) !== -1;
  });
});
