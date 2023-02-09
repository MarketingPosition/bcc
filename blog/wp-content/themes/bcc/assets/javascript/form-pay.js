var pay_steps = 4;

function checkForm(){

	var formData = jQuery('#pay_form');
	var formStr = formData.serialize();

}

function check(){

	var errors = 0;

	var postcode = document.getElementById('pay_postcode').value;
	var company  = document.getElementById('pay_company').value;
	var email    = document.getElementById('pay_email').value;
	var phone    = document.getElementById('pay_phone').value;

	var emailre = /\S+@\S+\.\S+/;

	if(!postcodeVal()){ 
		errors++;
		document.getElementById('pay_postcode_err').innerHTML = 'Enter Valid Postcode';
		document.getElementById('pay_postcode_err').closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		document.getElementById('pay_postcode_err').innerHTML = '';
		document.getElementById('pay_postcode_err').closest('label').setAttribute('class','step-lead-input ');
	}

	if( !company.trim() ){
		document.getElementById('pay_company').closest('label').setAttribute('class','step-lead-input has-error'); errors++; 
	}else{ 
		document.getElementById('pay_company').closest('label').setAttribute('class','step-lead-input ');
	}

	if(!emailre.test(email)){
		errors++;
		document.getElementById('pay_email_err').innerHTML = 'Enter Valid Email';
		document.getElementById('pay_email_err').closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		document.getElementById('pay_email_err').innerHTML = '';
		document.getElementById('pay_email_err').closest('label').setAttribute('class','step-lead-input ');
	}

	if(phone.trim().length < 11){
		errors++;
		document.getElementById('pay_phone_err').innerHTML = 'Enter at least 11 digits';
		document.getElementById('pay_phone_err').closest('label').setAttribute('class','step-lead-input has-error');
	}

	if(errors > 0){
		return false;
	}else{
		return true;
	}

}

function checkStep1(){

	var q1 = document.getElementsByName('pay_question1');
	var selVal = '';

	document.getElementById('paymentsYes').style = 'display:none;';
	document.getElementById('paymentsNo').style = 'display:none;';

	for(var i = 0; i < q1.length; i++){
		if(q1[i].checked){
			var selected = q1[i].value;
			selVal = selected;
		}
	}

	if(selVal == 'yes'){
		document.getElementById('paymentsYes').style = '';

	}
	if(selVal == 'no'){
		document.getElementById('paymentsNo').style = '';
	}


}

function nextStep(){

	var cStep = event.target.getAttribute('data-step');
	var val = validate(cStep);
	if(val == 0){
		for(var i = 1; i<pay_steps+1; i++){
			document.getElementById('pay_step'+i).setAttribute('style','display:none;');
			document.getElementById('pay_pos'+i).setAttribute('class','step-lead-position-item step-complete ');
		}
		document.getElementById('pay_step'+cStep).setAttribute('style','display:block;');
		document.getElementById('pay_pos'+cStep).setAttribute('class','step-lead-position-item step-complete step-active');
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
	var email	= document.getElementById('pay_email').value;
	email = email.replace(/\s/g, "");
	document.getElementById('pay_email').value = email;
	var ele 	= document.getElementById('pay_email_err');
	if(!emailre.test(email)){
		ele.innerHTML = 'Enter Valid Email';
		ele.closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		ele.innerHTML = '';
		ele.closest('label').setAttribute('class','step-lead-input ');
	}
}

function phoneVal(){
	var phone = document.getElementById('pay_phone').value;
	phone = phone.replace(/\s/g, "");
	document.getElementById('pay_phone').value = phone;
	var ele = document.getElementById('pay_phone_err');
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
	var p = document.getElementById('pay_postcode').value;
	if (isValidPostcode(p)) {
		var postcodeRegEx = /(^[A-Z]{1,2}[0-9][0-9A-Z]?)([0-9][A-Z]{2}$)/i;
		document.getElementById('pay_postcode').value = p.replace(postcodeRegEx,"$1 $2").toUpperCase();
		document.getElementById('pay_postcode_err').innerHTML = '';
		document.getElementById('pay_postcode_err').closest('label').setAttribute('class','step-lead-input ');
		return true;
	} else {
		document.getElementById('pay_postcode').value = p;
		document.getElementById('pay_postcode_err').innerHTML = 'Enter Valid Postcode';
		document.getElementById('pay_postcode_err').closest('label').setAttribute('class','step-lead-input has-error');
		return false;
	}
}

function validate(cStep){

	var errors = 0;
	var q1 = document.getElementsByName('pay_question1');

	var step1Vals = [];
	var step1Selection = '';

	var q2 = document.getElementsByName('pay_question2');
	var q2Selection = '';

	var q3 = document.getElementsByName('pay_question3');
	var q3Selection = '';

	var q4 = document.getElementsByName('pay_question4');
	var q4Selection = '';

	var q5 = document.getElementsByName('pay_question5');
	var q5Selection = '';

	var emailre = /\S+@\S+\.\S+/;

	for(var i = 0; i < q1.length; i++){
		if(q1[i].checked){
			var selected = q1[i].value;
			step1Vals.push(selected);
			step1Selection = selected;
		}
	}

	for(var i = 0; i < q2.length; i++){
		if(q2[i].checked){
			var selected = q2[i].value;
			q2Selection = selected;
		}
	}

	for(var i = 0; i < q3.length; i++){
		if(q3[i].checked){
			var selected = q3[i].value;
			q3Selection = selected;
		}
	}

	for(var i = 0; i < q4.length; i++){
		if(q4[i].checked){
			var selected = q4[i].value;
			q4Selection = selected;
		}
	}

	for(var i = 0; i < q5.length; i++){
		if(q5[i].checked){
			var selected = q5[i].value;
			q5Selection = selected;
		}
	}

	if(cStep == 2){
		if(step1Vals.length === 0){
			errors++;
			document.getElementById('step1err').innerHTML = 'Please select an option';
		}else{
			document.getElementById('step1err').innerHTML = '';

			if(step1Selection == 'yes'){
				//
				if(!q2Selection){
					errors++;
					document.getElementById('step1err').innerHTML = 'Please select an option';
				}else{
					document.getElementById('step1err').innerHTML = '';
				}


			}else if(step1Selection == 'no'){
				//
				if(!q3Selection){
					errors++;
					document.getElementById('step1err').innerHTML = 'Please select an option';
				}else{
					document.getElementById('step1err').innerHTML = '';
				}

			}

		}

	}


	if(cStep == 3){

		if(!q4Selection){
			errors++;
			document.getElementById('step2err').innerHTML = 'Please select an option';
		}else{
			document.getElementById('step2err').innerHTML = '';
		}

	}

	if(cStep == 4){

		if(!q5Selection){
			errors++;
			document.getElementById('step3err').innerHTML = 'Please select an option';
		}else{
			document.getElementById('step3err').innerHTML = '';
		}

	}

	if(cStep == 5){

		//Validate Step 4



	}

	if(cStep == 6){

		//Validate Step 5

	}



	if(errors > 0){
		
	}

	return errors;

}