<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
// On submitting form below function will execute.
if(isset($_POST['wallet'])){
  if (empty($_POST["phone"])) {
  $nameError = "Phone No. is required";
} else {
  $phone = test_input($_POST["phone"]);
  // check name only contains letters and whitespace
  if (!preg_match("/[0-9]/",$name)) {
  $nameError = "Invalid Phone format";
  }
  }
  if (empty($_POST["amount"])) {
  $emailError = "Amount is required";
  } else {
  $amount = test_input($_POST["amount"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/(0-9)/",$amount)) {
  $emailError = "Invalid amount format";
  }
  }
  
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
?>