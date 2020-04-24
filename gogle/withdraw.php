<?php
require_once './user.php';
        require_once './index.php'; 
        $mysqli = new mysqli("localhost", "root", "", "cashback");
        $result2 = $mysqli->query("SELECT * FROM cashback WHERE Useremail = '" . $userData['email'] . "'");
        if($result2->num_rows == 0){
            $query6 = "INSERT INTO cashback SET Useremail = '".$userData['email']."',amount ='0' ";
            $ins2 = $mysqli->query($query6);
        }
?>

<?php
        $result1 = $mysqli->query("SELECT email,cash,pending,available FROM cash WHERE email = '" . $userData['email'] . "'");
        if($result1 === FALSE) { 
            echo mysql_error(); // TODO: better error handling
        }else{
        while($row = mysqli_fetch_array($result1))
        {
            $ca= $row['cash'];
            $pen = $row['pending'];
            $av = $row['available'];
        }
        while ($project =  mysqli_fetch_array($result2))
        {
            $projectsamount = $project['amount'];
        }

    }
?>
<?php
// Initialize variables to null.
$ca2 =0;
$ca1 = 0;
$amount1 = 0;
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
 $ifscError = "";
 $acnameError = "";
 $acnoError = "";
 $acadError = "";
 $acpnoError = "";
 $bamountError = "";
 $gemailError = "";
 $gamountError = "";
 $gphoneError = "";
 $gradioError = "";
// On submitting form below function will execute.
if(isset($_POST['wallet'])){
  if (empty($_POST["phone"])) {
  $nameError = "Phone No. is required";
    } else {
  $phone = test_input($_POST["phone"]);
  // check name only contains letters and whitespace
  if (!preg_match("/[0-9+]/",$phone)) {
  $nameError = "Invalid Phone format";
  }
  }
  if (empty($_POST["amount"])) {
  $emailError = "Amount is required";
  } else {
  $amount = test_input($_POST["amount"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[0-9]/",$amount)) {
  $emailError = "Invalid amount format";
  }
}
  if($amount > $ca){
    $emailError = "Invalid Amount";
  }
  if($projectsamount>0){
    $emailError = "Please Confirm Previous Cashback";
  }
  if(empty($nameError) && empty($emailError)){
    $amount1 = (int)$amount;
    $ca1 = (int)$ca;
    if($result2->num_rows > 0){
        $ca2 = (int)$projectsamount+ $amount1 ; 
        $querycash = $mysqli->query("UPDATE cashback SET Useremail = '".$userData['email']."', Pphone = '".$phone."', amount = '".$ca2."' WHERE Useremail = '".$userData['email']."' ");
        header('Location: notification.php');
    }else{
        $insertcash = $mysqli->query("INSERT INTO cashback (Useremail, Pphone, amount) VALUES ('".$userData['email']."','".$phone."','".$amount."')");

    }
  }
  
}

if(isset($_POST['bank'])){
  if (empty($_POST["ifsc"])) {
  $ifscError = "IFSC is required";
} else {
  $ifsc = test_input($_POST["ifsc"]);
  // check name only contains letters and whitespace
  if (!preg_match("/[a-zA-Z0-9]/",$ifsc)) {
  $ifscError = "Invalid IFSC format";
  }
  }
  if (empty($_POST["acname"])) {
  $acnameError = "Name is required";
  } else {
  $acname = test_input($_POST["acname"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[a-zA-Z ]/",$acname)) {
  $acnameError = "Invalid Account Name format";
  }
  }
  if (empty($_POST["acno"])) {
  $acnoError = "Account No is required";
  } else {
  $acno = test_input($_POST["acno"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[0-9]/",$acno)) {
  $acnoError = "Invalid Account No format";
  }
  }
  if (empty($_POST["acad"])) {
  $acadError = "Account Address is required";
  } else {
  $acad = test_input($_POST["acad"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[0-9a-zA-Z,]/",$acad)) {
  $acadError = "Invalid Account No format";
  }
  }
  if (empty($_POST["acpno"])) {
  $acpnoError = "Phone No is required";
  } else {
  $acpno = test_input($_POST["acpno"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[0-9]/",$acpno)) {
  $acpnoError = "Invalid amount format";
  }
  }
  if (empty($_POST["bamount"])) {
  $bamountError = "Amount is required";
  } else {
  $bamount = test_input($_POST["bamount"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[0-9]/",$bamount)) {
  $bamountError = "Invalid amount format";
  }
}
  if($bamount > $ca){
    $bamountError = "Invalid amount format";
  }
  if($projectsamount>0){
    $bamountError = "Please Confirm Previous Cashback";
  }

  if(empty($ifscError) && empty($acnameError) && empty($acnoError) && empty($acadError) && empty($acpnoError) && empty($bamountError)){
    $amount1 = (int)$bamount;
    if($result2->num_rows > 0){
        $ca3 = (int)$projectsamount+ $amount1 ; 
        $querycash1 = $mysqli->query("UPDATE cashback SET Useremail = '".$userData['email']."', IFSC = '".$ifsc."', Bname = '".$acname."', BaccNo = '".$acno."', BaccTy = '".$_POST["actype"]."', Baddr = '".$acad."', Bphone = '".$acpno."' , amount = '".$ca3."' WHERE Useremail = '".$userData['email']."' ");
        header('Location: notification.php');
    }
  
}
}


if(isset($_POST['gift'])){
  if (empty($_POST["gemail"])) {
  $gemailError = "Email is required";
} else {
  $gemail = test_input($_POST["gemail"]);
  // check name only contains letters and whitespace
  if (!preg_match("/[0-9a-zA-Z@.]/",$gemail)) {
  $gemailError = "Invalid Email format";
  }
  }
  if (empty($_POST["gphone"])) {
  $gphoneError = "Phone No. is required";
} else {
  $gphone = test_input($_POST["gphone"]);
  // check name only contains letters and whitespace
  if (!preg_match("/[0-9+]/",$gphone)) {
  $gphoneError = "Invalid Phone format";
  }
  }
  if (empty($_POST["r1"])) {
  $gradioError = "Radio Button is required";
  }else {
  $gradio = test_input($_POST["r1"]);
  // check name only contains letters and whitespace
  if (!preg_match("/[a-zA-Z0-9]/",$gphone)) {
  $gradioError = "Invalid Radio format";
  }
  }
  if (empty($_POST["gamount"])) {
  $gamountError = "Amount is required";
  } else {
  $gamount = test_input($_POST["gamount"]);
  // check if e-mail address syntax is valid or not
  if (!preg_match("/[0-9]/",$gamount)) {
  $gamountError = "Invalid amount format";
  }
  }
  if($gamount > $ca){
    $gamountError = "Invalid amount format";
  }
  if($projectsamount>0){
    $gamountError = "Please Confirm Previous Cashback";
  }
  if(empty($gemailError) && empty($gphoneError) && empty($gamountError) && empty($gradioError)){
    $amount2 = (int)$gamount;
    if($result2->num_rows > 0){
        $ca4 = (int)$projectsamount+ $amount2 ; 
        $querycash2 = $mysqli->query("UPDATE cashback SET Useremail = '".$userData['email']."', Gemail = '".$gemail."',Gphone = '".$gphone."',  amount = '".$ca4."', Gradio = '".$gradio."'  WHERE Useremail = '".$userData['email']."' ");
        header('Location: notification.php');
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
        <script>
   $("#user-profile").hover(function(){
  $("#categories").css("visibility","visible"); 
});
$("#user-profile-dropdown").mouseout(function() {
    $("#user-profile-dropdown").css("visibility","hidden"); 
});
</script>
        <script>
            $(function() {
  $("#but1").click(function() {
    $(".fullscreen-container").fadeTo(200, 1);
  });
  $("#but2").click(function() {
    $(".fullscreen-container").fadeOut(200);
  });
  $("#but3").click(function() {
    $(".fullscreen-container1").fadeTo(200, 1);
  });
  $("#but4").click(function() {
    $(".fullscreen-container1").fadeOut(200);
  });
  $("#but5").click(function() {
    $(".fullscreen-container2").fadeTo(200, 1);
  });
  $("#but6").click(function() {
    $(".fullscreen-container2").fadeOut(200);
  });
});
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
            width:49.6554%;
        }
        .ewal{
                width: 360px;
    margin-left: 70px;
    position: absolute;

        }
        .phonenum{
                margin-top: 80px;
    float: left;
}
        }
        .profile-page-container .main-body .overview-container .profile-details .info-header .grid-container>div{
            font-size: 0px; 
            padding-top: 0px;
        }
        .gridcontainer{
            width: 100%;
    color: grey;
    font-size: 14px;
    margin-bottom: 60px;
    height: 250px;
    text-align: center;
    display: inline-block;
    border-right: 1px solid #D8E0E2;
    vertical-align: top;
        }
        .gridcontainer1{
            width: 100%;
    padding-top: 40px;
    color: grey;
    font-size: 14px;
    height: 250px;
    text-align: center;
    display: inline-block;
    border-right: 1px solid #D8E0E2;
    vertical-align: top;
        }
        .clobut {
  position: absolute;
  right: 32px;
  top: 32px;
  width: 32px;
  height: 32px;
  opacity: 0.3;
}
.clobut:hover {
  opacity: 1;
}
.clobut:before, .clobut:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: #333;
}
.clobut:before {
  transform: rotate(45deg);
}
.clobut:after {
  transform: rotate(-45deg);
}

        .tranfer{
                color: #4a4a4a;
    font-weight: bold;
    letter-spacing: 1px;
    margin-top: 25px;
    font-size: 18px;

        }
        .wallet-partner{
                    color: #9b9b9b;
    margin-top: 10px;
    min-height: 40px;
        }
        .butran{
                background-color: #9b9b9b;
    border-color: #9b9b9b;
    color: white;
    display: inline-block;
    cursor: pointer;
    color: white;
    font-family: Arial;
    font-size: 14px;
    font-weight: bold;
    padding: 5px 10px;
    margin-top: 25px;
    text-decoration: none;
    outline: none;
    width: 161px;
    margin-bottom: 20px;
    border-radius: 2px;

        }
        .butrans{
                background-color: #ce2929;
    border-color: #9b9b9b;
    color: white;
    display: inline-block;
    cursor: pointer;
    color: white;
    font-family: Arial;
    font-size: 14px;
    font-weight: bold;
    padding: 5px 10px;
    text-decoration: none;
    outline: none;
    width: 161px;
    margin-bottom: 20px;
    border-radius: 2px;

        }
        .walletpartner{
                color: #9b9b9b;
        }
        .hr{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .popup-overlay{
  /*Hides pop-up when there is no "active" class*/
  visibility:hidden;
  position:absolute;
  background:#ffffff;
  left:25%; 
      border: 3px solid #ce2929;
    width: 512px;
    height: 300px;
}
.popup-overlay.active{
  /*displays pop-up when "active" class is present*/
  visibility:visible;
  text-align:center;
  z-index: 1002;
    text-align: center;
    margin-left: 180px;
    margin-top: 50px;
}
}

.popup-content {
  /*Hides pop-up content when there is no "active" class */
 visibility:hidden;
}
.profile-page-container .overview-container table td, .profile-page-container .payment-container table td{
    padding:0px;
}
.profile-page-container .overview-container table, .profile-page-container .payment-container table{
    border:0px;

}

.popup-content.active {
  /*Shows pop-up content when "active" class is present */
  visibility: visible;
    }
    button.close{
        margin-right: 230px;
    }
    .fullscreen-container{
        display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(90, 90, 90, 0.5);
  z-index: 9999;
    }
    .fullscreen-container2{
        display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(90, 90, 90, 0.5);
  z-index: 9999;
    }
    .fullscreen-container1{
        display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(90, 90, 90, 0.5);
  z-index: 9999;
    }
    #popdiv {
  height: 410px;
  width: 500px;
  background-color: #ffffff;
  position: fixed;
      top: 76px;
    left: 420px;
    border: solid 3px #ce2929;
}
#popdiv2 {
  height: 431px;
    width: 500px;
    background-color: #ffffff;
    position: fixed;
    top: 66px;
    left: 420px;
    border: solid 3px #ce2929;
}
#popdiv1 {
  height: 480px;
  width: 584px;
  background-color: #ffffff;
  position: fixed;
      top: 40px;
    left: 420px;
    border: solid 3px #ce2929;
}
.paytm{
        width: 151px;
    height: 93px;
    margin-left: 90px;
        margin-left: 90px;
    margin-top: 30px;
    margin-bottom: 10px;
}
.phonenumber{
    width: 210px;
    margin: auto;
}
.phonenumber1{
    width: 210px;
    margin: auto;
    margin-top: 10px;
    margin-left: 10px;
    border: 1.4px solid #b70c0c;
    padding: 4 4 4 10;
    border-radius: 5px;
}
.phonenumber2{
    width: 210px;
    margin: auto;
    margin-top: 10px;
    margin-left: 10px;
    border: 1px solid #305c63;
    padding: 4 4 4 10;
    border-radius: 5px;
}
.clobut{
width: 20px;
    position: absolute;
    margin-left: 480px;
}
.rad,
.ckb{
  cursor: pointer;
  user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}
.rad > input,
.ckb > input{ /* HIDE ORG RADIO & CHECKBOX */
  visibility: hidden;
  position: absolute;
}
/* RADIO & CHECKBOX STYLES */
.rad > i,
.ckb > i{     /* DEFAULT <i> STYLE */
  display: inline-block;
  vertical-align: middle;
  width:  16px;
  height: 16px;
  border-radius: 50%;
  transition: 0.2s;
  box-shadow: inset 0 0 0 8px #fff;
  border: 1px solid gray;
  background: gray;
}
/* CHECKBOX OVERWRITE STYLES */
.ckb > i {
  width: 25px;
  border-radius: 3px;
}
.rad:hover > i{ /* HOVER <i> STYLE */
  box-shadow: inset 0 0 0 3px #fff;
  background: gray;
}
.rad > input:checked + i{ /* (RADIO CHECKED) <i> STYLE */
  box-shadow: inset 0 0 0 3px #fff;
  background: orange;
}
/* CHECKBOX */
.ckb > input + i:after{
  content: "";
  display: block;
  height: 12px;
  width:  12px;
  margin: 2px;
  border-radius: inherit;
  transition: inherit;
  background: gray;
}
.ckb > input:checked + i:after{ /* (RADIO CHECKED) <i> STYLE */
  margin-left: 11px;
  background:  orange;
}
.pospos{
            margin-left: 42px;
    position: absolute;
    margin-top: 42px;
}
.pospos1{
        margin-left: 189px;
    position: absolute;
    margin-top: 42px;
}
.posposimg{
position: absolute;
}
.posposimg1{
position: absolute;
    margin-left: 156px;
}
.giftgorm{
    margin-left: 15px;
}

    </style>
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
        .walletpartner1{
                color: #9b9b9b;
    margin-top: 64px;
    margin-left: 181px;
    position: absolute;
        }
        .clcov{
      font-weight: normal;
    color: #6C747F;
     }
     .clcwi{
      color: black;
    font-weight: bold;
     }
    </style>
    <?php include('header.php'); ?>
<div class="main">
    <div class="main-content">
        <div class="content-wrapper profile-page-container">
          <?php include('sidebar.php'); ?>
            <div class="main-body">
                <div class="overview-container">
                    <div class="profile-details">
                        <div class="heading">OVERVIEW</div>
                        <div class="fullscreen">
                        <div class="popup-overlay">
  <!--Creates the popup content-->
  
   <div class="popup-content">
      <h2>Pop-Up</h2>
      <p> This is an example pop-up that you can make using jQuery.</p>
     <!--popup's close button-->
      <button class="close">Close</button>    </div>
</div>
</div>
                        <div class="info-header">
                            <div class="gridcontainer1">
                                <div class="tranfer">TRANSFER TO E-WALLET</div>
                                <div class="available">Available:</div>
                                <div class="walletpartner">
                                Rs. <?php $ca; ?> availabe balance</div>
                                <button class="butran" id="but1">Tranfer</button>
                                <div class="fullscreen-container">
                                  <div id="popdiv">
                                    
                                    <div class="ewal">
                                    <h1>
                                      E - WALLET
                                    </h1>
                                    </div>
                                    <div class="clobut" id="but2">
                                    
                                    </div>
                                    <div class="paytm">
                                    <img src="https://aniportalimages.s3.amazonaws.com/media/details/PPBJan16.jpg" class="paytm" />
                                    </div>
                                    <div class="walletpartner">
                                    Our Wallet Partners</div>
                                    <div>
                                    <form action="" method="POST">
                                    Contact Info:<input type="text"  class="form-control phonenumber" name="phone" placeholder="Phone No." /><div class="error">* <?php echo $emailError;?></div>
                                        Amount: <input type ="text" class="form-control phonenumber" name="amount" placeholder="Amount" /><div class="error">* <?php echo $emailError;?></div>
                                    </div>

                                    <button type="submit" class= "butrans"  name="wallet" id="jredir">Submit</button>
                                    </form>
                                  </div>
                                </div>
                                <div>Minimum: PayTM: <strong>Rs.250</strong></div>
                            </div>
                            <hr>
                            <div class="gridcontainer">
                                <div class="tranfer">TRANSFER TO BANK</div>
                                <div class="wallet-partner">
                                You can request an NEFT tranfer to your bank account.</div>
                                <div class="note">Note: This takes upto 7 days.
                                </div>
                                <div class="available">Available:</div>
                                <div class="wallet-partner">
                                Rs. <?php $ca; ?> availabe balance</div>
                                <button class="butran" id="but3" >Create Request</button>
                                <div>Minimum: PayTM: <strong>Rs.250</strong></div>
                                <div class="fullscreen-container1">
                                  <div id="popdiv1">
                                    
                                    <div class="ewal">
                                    <h1>
                                      TRANSFER TO BANK
                                    </h1>
                                </div>
                                <div class="clobut" id="but4">
                                    
                                    </div>
                                <div class="phonenum"><table>
                                    <form action="" method="POST"><tr style="height: 10px"><th>
                                    IFSC CODE:</th><td><input type="text"  class="phonenumber1" name="ifsc" placeholder="IFSC Code" /></td><td><span class="error">* <?php echo $ifscError;?></span></td></tr><tr><th>
                                        Beneiciary Name: </th><td><input type ="text" class="phonenumber1" name="acname" placeholder="Beneficiary Name" /></td><td><span class="error">* <?php echo $acnameError;?></span></td></tr>
                                        <tr style="height: 10px"><th>
                                        Account No: </th><td><input type ="text" class="phonenumber1" name="acno" placeholder="Account No" /></td><td><span class="error">* <?php echo $acnoError;?></span></td></tr>
                                        <tr style="height: 10px"><th>
                                        Beneiciary Account Type: </th><td><select class="phonenumber1" name="actype">
                                          <option value="SAVINGS BANK">SAVINGS BANK</option>
                                          <option value="CURRENT ACCOUNT">CURRENT ACCOUNT</option>
                                          <option value="CASH CREDIT ACCOUNT">CASH CREDIT ACCOUNT</option>
                                          <option value="LOAN ACCOUNT">LOAN ACCOUNT</option>
                                          <option value="OVERDRAFT ACCOUNT">OVERDRAFT ACCOUNT</option>
                                          <option value="NRE ACCOUNT">NRE ACCOUNT</option>
                                        </select></td></tr>
                                        <tr style="height: 10px"><th>
                                        Beneiciary Address: </th><td><input type ="text" class="phonenumber1" name="acad" placeholder="Address" /></td></tr>
                                                <tr style="height: 10px"><th>
                                        Beneiciary Phone Number: </th><td><input type ="text" class="phonenumber1" name="acpno" placeholder="Phone" /></td><td><span class="error">* <?php echo $acpnoError;?></span></td></tr>
                                        <tr style="height:80px; width: 210px"><th>
                                        Amount: </th><td><input type ="text" class="form-control phonenumber2" name="bamount" placeholder="Amount Rs." /></td><td><span class="error">* <?php echo $bamountError;?></span></td></tr>
                                </table>

                                    <button type="submit" class= "butrans"  name="bank" >Submit</button></form>
                                </div>
                                </div>
                            </div>

                            </div>
                            <hr class="hr">
                            <div class="gridcontainer">
                                <div class="tranfer">CONVERT TO GIFT CARDS</div>
                                <div class="partner-section">
                                    <div class="partner-logo">
                                        <img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/withdraw_options/web/f883d88d089fbe967999f9a6727e09a1/logo_small-WEBxlogo_small.png?193914" alt="merchant-logo">
                                    </div>
                                    <div class="partner-logo">
                                        <img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/withdraw_options/web/6f4aa3d7613ea0a4a279b1cc95c01e2a/logo_small-WEBxlogo_small.png?119483" alt="merchant-logo">
                                    </div>
                                </div>
                                <div class="available">Available:</div>
                                <div class="wallet-partner">
                                Rs. <?php $ca; ?> availabe balance</div>
                                <button class="butran" id="but5">Get Gift Cards</button>
                                <div class="fullscreen-container2">
                                    <div id="popdiv2">
                                    
                                        <div class="ewal">
                                            <h1>
                                              GIFT CART
                                            </h1>
                                        </div>
                                        <div class="clobut" id="but6">
                                        
                                        </div>
                                        <div class="walletpartner1">
                                        Our Wallet Partners</div>
                                        <form action="" method="POST">
                                        <div class="paytm" style="margin-top: 80px; margin-left: 40px">
                                            <label class="rad">
                                                <input type="radio" name="r1" value="amazon" />
                                                <i class="pospos"></i><img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/withdraw_options/web/f883d88d089fbe967999f9a6727e09a1/logo_small-WEBxlogo_small.png?193914" alt="merchant-logo" class="posposimg">
                                            </label>
                                            <label class="rad">
                                                <input type="radio" name="r1" value="flipkart" />
                                                <i class="pospos1"></i>
                                                <img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/withdraw_options/web/6f4aa3d7613ea0a4a279b1cc95c01e2a/logo_small-WEBxlogo_small.png?119483" alt="merchant-logo" class="posposimg1">
                                            </label>
                                        </div>
                                        <span class="error" style="
                                            bottom: 251px;
                                            left: 162px;
                                            position:  absolute;
                                            /* margin: auto; */
                                        ">* <?php echo $gradioError;?></span>
                                        
                                        <div class="giftgorm">
                                            <table>
                                                
                                                    <tr style="height: 50px">
                                                        <th>Email:</th>
                                                        <td>
                                                            <input type="text"  class="form-control phonenumber" name="gemail" placeholder="Email" />
                                                        </td>
                                                        <td><span class="error">* <?php echo $gemailError;?></span></td>
                                                    </tr>
                                                    <tr style="height: 50px">
                                                        <th>Contact Info:</th>
                                                        <td><input type="text"  class="form-control phonenumber" name="gphone" placeholder="Phone No." /></td>
                                                        <td><span class="error">* <?php echo $gphoneError;?></span></td>
                                                    </tr>
                                                    <tr style="height: 50px">
                                                        <th>Amount: </th>
                                                        <td>
                                                            <input type ="text" class="form-control phonenumber" name="gamount" placeholder="Amount" /></td>
                                                        <td><span class="error">* <?php echo $gamountError;?></span></td>
                                                    </tr>
                                                    </table>
                                                    
                                                <button type="submit" class= "butrans"  name="gift" >Submit</button>
                                                
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div>Minimum: PayTM: <strong>Rs.250</strong></div>
                                </div>
                            </div>
                        <div class="recent-activity">
                            <p class="title">Recent Activity</p>
                            <p class="title-desc">A snapshot of your recent purchases made via CouponDunia</p>
                            <div class="text no-table-text">When you start shopping and earning Cashback it will start showing here. 
                            </div>
                        </div>
                    </div>
                    <div class="promotion-section cashback-section bonus-table">
                    </div>
                    <div class="refer-details-modal percentage-details-modal">
                        <div class="md-modal md-scaled-effect" id="percentage-details-modal">
                            <div class="md-content">
                                <div class="cd-modal-content">
                                    <div class="cd-modal-header">
                                        <div class="cd-modal-popup-close md-close perc-close">×</div>
                                    </div>
                                    <div class="cd-modal-body">
                                        <div class="share-promo"> There is no upper limit on the number of friends you can refer and also no cap on the amount of referral bonus you can earn. </div><div class="share-conditions">
                                            <div class="conditions">Conditions:
                                            </div>
                                            <ul>
                                                <div class="referral-info">
                                                    <li> Referral bonus is applicable only on the cashback/Rewards earnings by your friend, not applicable on any bonus earnings by your friend. </li>
                                                    <li> We will credit bonus to your account when your friends cash back is confirmed </li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cd-modal-footer">Example: If your friend earns Rs. 2000 confirmed cash back, you will get Rs. 200 as bonus</div>
                            </div>
                        </div>
                        <div class="md-overlay perc-close"></div>
                    </div>
                    <div class="refer-section">
                        <div class="left profile-refer-logo">
                            <div>
                                <p class="refer-title">Refer a friend</p>
                                <p>and earn</p>
                                <p class="ref-amount">10%</p>
                            </div>
                        </div>
                        <div class="right refer-details">
                            <div class="refer-info">Refer your friend &amp;</div>
                            <div class="refer-info">earn <span class="ref-amount">10% </span> of their cashback earnings forever. </div>
                            <div>There is no limit on the number of friends you can refer and also no cap on the amount of referral bonus you can earn. <span class="referral-details" id="percentage-details-popup">Details</span></div>
                            <a href="/profile/refer">
                                <button class="btn-refer">Invite &amp; Earn</button>
                            </a>
                        </div>
                    </div>
                </div>
                <script>GTM_DATA = {page: 'profile', profile:{ 'activity': 'overview' } };</script>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
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