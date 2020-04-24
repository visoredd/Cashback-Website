<?php
        require_once 'user.php';
        require_once 'index.php'; 
        $mysqli = new mysqli("localhost", "root", "", "cashback");
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
        $result2 = $mysqli->query("SELECT * FROM cashback WHERE Useremail = '" . $userData['email'] . "'");
        while ($project =  mysqli_fetch_array($result2))
        {
            $paytm = $project['Pphone'];
            $bank = $project['IFSC'];
            $baccno = $project['BaccNo'];
            $baccty = $project['BaccTy'];
            $bacadr = $project['Baddr'];
            $bphone = $project['Bphone'];
            $baccname = $project['Bname'];
            $gift = $project['Gemail'];
            $gphone = $project['Gphone'];
            $gcategory = $project['Gradio'];
            $active = $project['active'];
            $available = $project['amount'];
        }

    }
?>

<?php

if(isset($_POST['confirm'])){
        $date = date('m/d/Y h:i:s', time());
  $cashcash = $ca - $available;
  $querycash = $mysqli->query("UPDATE cash SET cash = '".$cashcash."' WHERE email = '".$userData['email']."' ");
  $deletecash = $mysqli->query("DELETE FROM cashback WHERE Useremail = '".$userData['email']."' ");
  $insertall = $mysqli->query("INSERT INTO paycash (Useremail, Pphone, IFSC, BaccNo, BaccTy, Baddr, BPhone, Bname, Gemail, Gphone, Gradio, amount, date) VALUES ('".$userData['email']."','".$paytm."','".$bank."', '".$baccno."', '".$baccty."', '".$bacadr."', '".$bphone."', '".$baccname."', '".$gift."', '".$gphone."', '".$gcategory."', '".$available."', now())");
  header('Location:zumyi.php');

}
if(isset($_POST['cancel'])){
  $deletecash1 = $mysqli->query("DELETE FROM cashback WHERE Useremail = '".$userData['email']."' ");
        header('Location:withdraw.php');
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
            $(document).ready(function()
                {
                  $("tr:odd").css({
                    "background-color":"#fff",
                    "color":"#000"});
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
        .ntitle{
                color: #4a4a4a;
    font-size: 24px;
    font-weight: bold;
    padding-top: 20px;
    margin: 0;
    font-weight: bold;
        }
        .nstitle{
            color: #9b9b9b;
    font-weight: 300;
    font-size: 14px;
    letter-spacing: 0.2px;
    padding-top: 2px;
    margin: 0;
    margin-bottom: 10px;
        }
        
        .tdata{
                color: white !important;
                padding: 15px 56px;
            }
        .tdtd{
                padding: 15px 56px;
    color: #4a4a4a;
    font-size: 14px;
    text-align: left;
    width: 135px;

        }
        .profile-page-container .overview-container table td, .profile-page-container .payment-container table td{
            padding: 15px 56px;
        }
        .butrans{
            background-color: #cd3232;
    border: 2px solid #cd3232;
    display: inline-block;
    cursor: pointer;
    color: white;
    font-family: Arial;
    font-size: 14px;
    font-weight: bold;
    padding: 5px 10px;
    margin-top: 15px;
    text-decoration: none;
    outline: none;
    width: 161px;
    border-radius: 2px;
        }
        .butrans1{
            margin-left: 479px;
            background-color: #cd3232;
    border: 2px solid #cd3232;
    display: inline-block;
    cursor: pointer;
    color: white;
    font-family: Arial;
    font-size: 14px;
    font-weight: bold;
    padding: 5px 10px;
    margin-top: 15px;
    text-decoration: none;
    outline: none;
    width: 161px;
    border-radius: 2px;
        }
        .contable{

        }
        tbody td{
  padding: 30px;
}

tbody tr:nth-child(odd){
  background-color: #f3f9fc;
  color: #fff;
}
.redrow{
                background-color: #cd3232;
    font-weight: bold;
        }
        .clcca{
            color:black;
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
						<div class="info-header">
						</div>
					</div>
                    <div class="ntitle">Earned Cashback</div>
                    <div class="nstitle">Get your click ID</div>
                    <div>
                        <form method="POST">
                            <table class="contable">
                            </tbody>
                                <tr class="redrow" style="
                                    background-color:  #cd3232;
                                "><td class="tdata">DATE</td><td class="tdata">Merchant</td><td class="tdata">Clicked Url</td><td class="tdata">Status</td></tr>
                                <?php 
                                    $projects = array();
                                    $records = $mysqli->query("SELECT * FROM clickset WHERE email = '".$userData['email']."'");
                                    $s = 1;
                                    while ($project =  mysqli_fetch_array($records))
                                    {
                                        $projects[] = $project;
                                    }
                                    foreach ($projects as $project)
                                    {
                                ?>
                                <tr><td class="tdtd">
                                <?php echo $project['data']; ?>
                                </td>
                                <td class="tdtd"><?php echo $project['merchant']; ?></td><td class="tdtd"><a href="<?php echo $project['link']; ?>"><?php echo $project['description']; ?></a><td class="tdtd">
                                    <?php 
                                    if($project['active'] == 1){
                                        ?>
                                        Purchased
                                        <?php
                                    }else{
                                        ?>
                                        Clicked
                                        <?php
                                    }
                                    ?></td></tr><?php }
                                    ?>
                                </tbody>
                            </table>
                        </form>
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