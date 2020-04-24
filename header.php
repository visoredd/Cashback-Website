
<header class="navbar" id="navbar">
            <div class="header-wrapper">
                <div class="super-header ">
                    <div class="content-wrapper ">
                        <div class="navbar-header ">
                            <a class="navbar-brand" href="https://www.coupondunia.in/">
                                <div>CASHBACK
                                </div>
                            </a>
                            <div class="input-group-main">
                                <div id="header-search-form">
                                    <form action="search.php">
                                        <input type="text" name="q" id="header-search-input" class="form-control" placeholder="Search for Flipkart, Amazon, Pizza etc." autocomplete="off">
                                            <label class="input-search-label">
                                            </label>
                                            <button type="submit" class="input-group-addon">
                                                <span class="header-footer-sprite search-white">
                                                </span>
                                            </button>
                                    </form>
                                </div>
                            </div>
                            <div class="search-suggestions-container" style="display: block;">
                                <div class="search-placeholder" style="display: none;">
                                    
                                    <div>
                                        <div class="you-can-search">YOU CAN SEARCH FOR</div>
                                        <div class="search-menu-placeholder search-desc-placeholder">
                                            <div class="search-cat">
                                                <i class="fa fa-globe search-placeholder-icon"></i>
                                                <div class="section-name"> Stores </div>
                                            </div>
                                            <div class="search-name">eg. Paytm, Domino's, Amazon...</div>
                                        </div>
                                        <div class="search-menu-placeholder search-desc-placeholder">
                                            <div class="search-cat"><i class="fa fa-cubes search-placeholder-icon"></i>
                                                <div class="section-name"> Categories </div>
                                            </div>
                                            <div class="search-name">eg. Recharge, Pizza, Flights...</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-search-div"></div>
                            </div>
                            <?php 
                            if(!isset($_SESSION['email'])){
                            ?>
                            <div class="navbar-sign-form">
                                <div class="login-container">
                                    <div class="header-user-profile">
                                        <img class="header-user-pic" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/default_user.png" alt="profile pic">
                                        <div class="header-user-detils">
                                            <div class="header-user-name">You</div>
                                            <div class="header-user-cashback-amt">Rs. 0</div>
                                            <i class="fa fa-angle-down header-angle-down"></i>
                                        </div>
                                        <span class="notify-unread">1</span>
                                    </div>
                                </div>
                                <?php
                                } else{
                                ?>
                                <div class="header-user-profile" id="user-profile">
                                    <img class="header-user-pic" src="https://d1nrhamtcpp354.cloudfront.net/modules/web/assets/images/default_user.png" alt="profile pic">
                                        <div class="header-user-detils">
                                            <div class="header-user-name">Aayush </div>
                                            <span class="cb-text flat-green">
                                                <span class="ico"></span>
                                                <span class="header-user-cashback-amt">Rs. 0</span>
                                            </span>
                                            <i class="fa fa-angle-down header-angle-down"></i>
                                        </div>
                                </div>
                                <?php } ?>
                                <div class="navbar-unsigned-component">
                                    <div class="navbar-cb-ctr">
                                        <span class="cb-text flat-green">
                                            <span class="ico"></span>
                                        </span>
                                    <div class="navbar-cb-text-ctr">
                                        <div class="navbar-cb-text-header">Earn Cashback</div>
                                        <div class="navbar-cb-text-body">Shop via CouponDunia to earn real cash into your CouponDunia account.</div>
                                        <a href="https://www.coupondunia.in/profile/support">Learn more</a>
                                    </div>
                                </div>
                                <div class="navbar-login-ctr">
                                    <a href="#mymodal" data-toggle="modal" data-target="#mymodal">
                                        <div class="sign-up signup-link">SIGN UP</div>
                                    </a>
                                    <div class="sign-up-ctr">
                                        <div class="navbar-new-user-text">Existing User?</div>
                                        <a href="#mymodal" data-toggle="modal" data-target="#mymodal">
                                        <div class="log-in signin-link">Log In</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="sub-header ">
                <div class="content-wrapper " id="sub-header" style="position: relative;">
                    <div class="header-left-block">
                        <div class="header-categories header-component" id="header-category">
                            <span class="header-block-txts" id="categories-tab">Categories</span>
                            <i class="fa fa-angle-down header-down-arrow"></i>
                        </div>
                        <div class="sub-header-divider">
                        </div>
                        <div class="header-popular-stores header-component" id="header-store">
                            <span class="header-block-txts" id="popular-stores">Top Stores</span>
                            <i class="fa fa-angle-down header-down-arrow"></i>
                        </div>
                        <div class="sub-header-divider">
                        </div>
                        <div class="header-best-offers header-component" id="header-offer">
                            <span class="header-block-txts" id="bestoffers-tab">Best Offers</span>
                            <i class="fa fa-angle-down header-down-arrow"></i>
                        </div>
                    </div>
                    <div class="header-right-block">
                        <div class="sub-header-divider"></div>
                        <div class="header-help-support header-component" id="header-help" style="width: 105px;">
                            <span class="header-block-txts">Help &amp; Support</span>
                        </div>
                        <div class="sub-header-divider"></div>
                        <a href="https://www.coupondunia.in/refer">
                            <div class="header-refer-earn header-component" id="header-refer"> Refer &amp; Earn <i class="fa fa-angle-down header-down-arrow"></i>
                            </div>
                        </a>
                        <div class="help-support-dropdown header-dropdown show-header" id="help-dropdown">
                            <a href="https://www.coupondunia.in/support/faqs" data-gtm="FAQ&#39;s">
                                <div class="help-link">FAQ's</div>
                            </a>
                            <a href="https://www.coupondunia.in/support" data-gtm="How it works">
                                <div class="help-link">How it works</div>
                            </a>
                            <a href="https://www.coupondunia.in/support/missing-cashbacks" data-gtm="Missing Cashback">
                                <div class="help-link">Cashback Issues</div>
                            </a>
                            <a href="https://www.coupondunia.in/support/contact-us" data-gtm="Contact us">
                                <div class="help-link">Contact us</div>
                            </a>
                        </div>
                    </div>
                    <div class="categories-ctr header-dropdown show-header" id="category-dropdown">
                        <div class="category-wrapper">
                            <a href="search.php?q=tv">
                                <div class="red heading">TV, Audio/Video &amp; Movies</div>
                            </a>
                            <a href="search.php?q=led">
                                <div class="sub-heading">LED</div>
                            </a>
                            <a href="search.php?q=tv">
                                <div class="sub-heading">TV Accessories</div>
                            </a>
                            <a href="search.php?q=theatre">
                                <div class="sub-heading">Home Theatre</div>
                            </a>

                            <a href="search.php?q=beauty">
                                <div class="red heading">Beauty &amp; Health</div>
                            </a>
                            <a href="search.php?q=makeup">
                                <div class="sub-heading">Makeup Accesseories</div>
                            </a>
                            <a href="search.php?q=vita">
                                <div class="sub-heading">Vitamin Supplements</div>
                            </a>
                            <a href="search.php?q=comp">
                                <div class="red heading">Computers, Laptops &amp; Gaming</div>
                            </a>
                            <a href="search.php?q=game">
                                <div class="sub-heading">Gaming Laptops</div>
                            </a>
                            <a href="search.php?q=lap">
                                <div class="sub-heading">Laptop Accessories</div>
                            </a>
                        </div>
                        <div class="category-wrapper tinu">
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="red heading">Home Furnishing &amp; Decor</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="sub-heading">Sofa Sets</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/books-and-stationary">
                                <div class="red heading">Books &amp; Stationery</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="sub-heading">Exam Books</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="sub-heading">Sci-fi,Romantic,Crime</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/sports-and-fitness">
                                <div class="red heading">Sports &amp; Fitness</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="sub-heading">Whey Protien</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="sub-heading">Gym Set</div>
                            </a>
                            <a href="https://www.coupondunia.in/category/home-furnishing-and-decor">
                                <div class="sub-heading">Exercise Accessories</div>
                            </a>
                        </div>
                    </div>
                    <div class="best-offers-ctr header-dropdown show-header" id="offer-dropdown">
                        <div class="main-categories-ctr" id="offer-category-ctr">
                            <div class="header-category selected-menu" id="off0"> Fashion<i class="fa fa-caret-right"></i></div>
                            <div class="header-category " id="off3"> Mobiles &amp; Tablets<i class="fa fa-caret-right"></i></div>
                            <div class="header-category " id="off4"> Beauty &amp; Health<i class="fa fa-caret-right"></i></div>
                            <div class="header-category " id="off6"> Computers, Laptops &amp; Gaming<i class="fa fa-caret-right"></i></div>
                            <div class="header-category " id="off8"> Home Furnishing &amp; Decor<i class="fa fa-caret-right"></i></div>
                       </div>
                       <div class="best-all-offers-ctr">
                            <div class="header-banner-ctr" id="header-banner-ctr">
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
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="cd-notify" id="notify" style="display: none;"></div>
            </div>
        </header>