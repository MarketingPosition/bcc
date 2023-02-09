window.onload = function() {

	flatpickr("#nrg_contract_date", {
		"dateFormat" : "Y-m-d",
		"altInput"  : true,
		"altFormat" : "d/m/Y"
	});

};

jQuery('input#nrg_bill').blur(function(){
  var num = parseFloat($(this).val());
  var cleanNum = num.toFixed(2);
  if(cleanNum > 0){
    $(this).val(cleanNum);
  }
});

var nrg_steps = 5;

function checkForm(){

	var formData = jQuery('#nrg_form');
	var formStr = formData.serialize();

}

function nextStep(){

	var cStep = event.target.getAttribute('data-step');
	var val = validate(cStep);


	if(val == 0){
		console.log('Activating new section');
		for(var i = 1; i<nrg_steps+1; i++){
			document.getElementById('nrg_step'+i).setAttribute('style','display:none;');
			document.getElementById('nrg_pos'+i).setAttribute('class','step-lead-position-item step-complete ');
		}



		document.getElementById('nrg_step'+cStep).setAttribute('style','display:block;');
		document.getElementById('nrg_pos'+cStep).setAttribute('class','step-lead-position-item step-complete step-active');

	}

}

function blankVal(){
	var val = event.target.value;
	var ele = event.target.getAttribute('id');
	if(!val){
		document.getElementById(ele).closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		document.getElementById(ele).closest('label').setAttribute('class','step-lead-input ');
	}
}

function emailVal(){
	var emailre = /\S+@\S+\.\S+/;
	var email	= document.getElementById('nrg_email').value;
	email = email.replace(/\s/g, "");
	document.getElementById('nrg_email').value = email;
	var ele 	= document.getElementById('nrg_email_err');
	if(!emailre.test(email)){
		ele.innerHTML = 'Enter Valid Email';
		ele.closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		ele.innerHTML = '';
		ele.closest('label').setAttribute('class','step-lead-input ');
	}
}

function phoneVal(){
	var phone = document.getElementById('nrg_phone').value;
	phone = phone.replace(/\s/g, "");
	document.getElementById('nrg_phone').value = phone;
	var ele = document.getElementById('nrg_phone_err');
	if(phone.length < 11){
		ele.innerHTML = 'Enter at least 11 digits';
		ele.closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		ele.innerHTML = '';
		ele.closest('label').setAttribute('class','step-lead-input ');
	}
}

function isValidPostcode(p) {
	var postcodeRegEx = /[A-Z]{1,2}[0-9][0-9A-Z]? ?[0-9][A-Z]{2}/i;
	return postcodeRegEx.test(p);
}

function postcodeVal() {
	var p = document.getElementById('nrg_postcode').value;

	p = p.replace(/\s/g,'');

	if (isValidPostcode(p)) {
		var postcodeRegEx = /(^[A-Z]{1,2}[0-9][0-9A-Z]?)([0-9][A-Z]{2}$)/i;
		document.getElementById('nrg_postcode').value = p.replace(postcodeRegEx,"$1$2").toUpperCase();
		document.getElementById('nrg_postcode_err').innerHTML = '';
		document.getElementById('nrg_postcode_err').closest('label').setAttribute('class','step-lead-input ');
		return true;
	} else {
		document.getElementById('nrg_postcode').value = p;
		document.getElementById('nrg_postcode_err').innerHTML = 'Enter Valid Postcode';
		document.getElementById('nrg_postcode_err').closest('label').setAttribute('class','step-lead-input has-error');
		return false;
	}
}

function showMoreOptions() {

	var ele = document.getElementById('nrg_more');
	var atr = ele.getAttribute('style');
	var btn = document.getElementById('nrg_moreless');

	if(!atr){
		ele.setAttribute('style', 'display:none;');
		btn.innerHTML = '--Show More--';
	}else{
		ele.setAttribute('style', '');
		btn.innerHTML = '--Show Less--';
	}



}

function check(e){

	var firstName	= document.getElementById('nrg_first_name').value;
	var lastName	= document.getElementById('nrg_last_name').value;
	var phone		= document.getElementById('nrg_phone').value;
	var email		= document.getElementById('nrg_email').value;

	var emailre = /\S+@\S+\.\S+/;

	var errors = 0;

	if( !firstName.trim() ){ document.getElementById('nrg_first_name').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_first_name').closest('label').setAttribute('class','step-lead-input '); }
	if( !lastName.trim() ){ document.getElementById('nrg_last_name').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_last_name').closest('label').setAttribute('class','step-lead-input '); }


	if(!emailre.test(email)){
		errors++;
		document.getElementById('nrg_email_err').innerHTML = 'Enter Valid Email';
		document.getElementById('nrg_email_err').closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		document.getElementById('nrg_email_err').innerHTML = '';
		document.getElementById('nrg_email_err').closest('label').setAttribute('class','step-lead-input ');
	}

	if(phone.length < 11){
		errors++;
		document.getElementById('nrg_phone_err').innerHTML = 'Enter at least 11 digits';
		document.getElementById('nrg_phone_err').closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		document.getElementById('nrg_phone_err').innerHTML = '';
		document.getElementById('nrg_phone_err').closest('label').setAttribute('class','step-lead-input ');
	}

	if(errors > 0){
		return false;
	}else{
		return true;
	}


}

function validate(cStep){

	var errors = 0;
	var q1 = document.getElementsByName('nrg_question1');
	var q2 = document.getElementsByName('nrg_question2');

	var step1Vals = [];
	var step2Vals = [];

	var firstName	= document.getElementById('nrg_first_name').value;
	var lastName	= document.getElementById('nrg_last_name').value;
	var company		= document.getElementById('nrg_company').value;
	var phone		= document.getElementById('nrg_phone').value;
	var email		= document.getElementById('nrg_email').value;
	var postcode    = document.getElementById('nrg_postcode').value;

	var bill		= document.getElementById('nrg_bill').value;
	var contract 	= document.getElementById('nrg_contract_date').value;

	var emailre = /\S+@\S+\.\S+/;

	for(var i = 0; i < q1.length; i++){
		if(q1[i].checked){
			var selected = q1[i].value;
			step1Vals.push(selected);
		}
	}

	for(var i = 0; i < q2.length; i++){
		if(q2[i].checked){
			var selected2 = q2[i].value;
			step2Vals.push(selected2);
		}
	}

	if(cStep == 2){
		if(step1Vals.length === 0){
			errors++;
			document.getElementById('step1err').innerHTML = 'Please Select at least 1 option';
		}else{
			document.getElementById('step1err').innerHTML = '';
		}
	}


	if(cStep == 3){

		if(step2Vals.length === 0){
			errors++;
			document.getElementById('step3err').innerHTML = 'Please Select a Supplier';
		}else{
			document.getElementById('step3err').innerHTML = '';
		}



	}

	if(cStep == 4){

		if( !bill.trim() ){ document.getElementById('nrg_bill').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_bill').closest('label').setAttribute('class','step-lead-input '); }
		if( !contract.trim() ){ document.getElementById('nrg_contract_date').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_contract_date').closest('label').setAttribute('class','step-lead-input '); }

	}

	if(cStep == 5){

		if( !company.trim() ){ document.getElementById('nrg_company').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_company').closest('label').setAttribute('class','step-lead-input '); }

		if(!postcodeVal()){ errors++;  }else{}
	}

	if(cStep == 6){
		/*
		if( !firstName.trim() ){ document.getElementById('nrg_first_name').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_first_name').closest('label').setAttribute('class','step-lead-input '); }
		if( !lastName.trim() ){ document.getElementById('nrg_last_name').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('nrg_last_name').closest('label').setAttribute('class','step-lead-input '); }


		if(!emailre.test(email)){
			errors++;
			document.getElementById('nrg_email_err').innerHTML = 'Enter Valid Email';
			document.getElementById('nrg_email_err').closest('label').setAttribute('class','step-lead-input has-error');
		}else{
			document.getElementById('nrg_email_err').innerHTML = '';
			document.getElementById('nrg_email_err').closest('label').setAttribute('class','step-lead-input ');
		}

		if(phone.length < 11){
			errors++;
			document.getElementById('nrg_phone_err').innerHTML = 'Enter at least 11 digits';
			document.getElementById('nrg_phone_err').closest('label').setAttribute('class','step-lead-input has-error');
		}else{
			document.getElementById('nrg_phone_err').innerHTML = '';
			document.getElementById('nrg_phone_err').closest('label').setAttribute('class','step-lead-input ');
		}
		*/


	}

	if(errors > 0){
		//return false;
	}else{
		return errors;
	}

}

// Accordion functionality for FAQ section
var acc = document.querySelectorAll(".energy-saving-faqs .faqs-accordion-block .accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        document.querySelector(".energy-saving-faqs .faqs-accordion-block .accordion.active").classList.remove('active');
        this.classList.toggle("active");
    });
}
