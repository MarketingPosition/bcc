<form id="pform" class="pform py-4" action="submission-leadbyte.php" method="POST">

  <div class="row bg-light-blue p-40-round">
    <div class="col-md-12">
      <div class="form-group">
        <label>What would you like to compare?</label>
        <div class="radio-group">
          <div class="form-check radio-third">
            <input name="question1" id="question1_0" type="radio" class="form-check-input" value="gas">
            <label for="question1_0" class="form-check-label"><img src="assets/icons/icons-01.svg" alt="" class="img-rounded center-block" width="30"><p>Gas</p></label>
          </div>
          <div class="form-check radio-third">
            <input name="question1" id="question1_1" type="radio" class="form-check-input" value="electric">
            <label for="question1_1" class="form-check-label"><img src="assets/icons/icons-03.svg" alt="" class="img-rounded center-block" width="30"><p>Electric</p></label>
          </div>
          <div class="form-check radio-full radio-third">
            <input name="question1" id="question1_2" type="radio" class="form-check-input" value="dual">
            <label for="question1_2" class="form-check-label"><img src="assets/icons/dual.svg" alt="" class="img-rounded center-block" width="30"><p>Dual</p></label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row p-40-round">
    <div class="col-12">
      <div class="form-group">
        <label>Who are your current energy supplier?</label>
        <div class="radio-group">
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_0" type="radio" class="form-check-input" value="British Gas">
            <label for="question2_0" class="form-check-label"><img src="assets/icons/british-gas.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_1" type="radio" class="form-check-input" value="EDF">
            <label for="question2_1" class="form-check-label"><img src="assets/icons/EDF-Energy.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_2" type="radio" class="form-check-input" value="E-On">
            <label for="question2_2" class="form-check-label"><img src="assets/icons/eon.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_3" type="radio" class="form-check-input" value="Npower">
            <label for="question2_3" class="form-check-label"><img src="assets/icons/n-power.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_4" type="radio" class="form-check-input" value="Opus">
            <label for="question2_4" class="form-check-label"><img src="assets/icons/opus-energy.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_5" type="radio" class="form-check-input" value="Scottish Power">
            <label for="question2_5" class="form-check-label"><img src="assets/icons/scottish-power.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_6" type="radio" class="form-check-input" value="SSE">
            <label for="question2_6" class="form-check-label"><img src="assets/icons/sse.svg" alt="" class="img-rounded center-block"></label>
          </div>
          <div class="form-check radio-quoter">
            <input name="question2" id="question2_7" type="radio" class="form-check-input" value="Other">
            <label for="question2_7" class="form-check-label"><img src="assets/icons/other-02-01.svg" alt="" class="img-rounded center-block"></label>
          </div>
        </div>
      </div>
      <div class="supplier form-group">
        <label for="question3">Other Supplier</label>
        <select id="question3" name="question3" class="form-control select-css">
		 <option value="">All Providers</option>
         <option value="britishgas">British Gas</option>
         <option value="edf">EDF</option>
         <option value="eon">E.ON</option>
         <option value="scottishpower">ScottishPower</option>
         <option value="sse">SSE</option>
         <option value="npower">npower</option>
         <option value="opus">Opus Energy</option>
         <option value="extraenergy">Extra Energy</option>
         <option value="dualenergy">Dual Energy</option>
         <option value="crown">Crown Energy</option>
         <option value="total">Total</option>
         <option value="utilitywarehouse">Utility Warehouse</option>
         <option value="havenpower">Haven Power</option>
         <option value="ovoenergy">OVO Energy</option>
         <option value="ecotricity">Ecotricity</option>
         <option value="hudson">Hudson Energy</option>
         <option value="gazprom">Gazprom</option>
         <option value="yorkshiregasandpower">Yorkshire Gas and Power</option>
         <option value="unitedgasandpower">UGP - United Gas & Power</option>
         <option value="cng">CNG</option>
         <option value="axisforbusiness">Axis for Business</option>
         <option value="coronaenergy">Corona Energy</option>
         <option value="goodenergyforhome">Good Energy</option>
         <option value="utilitaforhome">Utilita Energy</option>
         <option value="bglite">British Gas Lite</option>
         <option value="dontknow">I don't know</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row bg-light-blue p-40-round">
    <div class="col-md-6">
      <div class="form-group">
        <label for="question4">How much is your (monthly) bill usually?</label>
        <input id="question4" name="question4" placeholder="e.g. £250" type="text" class="form-control" pattern="[0-9]*" inputmode="numeric">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="question5">What is your contract renewal date?</label>
        <input id="question5" name="question5" placeholder="Pick a day" type="text" class="form-control datepicker">
      </div>
    </div>
  </div>

  <div class="row p-40-round">
    <div class="col-12">
      <div class="form-group">
        <label for="question6">Enter postcode</label>
        <input id="question6" name="question6" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="row bg-light-blue p-40-round">
    <div class="col-md-6">
      <div class="form-group">
        <label for="question7">First Name</label>
        <input id="question7" name="question7" type="text" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="question8">Last Name</label>
        <input id="question8" name="question8" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="row p-40-round">
    <div class="col-md-6">
      <div class="form-group">
        <label for="question9">Company Name</label>
        <input id="question9" name="question9" type="text" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="question10">Business Type</label>
        <select id="question10" name="question10" class="form-control select-css">
          <option value="">Select</option>
			<option value="Shops and Retail">Shops and Retail</option>
			<option value="Hair Beauty Cosmetics">Hair Beauty Cosmetics</option>
			<option value="Food and Drink">Food and Drink</option>
			<option value="Leisure and Accomodation">Leisure and Accomodation</option>
			<option value="Medical">Medical</option>
			<option value="Education and Training">Education and Training</option>
			<option value="Factories and Manufacturing">Factories and Manufacturing</option>
			<option value="Wholesale and Distribution">Wholesale and Distribution</option>
			<option value="Building and Trade">Building and Trade</option>
			<option value="Automotive and Transportation">Automotive and Transportation</option>
			<option value="Other">Other</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row bg-light-blue p-40-round">
    <div class="col-md-6">
      <div class="form-group">
        <label for="question11">Phone Number</label>
        <input id="question11" name="question11" type="text" class="form-control" pattern="[0-9]*" inputmode="numeric">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="question12">Email Address</label>
        <input id="question12" name="question12" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-12">
      <div class="pform-footer form-group">
        <input name="submit" type="submit" class="button" value="Get A Quote">
      </div>
    </div>
  </div>

</form>
