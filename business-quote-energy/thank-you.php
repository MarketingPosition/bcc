<?php include_once('header.php');

/*
session_start();

if(!empty($_POST['question7'])){
  $_SESSION["fname"] = $_POST['question7'];;
}
else{
  //header("Location: index.php");
  $_SESSION["fname"] = "Dear";
}

if(!empty($_POST['question8'])){
  $_SESSION["lname"] = $_POST['question8'];
}
else{
  //header("Location: index.php");
  $_SESSION["lname"] = "Valuable User";
}

$fname = $_SESSION["fname"];
$lname = $_SESSION["lname"];
*/

?>

<header class="py-4 text-center">
<a href="/business-quote-energy/"><img src="assets/images/BCC-LOGO-pound-blue.png" class="img-fluid" alt="Energy Saving Compare" width="200"></a>
</header>

<section class="hero">
  <div class="container form-wrapper">

    <div class="row py-5">
      <div class="col-12 text-center">
        <h1>All Done!</h1>
        <div class="subhead">
          <p class="font-20">Thank you for contacting Energy Saving Compare<br />
          We’re working on your quote now.</p>
        </div>
      </div>
      <div class="col-12 text-center py-5">
        <div class="">
          <h4 class="pb-3">There’s just one final step to finding your perfect energy quote.</h4>
          <p>To verify your details, one of our advisers needs to give you a call. This is to confirm your information and help compare quotes for you across providers.
          They will be calling you very shortly (or in the morning if it’s late!) for a quick chat.</p>
          <p class="highlight">Please keep your phone handy!</p>
        </div>
      </div>
    </div>

  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php include("./parts/slider.php");  ?>
      </div>
    </div>
  </div>
</section>









<?php include_once('footer.php'); ?>
