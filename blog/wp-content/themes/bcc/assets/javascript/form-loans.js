var mkt_steps = 5;

function checkForm(){

	var formData = jQuery('#mkt_form');
	var formStr = formData.serialize();
	console.log(formStr);

}

function check(){

	var phone		= document.getElementById('mkt_phone').value;
	

	var errors = 0;

	

	if(phone.length < 11){
		errors++;
		document.getElementById('mkt_phone_err').innerHTML = 'Enter at least 11 digits';
		document.getElementById('mkt_phone_err').closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		document.getElementById('mkt_phone_err').innerHTML = '';
		document.getElementById('mkt_phone_err').closest('label').setAttribute('class','step-lead-input ');
	}

	if(errors > 0){
		return false;
	}else{
		return true;
	}

}

function nextStep(){

	var cStep = event.target.getAttribute('data-step');
	//var val = validate(cStep);
	
	//if(val == 0){
	console.log('first')
		for(var i = 1; i<mkt_steps+1; i++){
			document.getElementById('mkt_step'+i).setAttribute('style','display:none;');
			document.getElementById('mkt_pos'+i).setAttribute('class','step-lead-position-item step-complete ');
			//console.log(i);
		}
		document.getElementById('mkt_step'+cStep).setAttribute('style','display:block;');
		document.getElementById('mkt_pos'+cStep).setAttribute('class','step-lead-position-item step-complete step-active');
	//}
	//console.log('second');
	//console.log(cStep);
	
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
	var email	= document.getElementById('mkt_email').value;
	email = email.replace(/\s/g, "");
	document.getElementById('mkt_email').value = email;
	var ele 	= document.getElementById('mkt_email_err');
	if(!emailre.test(email)){
		ele.innerHTML = 'Enter Valid Email';
		ele.closest('label').setAttribute('class','step-lead-input has-error');
	}else{
		ele.innerHTML = '';
		ele.closest('label').setAttribute('class','step-lead-input ');
	}
}

function phoneVal(){
	var phone = document.getElementById('mkt_phone').value;
	phone = phone.replace(/\s/g, "");
	document.getElementById('mkt_phone').value = phone;
	var ele = document.getElementById('mkt_phone_err');
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
	var p = document.getElementById('mkt_postcode').value;
	if (isValidPostcode(p)) {
		var postcodeRegEx = /(^[A-Z]{1,2}[0-9][0-9A-Z]?)([0-9][A-Z]{2}$)/i;
		document.getElementById('mkt_postcode').value = p.replace(postcodeRegEx,"$1 $2");
		document.getElementById('mkt_postcode_err').innerHTML = '';
		document.getElementById('mkt_postcode_err').closest('label').setAttribute('class','step-lead-input ');
		return true;
	} else {
		document.getElementById('mkt_postcode').value = p;
		document.getElementById('mkt_postcode_err').innerHTML = 'Enter Valid Postcode';
		document.getElementById('mkt_postcode_err').closest('label').setAttribute('class','step-lead-input has-error');
		return false;
	}
}

function validate(cStep){

	var errors = 0;
	//var q1 = document.getElementsByName('mkt_question1');

	var step1Vals = [];

	var firstName	= document.getElementById('mkt_first_name').value;
	var lastName	= document.getElementById('mkt_last_name').value;
	var company		= document.getElementById('mkt_company').value;
	var phone		= document.getElementById('mkt_phone').value;
	var email		= document.getElementById('mkt_email').value;
	var website		= document.getElementById('mkt_website').value;
	var postcode    = document.getElementById('mkt_postcode').value;

	var emailre = /\S+@\S+\.\S+/;

	for(var i = 0; i < q1.length; i++){
		if(q1[i].checked){
			var selected = q1[i].value;
			step1Vals.push(selected);
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

		if( !firstName.trim() ){ document.getElementById('mkt_first_name').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('mkt_first_name').closest('label').setAttribute('class','step-lead-input '); }
		if( !lastName.trim() ){ document.getElementById('mkt_last_name').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('mkt_last_name').closest('label').setAttribute('class','step-lead-input '); }
		if( !company.trim() ){ document.getElementById('mkt_company').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('mkt_company').closest('label').setAttribute('class','step-lead-input '); }

		if(!emailre.test(email)){
			errors++;
			document.getElementById('mkt_email_err').innerHTML = 'Enter Valid Email';
			document.getElementById('mkt_email_err').closest('label').setAttribute('class','step-lead-input has-error');
		}else{
			document.getElementById('mkt_email_err').innerHTML = '';
			document.getElementById('mkt_email_err').closest('label').setAttribute('class','step-lead-input ');
		}

		//if(!postcodeVal()){ errors++; }

	}

	if(cStep == 4){

		if( !website.trim() ){ document.getElementById('mkt_website').closest('label').setAttribute('class','step-lead-input has-error'); errors++; }else{ document.getElementById('mkt_website').closest('label').setAttribute('class','step-lead-input '); }

		//Validate Step 3
		if(phone.length < 11){
			errors++;
			document.getElementById('mkt_phone_err').innerHTML = 'Enter at least 11 digits';
			document.getElementById('mkt_phone_err').closest('label').setAttribute('class','step-lead-input has-error');
		}else{
			document.getElementById('mkt_phone_err').innerHTML = '';
			document.getElementById('mkt_phone_err').closest('label').setAttribute('class','step-lead-input ');
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