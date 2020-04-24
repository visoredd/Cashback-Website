<?php 

$mysqli = new mysqli("localhost", "root", "", "cashback");

//Include the class.

    include "clusterdev.flipkart-api.php";

    //Replace <affiliate-id> and <access-token> with the correct values

    $flipkart = new \clusterdev\Flipkart("shahrusha1", "888b73480eb947719f34cb997246474b", "json");

    $url = 'https://affiliate-api.flipkart.net/affiliate/offers/v1/all/json';

    //Call the API using the URL.

    $details = $flipkart->call_url($url);

    if(!$details){

        echo 'Error: Could not retrieve products list.';

        exit();
    }

    //The response is expected to be JSON. Decode it into associative arrays.

    $details = json_decode($details, TRUE);
    $count = 0;
    $count1 = 0;
    $count2 = 0; 
    $count3 = 0;
    $products = $details['allOffersList'];

 ?>

 <!DOCTYPE html>
 <html>
<head>
        <title></title>
        
       <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="gogle/store.css" type="text/css" rel="stylesheet">
        </script>

        <link rel='stylesheet' type='text/css' href='gogle/zumyicss.css'>

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
        $(document).ready(function(){
            $("#lowarrow").click(function(){
                $("#higharrow").toggle();
            });
        });
</script>
    </head>
 <body>
 


<div id="sub-off-container-0" class="suboffer-ctr">
                                
                                <?php

                                $count2=0;
                                    foreach ($products as $product){
                                            //Keep count.
                                            if($product['category']=="Fashion & Lifestyle"){
                                            if($count2<=1){
                                            $count2++;
                                            //The API returns these values nested inside the array.
                                            //Only image, price, url and title are used in this demo
                                            $title = $product['title'];
                                            $productDescription = $product['description'];
                                            //We take the 200x200 image, there are other sizes too.
                                            $productImage = array_key_exists('200x200', $product['imageUrls'])?$product['imageUrls']['200x200']:'';
                                            $productUrl = $product['url'];
                                            ?>
                                    <a href="<?php echo $productUrl; ?>">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php }
                            }
                        }
                        ?>
                            
                <?php 

                    $projects = array();
                    $ar=0;
                    $records = $mysqli->query("SELECT * FROM amazon_fashion");
                    while ($project =  mysqli_fetch_array($records))
                    {
                        $projects[] = $project;
                    }
                    foreach ($projects as $project)
                    {
                        if($ar<=1){
                            ?>
                                    <a href="https://www.coupondunia.in/flipkart?h=psFp3Fqyss" title="Deal of the Day: Upto 90% Off on Various Products">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                 <?php
                            }
                        }
                            ?>
                                    <div class="shop-more-offers">
                                        <a href="https://www.coupondunia.in/category/fashion">See More Fashion Offers 
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="sub-off-container-3" class="suboffer-ctr" style="display:none">
                               <?php 

                    $projects = array();
                    $ar=0;
                    $records = $mysqli->query("SELECT * FROM amazon_mobiles");
                    while ($project =  mysqli_fetch_array($records))
                    {
                        $projects[] = $project;
                    }
                    foreach ($projects as $project)
                    {
                        if($ar<=1){
                ?>                         
                                    <a href="<?php echo $project['link']; ?>">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                            }
                        }
                            ?> 
                                    <div class="shop-more-offers">
                                        <a href="https://www.coupondunia.in/category/mobiles-and-tablets">See More Mobiles &amp; Tablets Offers <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="sub-off-container-4" class="suboffer-ctr" style="display:none">
                               <?php 
                    $projects = array();
                    $ar=0;
                    $records = $mysqli->query("SELECT * FROM amazon_mobiles");
                    while ($project =  mysqli_fetch_array($records))
                    {
                        $projects[] = $project;
                    }
                    foreach ($projects as $project)
                    {
                        if($ar<=1){
                ?>              <a href="<?php echo $project['link']; ?>">
                                    <div class="header-banner-store-card">
                                        <div class="header-banner-store-logo"><img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon"></div>
                                        <div class="header-banner-offer-detail">
                                        <div class="store-name">Flipkart</div>
                                        <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                        <div class="header-banner-cb-offer"><span class="cb-text flat-green"><span class="ico"></span><span> Upto 7.5% Rewards </span></span></div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                            ?> 
                                <div class="shop-more-offers"><a href="https://www.coupondunia.in/category/fashion">See More Fashion Offers <i class="fa fa-angle-right"></i></a></div>
                             </div>
                             <div id="sub-off-container-5" class="suboffer-ctr" style="display:none">
                               <?php 
                    $projects = array();
                    $ar=0;
                    $records = $mysqli->query("SELECT * FROM amazon_beauty");
                    while ($project =  mysqli_fetch_array($records))
                    {
                        $projects[] = $project;
                    }
                    foreach ($projects as $project)
                    {
                        if($ar<=1){
                ?> 
                                    <a href="<?php echo $project['link']; ?>">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                            }
                        }
                            ?>
                                <div class="shop-more-offers"><a href="https://www.coupondunia.in/category/beauty-and-health">See More Beauty &amp; Health Offers <i class="fa fa-angle-right"></i></a></div>
                             </div>
                             <div id="sub-off-container-6" class="suboffer-ctr" style="display:none">
                                <?php 
                    $projects = array();
                    $ar=0;
                    $records = $mysqli->query("SELECT * FROM amazon_computer");
                    while ($project =  mysqli_fetch_array($records))
                    {
                        $projects[] = $project;
                    }
                    foreach ($projects as $project)
                    {
                        if($ar<=1){
                ?>                  <a href="<?php echo $project['link']; ?>">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                            }
                        }
                            ?>
                                <div class="shop-more-offers"><a href="https://www.coupondunia.in/category/computers-laptops-and-gaming">See More Computers, Laptops &amp; Gaming Offers <i class="fa fa-angle-right"></i></a></div>
                             </div>
                             <div id="sub-off-container-7" class="suboffer-ctr" style="display:none">
                                <?php 
                    $projects = array();
                    $ar=0;
                    $records = $mysqli->query("SELECT * FROM amazon_fitness");
                    while ($project =  mysqli_fetch_array($records))
                    {
                        $projects[] = $project;
                    }
                    foreach ($projects as $project)
                    {
                        if($ar<=1){
                ?>                  <a href="<?php echo $project['link']; ?>">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $project['title']; ?> | <?php echo $project['description']; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                            }
                        }
                            ?>
                                <div class="shop-more-offers"><a href="https://www.coupondunia.in/category/appliances">See More Fitness Offers <i class="fa fa-angle-right"></i></a></div>
                             </div>
                             <div id="sub-off-container-8" class="suboffer-ctr" style="display:none">
                                <?php

                    $count = 0;
                    $count1 = 0;
                    $count2 = 0; 
                    $count3 = 0;
                    foreach ($products as $product){
                            //Keep count.
                            if($product['category']=="Home & Furniture"){
                            if($count2<=1){
                            $count2++;
                            //The API returns these values nested inside the array.
                            //Only image, price, url and title are used in this demo
                            $title = $product['title'];
                            $productDescription = $product['description'];
                            //We take the 200x200 image, there are other sizes too.
                            $productImage = array_key_exists('200x200', $product['imageUrls'])?$product['imageUrls']['200x200']:'';
                            $productUrl = $product['url'];
                            ?>
                                    <a href="<?php echo $productUrl; ?>">
                                        <div class="header-banner-store-card">
                                            <div class="header-banner-store-logo">
                                                <img class="placeholder-img" data-hover-src="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/amazon-logo-small.jpg?976041" alt="amazon">
                                            </div>
                                            <div class="header-banner-offer-detail">
                                                <div class="store-name">Flipkart</div>
                                                <div class="header-banner-offer-desc best-ofr-cb"><?php echo $title; ?> | <?php echo $productDescription; ?></div>
                                                <div class="header-banner-cb-offer">
                                                    <span class="cb-text flat-green">
                                                        <span class="ico"></span>
                                                        <span> Upto 7.5% Rewards </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                            }
                        }
                        ?>
                                    <div class="shop-more-offers"><a href="https://www.coupondunia.in/category/home-furnishing-and-decor">See More Home Furnishing &amp; Decor Offers <i class="fa fa-angle-right"></i></a></div>
                                </div>
 
 </body>
 </html>>


