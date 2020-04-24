<?php
        require_once 'user.php';
        require_once 'index.php'; 
        $mysqli = new mysqli("localhost", "root", "", "cashback");
        $result1 = $mysqli->query("SELECT email,cash FROM cash WHERE email = '" . $userData['email'] . "'");
        if($result1 === FALSE) { 
            echo mysql_error(); // TODO: better error handling
        }else{
        while($row = mysqli_fetch_array($result1))
        {
            $ca= $row['cash'];
        }

    }
$problemtype = '';
$category = '';
$textareaa = '';
if(!empty($_POST['Submit'])){
    if(empty($_POST['category'])){
        $category='Select Valid Category';
    }
    if(empty($_POST['problemtype'])){
        $problemtype = 'Select Valid Problem Type';
    }
    if(empty($_POST['textareaa'])){
        $textareaa = 'Description cannot be empty';
    }
    if(!empty($_POST['category']) && !empty($_POST['problemtype']) && !empty($_POST['textareaa'])){
        $inst = $mysqli->query("INSERT INTO support SET User = '".$userData['email']."', Category = '".$_POST['category']."', Title = '".$_POST['problemtype']."', Description = '".$_POST['textareaa']."'");
        header('Location:http://localhost/cashback/gogle/suppoort.php');
    }
  
}

?>
<html>
<head>
        <title></title>
        
       <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="store.css" type="text/css" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='overviewcash.css'>
        <link rel='stylesheet' type='text/css' href='zumyicss.css'>
        <script type="text/javascript">
        	function GoogleLogin() {
				var location = 'gogle/';
    			window.location.href = location;
			}
            function FbLogin() {
                var location = 'fb/index.php';
                window.location.href = location;
            }

        </script>
        <script language="javascript" type="text/javascript">  
$(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "How CouponDunia Works") {
            $("#size").html("<option value=''>Select a Category</option><option value='What is Cashback?'>What is Cashback?</option><option value='What are rewards?'>What are rewards?</option><option value='There was an offer on the site but now i cant see it. How to redeem it again?'>There was an offer on the site but now i cant see it. How to redeem it again?</option>");
        } else if (val == "Cashback Facts") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='How do I find out exact cashback for my planned purchase'>How do I find out exact cashback for my planned purchase</option><option value='Why is tracked pending cashback is always estimate'>Why is tracked pending cashback is always estimate</option><option value='Why does cashback take so long to confirm'>Why does cashback take so long to confirm</option><option value='I made a recharge which can not be returned or canclled. Why should I wait for 12 weeks'>I made a recharge which can not be returned or canclled. Why should I wait for 12 weeks</option><option value='Are there cases when there is no Cashback'>Are there cases when there is no Cashback</option><option value='What happens when my cashback is cancelled'>What happens when my cashback is cancelled</option>");
        } else if (val == "Cashback Issues") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='My cashback was not tracked at all, what do I do?'>My cashback was not tracked at all, what do I do?</option><option value='Why is my cashback pending for so long?'>Why is my cashback pending for so long?</option><option value='Why was my confirmed cashback different from pending cashback?'>Why was my confirmed cashback different from pending cashback?</option><option value='Why was my cashback cancelled?'>Why was my cashback cancelled?</option>");
        } else if (val == "Tracking") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='How can I ensure I get my cashback?'>How can I ensure I get my cashback?</option><option value='A few of my transactions did not get tracked. Do I need to submit a cashback claim for each one separately?'>A few of my transactions did not get tracked. Do I need to submit a cashback claim for each one separately?</option><option value='I do not have a proof of purchase, how do I submit a cashback claim?'>I do not have a proof of purchase, how do I submit a cashback claim?</option><option value='How do I disable Adblocker?'>How do I disable Adblocker?</option>");
        }else if (val == "Withdrawal") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='What can I do with my available balance? Does the money in my account expire?'>What can I do with my available balance? Does the money in my account expire?</option><option value='How do I withdraw my balance?'>How do I withdraw my balance?</option><option value='What are the minimum withdrawal limits?'>What are the minimum withdrawal limits?</option><option value='Which stores do not allow me to withdraw cashback to a bank account?'>Which stores do not allow me to withdraw cashback to a bank account?</option><option value='Can I transfer my balance to another CouponDunia account?'>Can I transfer my balance to another CouponDunia account?</option><option value='Im getting an error while withdrawing my balance. What do I do?'>Im getting an error while withdrawing my balance. What do I do?</option><option value='I have not received my withdrawal amount.'>I have not received my withdrawal amount.</option>");
        }else if (val == "Bonus") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='Why should I refer a friend?'>Why should I refer a friend?</option><option value='What is the joining/referral code field in the sign up form?'>What is the joining/referral code field in the sign up form?</option><option value='How can I make my joining bonus available?'>How can I make my joining bonus available?</option><option value='How does my referral bonus become available?'>How does my referral bonus become available?</option>");
        }else if (val == "Miscellaneous") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='I signed up using Google, can I switch my account to Facebook?'>I signed up using Google, can I switch my account to Facebook?</option><option value='I want to change the email address on my account, how do I do this?'>I want to change the email address on my account, how do I do this?</option><option value='How can I manage my email preferences?'>How can I manage my email preferences?</option><option value='I want to close my account, how do I do this?'>I want to close my account, how do I do this?</option><option value='Can I create more than one account on CouponDunia?'>Can I create more than one account on CouponDunia?</option><option value='My query is not listed. What do I do?'>My query is not listed. What do I do?</option>");
        }else if (val == "Partner With Us") {
            $("#size").html("<option value=''>Select Problem Type</option><option value='I have a business that I want to list on Zumyi, who should I talk to?'>I have a business that I want to list on CouponDunia, who should I talk to?</option>");
        }else if (val == "") {
            $("#size").html("<option value=''>Select a Category</option>");
        }
    });
});
//let's create arrays
</script>
</head>
<body>
     <style>
        .panel-footer{
            margin-top:10px;
        }
        * {
            border: 0;
            box-sizing: unset;
        }
        .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9{
            padding-left: 0px;
            padding-right: 0px;
        }
        .navbar .super-header .navbar-header .navbar-sign-form{
            margin-top: -69px;
        }
        .navbar{
            border:0px;
        }
        .navbar .super-header .navbar-header .input-group-main .input-group-addon{
            margin-right: -10;
            height: 29;
            width:35;
            border-radius: 4px;
        }
        .profile-page-container .main-body .overview-container .profile-details .info-header .grid-container{
        	width:49.655%;
        }
        .main-body{
    width: 73%;
    float: right;
    border-radius: 5px;
    display: inline-block;
        }
        .contact-us-container{

    border-radius: 5px;
    border: 1px solid #D8E0E2;
    background-color: white;

        }
        .heading-cashback{

    width: 100%;
    height: 65px;
    font-size: 16px;
    padding-top: 15px;
    background: #ececec;
    background: linear-gradient(#fff, #ececec);
    color: #cd3232;
    text-align: center;
    border-radius: 4px;
    letter-spacing: 3px;
    font-weight: bold;

        }
        .heading-desc{

    font-weight: 300;
    display: block;
    text-align: center;
    color: #000;
    letter-spacing: 0.5px;
    padding: 0 10px 0 10px;
    font-size: 12px;

        }
        .contact-us-form{

    padding-top: 40px;
    padding-bottom: 50px;

        }
        .input-holder{
          margin-top: 49px;
           margin-bottom: 56px;
        }
        .input-label{

    color: #424759;
    display: inline-block;
    width: 302px;
    text-align: right;

        }
        .select{
              background-color: white;
    color: #9b9b9b;
        }
        .contact-us-container .contact-us-form .input-holder .input-label{
          color: #424759;
    display: inline-block;
    width: 302px;
    text-align: right;
        }
        .contact-us-container .contact-us-form .input-holder input, .contact-us-container .contact-us-form .input-holder select{
              margin-left: 20px;
    height: 45px;
    width: 345px;
    display: inline-block;
    border: 1px solid #d5e2e2;
    outline: none;
    padding-left: 15px;
    line-height: 45px;
    font-size: 14px;
    border-radius: 4px;
        }
        .contact-us-container .contact-us-form .input-error{
          color: #eb3937;
    font-style: italic;
    text-align: right;
    width: 345px;
    margin-left: 325px;
        }
        .option{
          font-weight: normal;
    display: block;
    white-space: pre;
    min-height: 1.2em;
    padding: 0px 2px 1px;
        }
        .contact-us-container .contact-us-form .input-holder textarea{
              margin-left: 20px;
    height: 300px;
    width: 345px;
    display: inline-block;
    border: 1px solid #d5e2e2;
    outline: none;
    padding: 15px;
    font-size: 14px;
    border-radius: 4px;
        }
        .contact-us-container .contact-us-form .send-btn{
              height: 50px !important;
    width: 345px !important;
    line-height: 50px !important;
    background-color: #cd3232;
    margin-left: 325px;
        }
        .btn, .refer-section .refer-details .btn-refer, .contact-us-container .contact-us-form .send-btn, .claim-cashback-wrapper .claim-cashback-form .submit-btn{
          height: 50px !important;
    width: 345px !important;
    line-height: 50px !important;
    background-color: #cd3232;
    margin-left: 325px;
}

.btn, .refer-section .refer-details .btn-refer, .contact-us-container .contact-us-form .send-btn, .claim-cashback-wrapper .claim-cashback-form .submit-btn {
    border-radius: 4px;
    color: #fff;
    line-height: 60px;
    font-size: 14px;
    text-align: center;
    cursor: pointer;
    height: 60px;
    width: 177px;
    border: none;
    outline: none;
    padding: 0;
    font-weight: bold;
    display: inline-block;
        }
        .input-error{
          display: block;color: #eb3937;font-style: italic;text-align: right;width: 345px;margin-left: 325px;

        }
        .clcsup{
            color:black;
            font-weight: bold;
        }
    </style>
       <?php include('header.php') ?>
<div class="main">
	<div class="main-content">
		<div class="content-wrapper profile-page-container">
			<?php include("sidebar.php"); ?>
			<div class="main-body" >
        <div class="contact-us-container">
  <div class="heading-cashback">
    CONTACT US<br>
    <div class="heading-desc">If you are facing cashback related issues, like transactions not tracking, or transaction pending for too long, please fill out cashback related issues form. </div>
  </div>
  <form method="post" action="">
  <div class="contact-us-form">
    <div class="input-holder">
      <div class="input-label">Issue Category</div>
      <select class="error-highlight" id="type" name = "category"style="
    margin-left: 20px;
    height: 45px;
    width: 345px;
    display: inline-block;
    border: 1px solid #d5e2e2;
    outline: none;
    padding-left: 15px;
    line-height: 45px;
    font-size: 14px;
    border-radius: 4px;
">
        <option class="option" value="">Select a Category</option>
        <option class="option" value="How CouponDunia Works" >How CouponDunia Works</option>
        <option class="option" value="Cashback Facts">Cashback Facts</option>
        <option class="option" value="Cashback Issues">Cashback Issues</option>
        <option class="option" value="Tracking">Tracking</option>
        <option class="option" value="Withdrawal">Withdrawal</option>
        <option class="option" value="Bonus">Bonus</option>
        <option class="option" value="Miscellaneous">Miscellaneous</option>
        <option class="option" value="Partner With Us">Partner With Us</option>
      </select>
      <span class= "input-error" id ="contact-description-error"><?php echo $category; ?></span>
    <div class="input-holder" id="problem-type-holder">
      <div class="input-label">Problem Type</div>
      <select class="error-highlight" id="size" name = "problemtype" placeholder="Select Problem Type">
        <option value="" disabled="disabled" selected="">Select Problem Type</option>
      </select>
      <span class= "input-error" id ="contact-description-error"><?php echo $problemtype; ?></span>
    </div>
    <div class="faq-answer cHide" id="faq-answer">
      <div class="close-answer">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <div class="answer-text"></div>
    </div>
    <div class="input-holder cHide" id="contact-subject-holder">
      <div class="input-label">Subject</div>
      <input class="" id="contact-subject" placeholder="Enter your subject">
    </div>
    <div class="input-holder" id="problem-description-div">
      <div class="input-label" style="vertical-align: top;margin-top: 14px;">Problem Description</div>
      <textarea class="cd-site-textarea" id="contact-description" name = "textareaa" placeholder="Please try to be as detailed as possible while raising a ticket. A detailed description helps us resolve issues faster." style="z-index: auto;
    position: relative;
    line-height: normal;
    font-size: 14px;
    transition: none;
    background: transparent !important;"></textarea>
      <span class= "input-error" id ="contact-description-error"><?php echo $textareaa; ?></span>
    </div>
    <input type="submit" name = "Submit" value="Send" class = "send-btn" ></input>
  </form>
  </div>
</div>
        <script>GTM_DATA = {page: 'profile', profile:{ 'activity': 'overview' } };</script>
      </div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
<script>
 (function () {
 var container = document.querySelector('head');
 var scripts = ["https:\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/2.2.4\/jquery.min.js","https:\/\/www.google.com\/recaptcha\/api.js","https:\/\/d1nrhamtcpp354.cloudfront.net\/modules\/web\/assets\/dist\/fuckadblock.js?hash=4512a9e4577c9893fdab570056c39fd5481b4839","https:\/\/d1nrhamtcpp354.cloudfront.net\/modules\/web\/assets\/dist\/stores.js?hash=9bfb27d674a39df8158113c779b343f3d9129161"];
 scripts.forEach(function (src) { 
var el = document.createElement('script');
 el.src = src; el.async = false; 
container.appendChild(el); 
}) 
})
();
 </script>
</body>
</html>