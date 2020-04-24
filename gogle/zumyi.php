<?php
require_once 'user.php';
        require_once 'index.php'; 
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
        </script>

        <link rel='stylesheet' type='text/css' href='zumyicss.css'>
        <script>
   $("#user-profile").hover(function(){
  $("#categories").css("visibility","visible"); 
});
$("#user-profile-dropdown").mouseout(function() {
    $("#user-profile-dropdown").css("visibility","hidden"); 
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
    </style>
        <?php include('header.php'); ?>
<div id="mmmaaa">
        <br>
    <div class="container" id="c2">
         
            <div class="row">
                <div class="col-sm-12">
                    <div id="myslider" class="carousel slide tyu" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myslider" data-slide-to="0" class="active"></li>
                            <li data-target="#myslider" data-slide-to="1"></li>
                            <li data-target="#myslider" data-slide-to="2"></li>
                        </ol>
                        <div  class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/banner/web/bba464f2fc9416a8c697ca0073696b6e/banner_home-355x1180.jpg?33051" alt="fruit"/>
                            </div>
                            <div class="item">
                                <img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/banner/web/bfc099efe01dbdd970beedf644255f16/banner_home-355x1180.png?343042" alt="fruit"/>
                            </div>
                            <div class="item">
                                <img src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/banner/web/85f55b59b739917962fb75da8e4c1d6c/banner_home-355x1180.png?593761" alt="fruit"/>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myslider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                         <a class="right carousel-control" href="#myslider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                </div>
        </div>
    </div>
        <div id="banner_image" class="img-responsive"> 
            <div class="container">
            <div class="row text-center" id="log">
                <div class="modal fade" id="mymodal">
                    <div class="modal-content">
                <div class="col-sm-6 col-xs-12" id="logins"> 
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#userlog" data-toggle="tab"><b>LOGIN</b></a></li>
                                <li><a href="#signup" data-toggle="tab"><b>SIGN UP</b></a></li>
                            </ul>
                        </div>
                           <div class="tab-content">
                        <div class="panel-body tab-pane" id="signup">
                            <form method="post" action="user_signup.php">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="email" placeholder="E-Mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div><input name="submit" type="button" value="Google+" onclick="GoogleLogin();" class="c_btn_google"><input name="submit" type="button" value="facebook" onclick="FbLogin();" class="c_btn_fb"></div>
                                <div class="form-group">
                                    <button class=" btn btn-primary" type="submit"  name="submit">Submit</button>
                                </div>
                            </form>  
                        </div>
                           <div class="panel-body tab-pane active" id="userlog">
                               <form method="post" action="index.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="User E-Mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div><input name="submit" type="button" value="Google+" onclick="GoogleLogin();" class="c_btn_google"><input name="submit" type="button" value="Google+" onclick="FbLogin();" class="c_btn_fb"></div>
                                <div class="form-group">
                                    <button class=" btn btn-primary" type="submit"  name="login">Login</button>
                                </div>
                            </form>
                        </div>
                           </div>
                        
                   </div>
                        </div>
                    <div class="col-sm-6 col-xs-12" id="acc_content">
                        <h3>Benefits</h3> 
                    </div>
                     </div>
                    </div>
                </div>  
                   </div>
            </div>
    <div id="tbt">
        <br><br>
    <div id="box">
     <div class="container">
         <div>
             <h3><b>TOP STORES</b></h3>
            </div>
            <br>
        </div>
        <br>
    <div class="container" >
            <div class="row text-center">
            <div class="col-md-2 col-sm-6">
                <a href="amazon.php" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Amazon</p>
                    </div>
                </div>
                <div class="captio">
                    <div class="contetnt" id="yop">
                        Amazon
                    </div>
                </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="avcs.php" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="http://technians.com/wp-content/uploads/2017/09/flipkart1.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Flipkart</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Flipkart
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="ebay.php" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="http://www.fresherjobs9.com/wp-content/uploads/2016/02/new-ebay-logo.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Ebay</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Ebay 
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="firstcry.php" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="http://cdn.fcglcdn.com/brainbees/images/m/fc-logo.png" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>FirstCry</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        FirstCry
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml info">
                    <img src="http://www.daytondailynews.com/rf/image_large/Pub/p8/WHIO/2017/11/12/Images/pizzahut.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Pizza Hut</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Pizza Hut
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml info">
                    <img src="https://img3.nbstatic.in/la-l/5804a576d60180000dec1906.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Barbeque Nation</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Barbeque Nation
                    </div>
                    </div>
                </a>
            </div>
            </div>
        <div class="row text-center">
            <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="https://d1hl0z0ja1o93t.cloudfront.net/wp-content/uploads/2016/09/01181438/myntra.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Myntra</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Myntra
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="http://logos-download.com/wp-content/uploads/2016/05/Jabong_logo_logotype.png" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Jabong</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Jabong
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="https://img.etimg.com/thumb/msid-58907650,width-300,imgsize-207128,resizemode-4/naspers-leads-80-million-delivery-for-swiggy.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Swiggy</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Swiggy
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqQEnW9aobgT1mB8bYe2fS5DpBB0L8Wgxel9MqDXPniyZuF9ER0g" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Zomato</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Zomato
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div class="thumbnail htmlhtml">
                    <img src="https://in.bmscdn.com/in/common/facebook-og-bmslogo.jpg" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Book My Show</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Book My Show
                    </div>
                    </div>
                </a>
            </div>
                <div  class="col-md-2 col-sm-6 ">
                <a href="#" class="info">
                <div  class="thumbnail htmlhtml">
                    <img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/57cfacc40000ff00059465f5/0x0.png" alt="img-responsive" class="tty"/>
                    <div class="caption">
                        <p>Cool Winks</p>
                    </div>
                </div>
                    <div class="captio">
                    <div class="contetnt">
                        Cool Winks
                    </div>
                    </div>
                </a>
                </div></div></div></div>
    </div>
    <div id="blue">
        <br>
        <br>
        <div class="container">
             <div>
                 <h3><b>BEST OFFERS</b></h3>
                </div>
            </div>
            <br>
        <div class='container'>
                <div class="row text-center">
                <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://technians.com/wp-content/uploads/2017/09/flipkart1.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://technians.com/wp-content/uploads/2017/09/flipkart1.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                </div>
            <div class="row text-center">
                <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://technians.com/wp-content/uploads/2017/09/flipkart1.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                </div>
            <div class="row text-center">
                <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                </div>
            <div class="row text-center">
                <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                    <div  class="col-md-4 col-sm-6 ">
                    <a href="#">
                    <div class="thumbnail tati">
                        <img src="http://media.corporate-ir.net/media_files/IROL/17/176060/img/logos/amazon_logo_RGB.jpg" alt="img-responsive"/>
                        <div class="caption">
                            <p>Amazon</p>
                        </div>
                    </div></a>
                </div>
                </div>
            </div>
            <br>
            <br>
        </div>
       <?php include('footer.php'); ?>
</div>
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
