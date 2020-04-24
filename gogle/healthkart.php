<?php $mysqli = new mysqli("localhost", "root", "", "cashback"); ?>
<!DOCTYPE html>

<!-- saved from url=(0035)https://www.coupondunia.in/flipkart -->
<html lang="en" dir="ltr" itemscope="" itemtype="http://schema.org/WebPage">
<head>
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="store.css" type="text/css" rel="stylesheet">
        
        <link rel='stylesheet' type='text/css' href='avcs.css'>
        <link rel='stylesheet' type='text/css' href='zumyicss.css'>
        <link rel='stylesheet' type='text/css' href='checkbox.css'>
        <style type='text/css'>
        #tbt{
            background-color: #f5f5f5;
        }
        #banner_image{
            position: fixed;
            z-index:2001;
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
        .regular-checkbox:checked:after {
    content: '\2714';
    font-size: 14px;
    position: absolute;
    top: 0px;
    left: 3px;
    color: #99a1a7;
}
.big-checkbox {
    padding: 18px;
}

.big-checkbox:checked:after {
    font-size: 28px;
    left: 6px;
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
        .offer-cards .offer-card-ctr .offer-card-wrapper .offer-card-holder .card-content-top{
            width:650px;
        }
        .main-body{
            width:880px;
        }
        .regular-checkbox {
    -webkit-appearance: none;
    background-color: #fafafa;
    border: 1px solid #cacece;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
    padding: 9px;
    border-radius: 3px;
    display: inline-block;
    position: relative;
}
.regular-checkbox:active, .regular-checkbox:checked:active {
    box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
}

.regular-checkbox:checked {
    background-color: #e9ecee;
    border: 1px solid #adb8c0;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
    color: #99a1a7;
}
.navbar .super-header .navbar-header .navbar-sign-form .login-container{
    margin-top: 18px;
}
.navbar .sub-header .header-right-block{
            margin-top:20px;
        }
        .navbar .sub-header{
            width:1000px;
            margin:auto;
        }
    </style>
    
    </head>
<body>
<script>
$(document).ready(function() {
   $('input[type="checkbox"]').click(function() {
       if($(this).attr('id') == 'checkbox-1-1') {
            $('#cat-filter-fashion').hide();
            $('#cat-filter-computers-laptops-and-gaming').hide(); 
            $('#cat-filter-mobiles-and-tablets').show();
            $('#cat-filter-tv-audio-video-and-movies').hide();
            $('#cat-filter-home-furnishing-and-decor').hide();
            $('#cat-filter-beauty-and-health').hide();
            $('#cat-filter-main').hide();   
       }
       if($(this).attr('id') == 'checkbox-1-2') {
            $('#cat-filter-fashion').show(); 
            $('#cat-filter-computers-laptops-and-gaming').hide(); 
            $('#cat-filter-mobiles-and-tablets').hide();
            $('#cat-filter-tv-audio-video-and-movies').hide();
            $('#cat-filter-home-furnishing-and-decor').hide();
            $('#cat-filter-beauty-and-health').hide();
            $('#cat-filter-main').hide();       
       }
       if($(this).attr('id') == 'checkbox-1-3') {
            $('#cat-filter-computers-laptops-and-gaming').show();           
            $('#cat-filter-fashion').hide();
            $('#cat-filter-mobiles-and-tablets').hide();
            $('#cat-filter-tv-audio-video-and-movies').hide();
            $('#cat-filter-home-furnishing-and-decor').hide();
            $('#cat-filter-beauty-and-health').hide();
            $('#cat-filter-main').hide();   
       }
       if($(this).attr('id') == 'checkbox-1-4') {
            $('#cat-filter-tv-audio-video-and-movies').show();
            $('#cat-filter-fashion').hide();
            $('#cat-filter-computers-laptops-and-gaming').hide(); 
            $('#cat-filter-mobiles-and-tablets').hide();
            $('#cat-filter-home-furnishing-and-decor').hide();
            $('#cat-filter-beauty-and-health').hide();
            $('#cat-filter-main').hide();         
       }
       if($(this).attr('id') == 'checkbox-1-5') {
            $('#cat-filter-home-furnishing-and-decor').show();
            $('#cat-filter-fashion').hide();
            $('#cat-filter-computers-laptops-and-gaming').hide(); 
            $('#cat-filter-mobiles-and-tablets').hide();
            $('#cat-filter-tv-audio-video-and-movies').hide();
            $('#cat-filter-beauty-and-health').hide();
            $('#cat-filter-main').hide();            
       }
       if($(this).attr('id') == 'cat-filter-mobiles-and-tablets-m') {
            $('#cat-filter-beauty-and-health').show();
            $('#cat-filter-fashion').hide();
            $('#cat-filter-computers-laptops-and-gaming').hide(); 
            $('#cat-filter-mobiles-and-tablets').hide();
            $('#cat-filter-tv-audio-video-and-movies').hide();
            $('#cat-filter-home-furnishing-and-decor').hide();
            $('#cat-filter-main').hide();          
       }
   });
});
</script>
<script>
$(document).ready(function() {
   $('#clear').click(function(){
    $("input[type='checkbox']").attr("checked",false);
    $('#cat-filter-main').show(); 
    $('#cat-filter-fashion').hide();
    $('#cat-filter-computers-laptops-and-gaming').hide(); 
    $('#cat-filter-mobiles-and-tablets').hide();
    $('#cat-filter-tv-audio-video-and-movies').hide();
    $('#cat-filter-home-furnishing-and-decor').hide();
    $('#cat-filter-beauty-and-health').hide();  
});
});
</script>
<?php include("header.php"); ?>

<script> var loggedIn =0; var userEmail =null; var dismissFlag = "1"; var fullCashbackActive = 0;</script><div class="sign-in-modal"><div class="md-modal md-scaled-effect " id="login-modal"><div class="md-content"><div class="cd-modal-content"><div class="sign-in-content"><div class="sign-in-info"><div class="earn-cb-text">EARN CASHBACK EVERY TIME YOU SHOP</div><div class="log-in-text">Login with CouponDunia</div><div class="cd-modal-popup-close disable-on-oh-wait md-close" data-modal="login-modal">×</div></div><div class="sign-in-form"><div class="social-media-sign-in-btn"><button type="button" class="navbar-brand facebook-sign-in" id="facebook-sign-in"><i class="fa fa-facebook"></i><span class="social-login-text">Sign in with Facebook</span></button><div id="google-sign-in" class="customGPlusSignIn google-sign-in"><span class="icon"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/google_icon.png"></span><span class="buttonText">Sign in with Google</span></div></div><div class="or-btn">Or</div><div class="sign-in-details"><form id="signin-form" action="https://www.coupondunia.in/flipkart?" autocomplete="on"><div class="sign-in-input-ctr signin-email-box"><input class="sign-in-input" type="text" id="signin-email" name="email" data-box="signin-email-box" data-error="signin-email-error"><label class="sign-in-label" for="signin-email"><span class="input-label-content">Email</span></label><span class="popup-error signin-email-error" style="top: 56px; right: 0px;display:none">Email is not valid.</span></div><div class="sign-in-input-ctr signin-password-box"><input class="sign-in-input password-toggle" style="font-weight: bold;" type="password" id="signin-password" name="password" data-box="signin-password-box" data-error="signin-password-error" autocomplete="off"><label class="sign-in-label" for="signin-password"><span class="input-label-content">Password</span></label><img class="show-password" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/eye.png" data-input="signin-password" alt="show"><span class="popup-error signin-password-error" style="top: 56px; right: 0px;display:none">Min 6 alpha-numeric characters.</span></div><div class="g-recaptcha" data-sitekey="6LcAIz8UAAAAANGXThacyXlT8S1AleStOQE3mfR_" data-callback="recaptcha_callback" data-size="invisible"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; transition: right 0.3s ease; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px;"><div class="grecaptcha-logo"><iframe src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/anchor.html" width="256" height="60" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div><div class="popup-forgot-password-btn" id="forgot-password">Forgot Password?</div><button type="submit" class="sign-in-btn enable-close-btns">SIGN IN</button></form></div></div></div><div class="cd-modal-footer with-gray-footer"><div class="bottom-panel-grey" style="display:none"><div class="panel-text">You're about to earn <span class="red"></span> Cashback. For higher Cashback of <span class="red"></span><a>shop via our mobile website!</a></div></div><div class="sign-up-text"> Don't have an account? <a class="bold signup-link">Sign Up</a></div></div></div></div></div><div class="md-overlay remove-close" data-modal="login-modal"></div></div><div class="sign-in-modal forgot-password-modal"><div class="md-modal md-scaled-effect" id="forgot-modal"><div class="md-content"><div class="cd-modal-content"><div class="sign-in-content"><div class="log-in-text">Forgot Password</div><div class="cd-modal-popup-close md-close disable-on-oh-wait" data-modal="forgot-modal">×</div><div class="sign-in-form"><div class="forgot-modal-title"> Please enter your Email address and we will send you a reset password link </div><div class="sign-in-details"><form action="https://www.coupondunia.in/flipkart?" id="forgot-form"><div class="sign-in-input-ctr forgot-email-box"><input class="sign-in-input" type="text" name="email" id="forgot-email" data-box="forgot-email-box" data-error="forgot-email-error"><label class="sign-in-label" for="forgot-email"><span class="input-label-content" data-content="Email">Email</span></label></div><span class="popup-error forgot-email-error" style="display:none">Email is not valid.</span><button type="submit" class="sign-in-btn enable-close-btns">Send Reset Password Link</button></form></div></div></div><div class="cd-modal-footer">New to CouponDunia? <a class="signup-link">Sign Up</a></div></div></div></div><div class="md-overlay remove-close" data-modal="forgot-modal"></div></div><div class="sign-in-modal reset-password-modal"><div class="md-modal md-scaled-effect" id="reset-modal"><div class="md-content"><div class="cd-modal-content"><div class="sign-in-content"><div class="log-in-text">Reset Password</div><div class="cd-modal-popup-close md-close " data-modal="reset-modal">×</div><div class="sign-in-form"><div class="forgot-modal-title"> Almost done! Enter your new password </div><div class="sign-in-details"><form id="reset-form" action="https://www.coupondunia.in/flipkart?"><div class="sign-in-input-ctr reset-password-box"><input class="sign-in-input password-toggle" type="password" name="password" id="reset-password" data-box="reset-password-box" data-error="reset-password-error"><label class="sign-in-label" for="reset-password"><span class="input-label-content" data-content="Enter Password">Enter Password</span></label></div><span class="popup-error reset-password-error" style="display:none"> Min 6 alpha-numeric characters.</span><div class="sign-in-input-ctr reset-confirm-box"><input class="sign-in-input password-toggle" type="password" name="password" id="reset-confirm" data-box="reset-confirm-box" data-error="reset-confirm-error"><label class="sign-in-label" for="reset-confirm"><span class="input-label-content" data-content="Re-enter new Password">Re-enter new Password</span></label></div><span class="popup-error reset-confirm-error" style="display:none">The passwords don't match</span><button type="submit" class="sign-in-btn">Reset Password</button></form></div></div></div></div></div></div><div class="md-overlay" data-modal="reset-modal"></div></div><div class="sign-up-modal"><div class="md-modal md-modal-new md-scaled-effect " id="signup-modal"><div class="md-content"><div class="cd-modal-content"><div class="sign-up-content"><div class="sign-up-attract"><div class="earn-cb-text">EARN CASHBACK EVERY TIME YOU SHOP</div><div class="log-in-text">Sign up with CouponDunia</div><div class="cd-modal-popup-close disable-on-oh-wait md-close" style="display:none" data-modal="signup-modal">×</div></div><div class="sign-up-form-new" style="margin-top: 40px"><div class="social-media-sign-in-btn"><button type="button" class="navbar-brand facebook-sign-in facebook-sign-up"><i class="fa fa-facebook"></i><span class="social-login-text">Sign up with Facebook</span></button><div id="customBtn-signup-google" class="customGPlusSignIn google-sign-up google-sign-up"><span class="icon"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/google_icon.png"></span><span class="buttonText">Sign up with Google</span></div></div><div class="or-btn">OR</div><div class="sign-up-details"><form id="signup-form" action="https://www.coupondunia.in/flipkart?" autocomplete="on"><div class="sign-up-input-ctr signup-email-box"><input class="sign-in-input sign-up-email-input" id="signup-email" type="text" name="email" data-box="signup-email-box" data-error="signup-email-error"><label class="sign-up-label" for="signup-email"><span class="input-label-content" data-content="Email">Enter your E-mail</span></label></div><button type="submit" class="sign-up-btn no-margin">JOIN</button><div class="popup-error signup-email-error" style="display:none">Email is not valid.</div><div class="sign-up-tc">By signing up you agree to the <a href="https://www.coupondunia.in/terms-service"><span>Terms &amp; Conditions.</span></a></div></form></div></div></div><div class="cd-modal-footer">Already have an account? <a class="signin-link">Sign in</a></div></div></div></div><div class="md-overlay remove-close" data-modal="signup-modal"></div></div><div class="sign-up-modal-2"><div class="md-modal md-modal-new md-scaled-effect" id="signup-modal-2"><div class="md-content"><div class="cd-modal-content"><div class="sign-up-content"><div class="sign-up-attract-new"><div class="earn-cb-text">EARN CASHBACK EVERY TIME YOU SHOP</div><div class="log-in-text">Sign up with CouponDunia</div><div class="cd-modal-popup-close disable-on-oh-wait md-close" data-modal="signup-modal-2" style="display:none">×</div></div><div class="sign-up-id"><div class="earn-cb-text">You are signing up with</div><div class="log-in-text" id="sign-top-email"></div><div><span class="change-email" id="change-modal">Change Email</span></div></div><div class="sign-up-form sign-up-form-new" style="margin-top: 24px"><div class="sign-up-details sign-up-details-new"><form id="signup-form-2" action="https://www.coupondunia.in/flipkart?" autocomplete="on"><div class="sign-up-input-ctr sign-up-input-ctr-new signup-password-box"><input class="sign-in-input password-toggle" style="font-weight: bold;" type="password" name="password" id="signup-password" data-box="signup-password-box" data-error="signup-password-error" autocomplete="off"><label class="sign-up-label" for="signup-password"><span class="input-label-content" data-content="Password">Type a New Password</span></label>
    <img class="show-password" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/eye.png" data-input="signup-password" alt="show"></div><div class="popup-error signup-password-error" style="display:none">Min 6 alpha-numeric characters.</div><div class="sign-up-input-ctr sign-up-input-ctr-new signup-firstname-box"><input class="sign-in-input" type="text" name="firstname" id="signup-firstname" data-box="signup-firstname-box" data-error="signup-firstname-error"><label class="sign-up-label" for="signup-firstname"><span class="input-label-content" data-content="First Name">First Name</span></label></div><div class="popup-error signup-firstname-error" style="display:none">Only text characters are allowed.</div><div class="is-referred">Did someone refer you?</div><div class="sign-up-input-ctr sign-up-input-ctr-new signup-referral-box" id="email-signup-referral-box"><input class="sign-in-input" type="text" name="referralCode" id="signup-referral" data-box="signup-referral-box" value="" autocomplete="off"><label class="sign-up-label" for="signup-referral"><span class="input-label-content" data-content="Joining/Referral code (optional)">Enter Referral Code</span></label></div><div class="popup-error signup-referral-code-error" style="display:none">Code Invalid!.</div><button type="submit" class="sign-up-btn no-margin enable-close-btns">CREATE ACCOUNT</button><div class="sign-up-tc">By signing up you agree to the <a href="https://www.coupondunia.in/terms-service"><span>Terms &amp; Conditions.</span></a></div></form></div></div></div><div class="cd-modal-footer">Already have an account? <a class="signin-link">Sign in</a></div></div></div></div><div class="md-overlay remove-close" data-modal="signup-modal-2"></div></div><div class="common-loader" id="common-loader" style="display:none"><div class="common-overlay"></div><div class="loader-gif-icon"><div class="cd-loader"></div></div></div><div class="alert-modal"><div class="md-modal md-scaled-effect" id="alert-modal"><div class="md-content"><div class="cd-modal-content"><div class="cd-modal-header"><div class="md-close alert-popup-close" data-modal="alert-modal">×</div></div><div class="cd-modal-body error" id="alert-body"><div class="alert-msg" id="alert-msg"></div>
</div></div></div></div><div class="md-overlay alert-popup-close" data-modal="alert-modal"></div></div><script> var newSignupModalFlag = "1"; var userReferralDetails = "0"; var isReferralScheme = 0; </script><script type="text/javascript"> var useRecaptcha =1; function recaptcha_callback() { CD.c.auth.captchaLogin(); }</script>
<div class="main"><div class="ext-feedback-content cHide"><span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. <a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a><div class="available-txt"><div class="txt">Available on </div><div class="home-sprite chrome_icon"></div><div class="home-sprite firefox_icon"></div></div></div><div class="get-code-modal-old merchant-app-modal"><div class="md-modal get-code-modal-popup md-scaled-effect" id="merchantAppOnlyModal"><div class="md-content"><div class="cd-modal-content"><div class="cd-modal-header"><div class="cd-modal-popup-close md-close get-code-close-modal app-only-md-close" data-modal="merchantAppOnlyModal">×</div></div><div class="cd-modal-body"><div class="left-content"><div class="title-banner"><span>Offer valid only on <span data-type="html" data-model="storeName"></span> App</span><div class="arrow-down"></div></div><div class="send-txt">SEND THIS OFFER TO YOUR PHONE</div><div class="bottom-ctr merchant-app-code-div" data-type="visible" data-model="couponCode"><div class="coupon-txt">Use Coupon Code</div><div class="code-holder" data-type="html" data-model="couponCode"></div>
</div></div><div class="right-content"><div class="input-holder"><input type="text" class="phone_txt" placeholder="Enter Phone Number" id="merchant-app-mobile-number"><div class="send-btn merchant-app-send-sms">SEND</div></div></div></div><div class="cd-modal-footer"><div class="get-coupon-sprite subscribe-footer"><div class="store-logo"><img class="popup-store-image placeholder-img" data-type="img" data-model="storeImage" alt="store"></div><div class="subsc-right-holder"><div class="subsc-title">Get deals from <span data-type="html" data-model="storeName"></span> in your email</div><div class="subsc-desc">Subscribe now to get handpicked deals from <span data-type="html" data-model="storeName"></span> in your email.</div><div class="subsc-btn-holder"><input class="subsc-email" id="merchant-app-email" placeholder="Type in your email"><span class="subsc-btn">Subscribe</span></div><div class="subsc-error"></div></div></div></div></div></div></div><div class="md-overlay md-close get-code-close-modal app-only-md-close" data-modal="merchantAppOnlyModal"></div></div><div class="start-shop-modal get-code-modals"><div class="md-modal get-code-modal-popup md-scaled-effect" id="startShopModal"><div class="md-content"><div class="cd-modal-content "><div class="cd-modal-header"><div class="cd-modal-popup-close md-close get-code-close-modal">×</div><div class="offer-logo"><img class="placeholder-img" data-type="img" data-model="storeImage" alt="store"></div><div class="offer-description"><div class="store-name" data-type="html" data-model="storeName"></div><div class="title" data-type="html" data-model="offerTitle"></div></div></div></div><div class="down-arrow"></div><div class="cd-modal-bottom"><div data-type="visible-condition" data-model="1"><div data-type="visible" data-model="isCashback">
    <div class="cb-avail-txt">You’re now ready to avail extra cashback from CouponDunia</div><button onclick="CD.p.offer.showGetCodeCoupon();">Show Coupon Code</button><div class="help-txt">Please note that it may take upto 72 hours to track your cashback.</div></div><div data-type="visible" data-model="!isCashback"><div class="cb-avail-txt">Thanks for logging in!</div><button onclick="CD.p.offer.showGetCodeCoupon();">Show Coupon Code</button></div></div><div data-type="visible-condition" data-model="2"><div data-type="visible" data-model="isCashback"><div class="cb-avail-txt">You’re now ready to avail extra cashback from CouponDunia</div><button onclick="CD.p.offer.showGetCodeCoupon();">Show Coupon Code</button><div class="help-txt">Please note that it may take upto 72 hours to track your cashback.</div></div><div data-type="visible" data-model="!isCashback"><div class="cb-avail-txt">Thanks for logging in!</div><button onclick="CD.p.offer.showGetCodeCoupon();">Show Coupon Code</button></div></div></div>
</div><div class="bottom-panel-grey cHide" data-type="visible" data-model="wapHasHigherCashback"><div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText"></span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType"></span> of <span class="red" data-type="html" data-model="mobileCashbackValue"></span><span><a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a></span></div></div></div><div class="md-overlay get-code-close-modal"></div></div><div class="get-code-modal get-code-modals"><div class="md-modal get-code-modal-popup md-scaled-effect get-code-feedback-slider" id="getCodeModal"><input type="radio" name="slides-recent-offer1" id="slide_11" checked=""><input type="radio" name="slides-recent-offer1" id="slide_21"><input type="radio" name="slides-recent-offer1" id="slide_31"><input type="radio" name="slides-recent-offer1" id="slide_41"><ul><li><div class="md-content">
    <div class="cd-modal-content "><div class="cd-modal-header"><div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="getCodeModal">×</div><div class="offer-logo"><img class="placeholder-img" data-type="img" data-model="storeImage" alt="store"></div><div class="offer-description"><div class="store-name" data-type="html" data-model="storeName"></div><div class="title" data-type="html" data-model="offerTitle"></div></div></div></div><div class="down-arrow"></div>
    <div class="cd-modal-bottom "><div class="sign-up-txt" data-type="visible" data-model="isCashback"><span class="cb-txt cb-text flat-green"><span class="ico"></span><span class="cashback-amt-span" data-type="html" data-model="cashbackText"></span></span><span> for registered users </span><span class="signup-link get-code-signup" data-parent-modal="getCodeModal"><i class="fa fa-caret-right"></i> Sign up</span></div><div class="popup-code-block"><span class="code-txt" data-type="html" data-model="couponCode"></span><span class="copy-btn" data-type="attribute" data-attr-name="data-clipboard-text" data-model="couponCode">COPY CODE</span></div><div class="popup-goto-link"><span class="load-offer-btn outlink" gtm-trigger="outclick">Visit <span data-type="html" data-model="storeName"></span></span> and paste your code at checkout </div><div class="popup-error" data-type="visible" data-model="getCodeError">Something went wrong !</div></div></div><div class="bottom-panel-grey cHide" data-type="visible" data-model="wapHasHigherCashback"><div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText"></span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType"></span> of <span class="red" data-type="html" data-model="mobileCashbackValue"></span><span><a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a></span></div></div></li><li><div class="md-content"><div class="cd-modal-content"><div class="cd-modal-header cd-feedback-header track-deal-feedback-header"><div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="getCodeModal">×</div><div class="offer-logo"><img class="placeholder-img" data-type="img" data-model="storeImage" alt="store"></div><div class="offer-description"><div class="store-name" data-type="html" data-model="storeName"></div><div class="title" data-type="html" data-model="offerTitle"></div></div></div></div><div class="down-arrow"></div><div class="cd-modal-footer cd-feedback-footer get-code-feedback-footer"><div class="offer-feedback-heading">One last thing, <span>did this offer work for you?</span></div><div class="offer-feedback-btns"><span class="thumbs-up thumbs-up-feedback-modal" id="thumbs-up-popup1" onclick="CD.c.getcode.upvoteOffer(&#39;1&#39;); CD.p.offer.updateOfferCardThumb(true);"><i title=" Yay, it worked!" class="fa fa-thumbs-o-up fa-lg"></i><span>Yes</span></span><span class="thumbs-down thumbs-down-feedback-modal" id="thumbs-down-popup1" onclick="CD.c.getcode.downvoteOffer(&#39;1&#39;); CD.p.offer.updateOfferCardThumb(false)"><i title="It didn’t work!" class="fa fa-thumbs-o-down fa-lg"></i><span>No</span></span></div><div class="cd-modal-back-deal md-back" onclick="CD.c.getcode.backToCoupon(&#39;1&#39;)"><i class="fa fa-arrow-left"></i><span>BACK TO OFFER</span></div></div></div><div class="ext-feedback ext-feedback-footer"><span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. <a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a><div class="available-txt"><div class="txt">Available on </div><div class="home-sprite chrome_icon"></div><div class="home-sprite firefox_icon"></div></div></div></li><li><div class="md-content"><div class="cd-modal-content"><div class="cd-modal-header cd-feedback-header cd-yes-header">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="getCodeModal">×</div>
<div class="offer-logo"><img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div><div class="offer-description">
<div class="store-name" data-type="html" data-model="storeName"></div>
<div class="title" data-type="html" data-model="offerTitle">
</div>
</div>
</div>
</div>
<div class="down-arrow">
</div>
<div class="cd-modal-footer cd-feedback-footer cd-yes-footer">
<div id="offer-feedback-thanks-1">
</div>
<div class="feedback-comment-unauth">
<div class="feedback-comment">
<textarea id="feedback-comment-ta-1" name="feedback" placeholder="Type your comment here…">
</textarea></div><div class="feedback-name">
<input class="name-input-box post-comment-name-1" type="text" name="name" placeholder="Enter your name here…">
<span class="feedback-popup-submit-btn" id="feedback-popup-submit-1" onclick="CD.p.offer.postCommentFromPopup(&quot;false&quot;, &quot;1&quot;);">SUBMIT</span>
<div class="cd-modal-back-deal md-back" onclick="CD.c.getcode.backToCoupon(&#39;1&#39;)">

<i class="fa fa-arrow-left"></i>
<span>BACK TO OFFER</span>
</div>
</div>
</div>
</div>
</div>
 <div class="ext-feedback ext-feedback-footer">
<span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. 
<a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a>
<div class="available-txt">
<div class="txt">Available on </div>
<div class="home-sprite chrome_icon">
</div>
<div class="home-sprite firefox_icon">
</div>
</div>
</div>
</li>
<li>
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-header cd-feedback-header track-deal-feedback-header">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="getCodeModal">×</div>
<div class="offer-logo">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
<div class="offer-description">
<div class="store-name" data-type="html" data-model="storeName">
</div>
<div class="title" data-type="html" data-model="offerTitle">
</div>
</div>
</div>
</div>
<div class="down-arrow">
</div>
<div class="cd-modal-footer cd-feedback-footer cd-comment-posted">
<div class="comment-posted-text">Your comment has been posted successfully!</div>
<a data-type="link" data-model="anchor-tag">
<div class="offer-comment-success-desc"> View <span class="comments-count-1" data-type="html" data-model="comment_count">
</span>
</div>
</a>
<div class="cd-modal-back-deal md-back" onclick="CD.c.getcode.backToCoupon(&#39;1&#39;)">
<i class="fa fa-arrow-left">
</i>
<span>BACK TO OFFER</span>
</div>
</div>
</div>
<div class="ext-feedback ext-feedback-footer">
<span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. 
<a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a>
<div class="available-txt">
<div class="txt">Available on </div>
<div class="home-sprite chrome_icon">
</div>
<div class="home-sprite firefox_icon">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="md-overlay get-code-close-modal">
</div>
</div>
<div class="oh-wait-modal">
<div class="md-modal get-code-modal-popup md-scaled-effect" id="ohWaitModal">
<form><div class="md-content modal-default">
<div class="cd-modal-content">
<div class="cd-modal-header">
<div class="offer-img">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
</div>
<div class="cd-modal-body">
<div class="offer-detail-ctr">
<div class="offer-desc" data-type="html" data-model="offerTitle">
</div>
</div>
<div class="add-sign" data-type="visible" data-model="offerTitle">+</div><div class="earn-cashback-txt">
<div class="cashback-amt cb-text flat-green"><span class="ico">
</span>
<span class="prefix" data-type="html" data-model="cashbackPrefix">
</span>
<span class="cashback-amt-span" data-type="html" data-model="cashbackText">
</span>
<span data-type="html" data-model="cashbackTypeText">
</span> from CouponDunia 
</span>
</div>
</div>
<div class="cb-info-text" data-type="visible-on-value" data-model="cashbackType" data-value="CASHBACK">
<span>Cashback from CouponDunia</span> is REAL cash that you can transfer to your Bank A/c, PayTM or Freecharge wallet.</div>
<div class="cb-info-text" data-type="visible-on-value" data-model="cashbackType" data-value="REWARDS"><span>Rewards from CouponDunia</span> can be transferred to PayTM, Freecharge or to do direct recharge.</div>
<div class="login-signup-ctr"><div class="no-cashback-holder">
<div class="no-signup skip-login-btn get-code-close-modal">SKIP &amp; LOSE <span data-type="html" data-model="cashbackType">
</span>
</div>
</div>
<div class="no-cashback-holder">
<div class="login-btn signin-link get-code-close-modal oh-wait-signin">SIGN IN <span data-type="html" data-model="offerGetCodeBtnText">
</span>
</div>
<div class="modal-success-text">
<i class="fa fa-check tick-customize" aria-hidden="true">
</i> 95% of users choose this option </div>
</div>
</div>
</div>
<div class="cd-modal-footer cHide" data-type="visible" data-model="wapHasHigherCashback">
<div class="bottom-panel-grey">
<div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText"></span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType">
</span> of <span class="red" data-type="html" data-model="mobileCashbackValue">
</span>
<span>
<a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a>
</span>
</div>
</div>
</div>
<div class="cd-signup-text"> Don't have an account ? <span class="bold signup-link get-code-close-modal oh-wait-signin">Sign Up</span>
</div>
</div>
</div>
<div class="md-content modal-var-A">
<div class="cd-modal-content">
<div class="cd-modal-header">
<div class="offer-img">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
</div>
<div class="cd-modal-body">
<div class="offer-detail-ctr">
<div class="offer-desc" data-type="html" data-model="offerTitle">
</div>
</div>
<div class="earn-cashback-txt">
<div class="cashback-amt ">+ <span class="prefix" data-type="html" data-model="cashbackPrefix">
</span><span class="cashback-amt-span" data-type="html" data-model="cashbackText">
</span>
<span data-type="html" data-model="cashbackTypeText">
</span> from CouponDunia (Only if you Login/Signup)<span class="fa fa-info-circle tooltip">
<br>
<span class="tooltiptext"> This <span class="small-txt" data-type="html" data-model="cashbackType">
</span> is on top of the coupon discount. It will be credited to your account after the merchant confirms your purchase to us. </span>
</span>
</div>
</div>
<div class="login-signup-ctr">
<div class="no-cashback-holder">
<div class="login-btn signin-link get-code-close-modal">LOG IN &amp; GET <span data-type="html" data-model="cashbackType">
</span>
</div>
<div class="modal-success-text">
<i class="fa fa-check tick-customize" aria-hidden="true">
</i> 95% of members choose this option </div>
</div>
</div>
<div class="no-cashback">
<div class="no-signup skip-signup-btn skip-login-btn get-code-close-modal">Skip &amp; Lose <span class="cb-type-txt" data-type="html" data-model="cashbackType">
</span>
</div>
</div>
</div>
<div class="cd-modal-footer cHide" data-type="visible" data-model="wapHasHigherCashback">
<div class="bottom-panel-grey">
<div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText">
</span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType">
</span> of <span class="red" data-type="html" data-model="mobileCashbackValue">
</span>
<span><a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a>
</span>
</div>
</div>
</div>
<div class="cd-signup-text"> Don't have an account ? <span class="bold signup-link get-code-close-modal oh-wait-signin">Sign Up</span>
</div>
</div>
</div>
<div class="md-content modal-var-B">
<div class="cd-modal-content">
<div class="cd-modal-header">
<div class="offer-desc-wrapper">
<div class="offer-title" data-type="html" data-model="offerTitle">
</div>
<div class="offer-img">
<img class="placeholder-img" data-type="img" data-model="storeImageSmall" alt="store">
</div>
</div>
</div>
<div class="cd-modal-body">
<div class="earn-cashback-txt">
<div class="cashback-amt ">+ Earn <span class="prefix" data-type="html" data-model="cashbackPrefix">
</span><span class="cashback-amt-span" data-type="html" data-model="cashbackText">
</span>
<span data-type="html" data-model="cashbackTypeText">
</span> from CouponDunia<span class="fa fa-info-circle tooltip"><br><span class="tooltiptext"> This <span class="small-txt" data-type="html" data-model="cashbackType"></span> is on top of the coupon discount. It will be credited to your account after the merchant confirms your purchase to us. </span>
</span>
</div>
<div class="sub-txt">On Logging In / Signing Up
</div>
</div>
<div class="cta-btn-holder">
<div class="block-left">
<div class="title">NO</div>
<div class="subtitle">I don't want <span class="cb-type-txt" data-type="html" data-model="cashbackType">
</span>
</div>
<div class="no-signup cta-link skip-login-btn get-code-close-modal">
<span id="cta-text-no">
</span> Logging In</div>
</div>
<div class="block-right">
<div class="title">YES</div>
<div class="subtitle">I want <span class="cb-type-txt" data-type="html" data-model="cashbackType">
</span>
</div>
<div class="cta-btn login-btn signin-link get-code-close-modal hvr-icon-wobble-horizontal">LOG IN <span id="cta-text-yes">
</span>
</div>
</div>
</div>
</div>
<div class="cd-modal-footer cHide" data-type="visible" data-model="wapHasHigherCashback">
<div class="bottom-panel-grey">
<div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText">
</span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType">
</span> of <span class="red" data-type="html" data-model="mobileCashbackValue">
</span>
<span><a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a>
</span>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
<div class="md-overlay" id="ohWaitModalClose">
</div>
</div>
<div class="oh-wait-modal2">
<div class="md-modal get-code-modal-popup md-scaled-effect" id="ohWaitModal2">
<form>
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-header">
<div class="cd-modal-popup-close md-close get-code-close-modal">×</div>
</div>
<div class="cd-modal-body">
<div class="rupee-icon">
<div class="get-coupon-sprite earn">
</div>
</div>
<div class="wait-header">OH WAIT!</div>
<div class="earn-cashback-txt">This is an exclusive offer, so we require you to sign in to avail this offer</div>
<div class="login-btn-holder">
<span class="login-btn signin-link get-code-close-modal oh-wait-signin">Log in</span>
<div class="sign-up-txt signup-link get-code-close-modal">Not registered? <span class="sign-up oh-wait-signin">Sign Up</span>
</div>
</div>
</div>
<div class="cd-modal-footer cHide" data-type="visible" data-model="wapHasHigherCashback">
<div class="bottom-panel-grey" data-type="visible" data-model="higherCashback">
<div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText"></span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType">
</span> of <span class="red" data-type="html" data-model="mobileCashbackValue">
</span>
<span>
<a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a>
</span>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
<div class="md-overlay">
</div>
</div>
<div class="start-shop-store-modal get-code-modals">
<div class="md-modal get-code-modal-popup md-scaled-effect get-code-feedback-slider" id="startShopStoreModal">
<input type="radio" name="slides-recent-offer2" id="slide_12" checked="">
<input type="radio" name="slides-recent-offer2" id="slide_22">
<input type="radio" name="slides-recent-offer2" id="slide_32">
<input type="radio" name="slides-recent-offer2" id="slide_42">
<ul>
<li>
<form>
<div class="md-content">
<div class="cd-modal-content ">
<div class="cd-modal-header">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="startShopStoreModal">×</div>
<div class="offer-logo">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
<div class="offer-description">
<div class="store-name" data-type="html" data-model="storeName">
</div>
<div class="title" data-type="html" data-model="offerTitle">
</div>
</div>
</div>
</div>
<div class="down-arrow">
</div>
<div class="cd-modal-bottom ">
<div class="sign-up-txt" data-type="visible" data-model="isCashback">
<span class="cb-txt cb-text flat-green">
<span class="ico">
</span>
<span class="cashback-amt-span" data-type="html" data-model="cashbackText">
</span>
</span>
<span> for registered users </span>
<span class="signup-link get-code-signup" data-parent-modal="startShopStoreModal">
<i class="fa fa-caret-right"></i> Sign up</span></div><div class="deal-activated-text " data-type="visible" data-model="isCashback"><span>Deal Activated. </span>No Coupon Code Required!</div>
<div class="deal-activated-text" data-type="visible" data-model="!isCashback"><span>Deal Activated. </span>No Coupon Code Required!</div><div class="deal-footer-text">
<span class="store-link load-offer-btn outlink" gtm-trigger="outclick">Visit <span class="store-link" data-type="html" data-model="storeName">
</span>
</span> and see the discounted prices.</div>
</div>
</div>
<div class="bottom-panel-grey cHide" data-type="visible" data-model="wapHasHigherCashback">
<div class="panel-text">You're about to earn <span class="cashback-prefix" data-type="html" data-model="cashbackText">
</span>. For higher <span class="cashback-type small-txt" data-type="html" data-model="cashbackType">
</span> of <span class="red" data-type="html" data-model="mobileCashbackValue">
</span>
<span>
<a class="link-to-website shop-via-mobile-btn get-code-close-modal"> shop via our mobile website!</a>
</span>
</div>
</div>
</form>
</li>
<li>
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-header cd-feedback-header track-deal-feedback-header">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="startShopStoreModal">×</div>
<div class="offer-logo">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
<div class="offer-description">
<div class="store-name" data-type="html" data-model="storeName">
</div>
<div class="title" data-type="html" data-model="offerTitle">
</div>
</div>
</div>
</div>
<div class="down-arrow">
</div>
<div class="cd-modal-footer cd-feedback-footer get-code-feedback-footer">
<div class="offer-feedback-heading">One last thing, <span>did this offer work for you?</span>
</div>
<div class="offer-feedback-btns">
<span class="thumbs-up thumbs-up-feedback-modal" id="thumbs-up-popup2" onclick="CD.c.getcode.upvoteOffer(&#39;2&#39;); CD.p.offer.updateOfferCardThumb(true);">
<i title=" Yay, it worked!" class="fa fa-thumbs-o-up fa-lg">
</i>
<span>Yes</span>
</span>
<span class="thumbs-down thumbs-down-feedback-modal" id="thumbs-down-popup2" onclick="CD.c.getcode.downvoteOffer(&#39;2&#39;); CD.p.offer.updateOfferCardThumb(false)">
<i title="It didn’t work!" class="fa fa-thumbs-o-down fa-lg">
</i>
<span>No</span>
</span>
</div>
<div class="cd-modal-back-deal md-back" onclick="CD.c.getcode.backToCoupon(&#39;2&#39;)">
<i class="fa fa-arrow-left">
</i>
<span>BACK TO OFFER</span>
</div>
</div>
</div>
<div class="ext-feedback ext-feedback-footer">
<span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. 
<a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a>
<div class="available-txt">
<div class="txt">Available on </div>
<div class="home-sprite chrome_icon">
</div>
<div class="home-sprite firefox_icon">
</div>
</div>
</div>
</li>
<li>
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-header cd-feedback-header cd-yes-header">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="startShopStoreModal">×</div>
<div class="offer-logo">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div><div class="offer-description">
<div class="store-name" data-type="html" data-model="storeName">
</div>
<div class="title" data-type="html" data-model="offerTitle">
</div>
</div>
</div>
</div>
<div class="down-arrow">
</div>
<div class="cd-modal-footer cd-feedback-footer cd-yes-footer">
<div id="offer-feedback-thanks-2">
</div>
<div class="feedback-comment-unauth">
<div class="feedback-comment">
<textarea id="feedback-comment-ta-2" name="feedback" placeholder="Type your comment here…">
</textarea>
</div>
<div class="feedback-name">
<input class="name-input-box post-comment-name-2" type="text" name="name" placeholder="Enter your name here…">
<span class="feedback-popup-submit-btn" id="feedback-popup-submit-2" onclick="CD.p.offer.postCommentFromPopup(&quot;false&quot;, &quot;2&quot;);">SUBMIT</span>
<div class="cd-modal-back-deal md-back" onclick="CD.c.getcode.backToCoupon(&#39;2&#39;)">
<i class="fa fa-arrow-left"></i>
<span>BACK TO OFFER</span>
</div>
</div>
</div>
</div>
</div>
<div class="ext-feedback ext-feedback-footer">
<span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. 
<a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a>
<div class="available-txt">
<div class="txt">Available on </div>
<div class="home-sprite chrome_icon">
</div>
<div class="home-sprite firefox_icon">
</div>
</div>
</div>
</li>
<li>
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-header cd-feedback-header track-deal-feedback-header">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="startShopStoreModal">×</div>
<div class="offer-logo">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
<div class="offer-description">
<div class="store-name" data-type="html" data-model="storeName">
</div>
<div class="title" data-type="html" data-model="offerTitle">
</div>
</div>
</div>
</div>
<div class="down-arrow">
</div>
<div class="cd-modal-footer cd-feedback-footer cd-comment-posted">
<div class="comment-posted-text">Your comment has been posted successfully!</div>
<a data-type="link" data-model="anchor-tag">
<div class="offer-comment-success-desc"> View <span class="comments-count-2" data-type="html" data-model="comment_count">
</span>
</div>
</a>
<div class="cd-modal-back-deal md-back" onclick="CD.c.getcode.backToCoupon(&#39;2&#39;)">
<i class="fa fa-arrow-left">
</i>
<span>BACK TO OFFER</span>
</div>
</div>
</div>
<div class="ext-feedback ext-feedback-footer">
<span>Earn upto 8x more cashback</span> with CouponDunia's Shopping Assistant. <a href="https://www.coupondunia.in/home/download-browser-extension">Know More</a>
<div class="available-txt">
<div class="txt">Available on </div>
<div class="home-sprite chrome_icon"></div>
<div class="home-sprite firefox_icon">
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="md-overlay md-close get-code-close-modal" data-modal="startShopStoreModal">
</div>
</div>
<div class="get-in-mobile-modal">
<div class="md-modal md-scaled-effect get-code-modal-popup" id="getInMobileModal">
<div class="md-content"><div class="cd-modal-content"><div class="cd-modal-header">
<div class="cd-modal-popup-close md-close app-only-md-close">×</div>
</div>
<div class="cd-modal-body">
<div class="offer-wrapper">
<div class="offer-img">
<img class="placeholder-img" data-type="img" data-model="storeImage" alt="store">
</div>
<div class="offer-desc" data-type="html" data-model="offerTitle">
</div>
</div>
<div class="pop-title">Get the mobile website link directly via SMS!</div>
<div class="pop-desc">Enter your phone number below</div>
<div class="mobile-num-wrapper">
<span class="mob-code">+91</span>
<input type="text" class="mob-num" id="mweb-sms-mobile-number">
<span class="send-btn get-in-mobile-submit">Send</span>
</div>
</div>
</div>
</div>
</div>
<div class="md-overlay app-only-md-close">
</div>
</div>
<div class="get-code-modal-old one-time-verification-modal ">
<div class="md-modal get-code-modal-popup md-scaled-effect recaptcha-modal-popup" id="recaptchaModal">
<div class="md-content"><div class="cd-modal-content">
<div class="cd-modal-body g-captcha-body">
<div class="heading-txt"> Please confirm that you are a Real Person !! </div>
<div class="g-recaptcha" data-sitekey="6LcAIz8UAAAAANGXThacyXlT8S1AleStOQE3mfR_" data-callback="recaptcha_callback" style="transform:scale(1.4);-webkit-transform:scale(1.4);transform-origin:0 0;-webkit-transform-origin:0 0;"><div style="width: 304px; height: 78px;"><div>
<iframe src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/anchor(1).html" width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
</iframe>
</div>
<textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; ">
</textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="md-overlay get-code-close-modal">
</div>
</div>
<div class="get-code-modal-old one-time-verification-modal">
<div class="md-modal get-code-modal-popup md-scaled-effect recaptcha-modal-popup" id="validateSMSModal">
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-body g-captcha-body">
<div class="heading-txt"> We have very limited Codes !! </div>
<div class="secondary-heading"> Please enter your phone number and verify using OTP that you receive. </div>
<div class="otp-expire-timer"> Your OTP expires in: <span class="red">10:00</span>
</div><div class="input-holder">
<div class="phone-initial">+91</div><input type="text" class="phone_txt" placeholder="Enter Phone Number" id="otp-mobile-number">
<div class="send-btn send-otp">SEND OTP</div>
</div>
<div class="input-holder otp-input-holder">
<input type="text" class="phone_txt otp-input" placeholder="Enter OTP" id="otp-code"><div class="send-btn submit-otp">SUBMIT</div></div></div></div></div></div><div class="md-overlay get-code-close-modal"></div></div><div class="start-shop-modal-old"><div class="md-modal get-code-modal-popup md-scaled-effect start-shop-email-verify" id="emailVerificationModal"><div class="md-content"><div class="cd-modal-content"><div class="cd-modal-header"><div class="header-wrapper" data-type="visible"><div class="heading-txt">The code is available only to verified users.</div><div class="secondary-heading">Please check your inbox and verify your email address.</div></div><button type="button" class="verify-btn"> Resend Verification Email</button><div class="verify-not"><a class="verify-anchor" href="https://www.coupondunia.in/profile/settings/info?modal=check-auth"> Change Email </a></div></div></div></div></div><div class="md-overlay get-code-close-modal"></div></div><div class="get-code-modal-old one-time-verification-modal"><div class="md-modal get-code-modal-popup md-scaled-effect recaptcha-modal-popup" id="oneTimeValidationSucceessModal">
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-body g-captcha-body">
<div class="heading-txt"> Thank you for verifying. </div>
<div class="secondary-heading"> Click below to get your code. </div>
<div class="input-holder">
<div class="success-btn-otc">Show Coupon Code</div>
</div>
</div>
</div>
</div>
</div>
<div class="md-overlay get-code-close-modal">
</div>
</div>
<div class="disable-adblock-modal">
<div class="md-modal md-scaled-effect disable-adblock-modal-popup" id="disableAdblockModal">
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-header">
<div class="adblock-modal-header-content">
<div class="adblock-main-header">Adblock Detected</div>
<div class="adblock-sec-header">AND IT IS STOPPING YOU FROM GETTING CASHBACK</div>
</div><div class="cd-modal-popup-close md-close" data-modal="disableAdblockModal">×</div>
</div><div class="cd-modal-body">
<div class="adblock-main-desc">Hey there! Your browser is set to block pop-up ads and cookies. It is vital you turn off your ad blocker everywhere. If you don’t, CouponDunia will not be able to track your purchase.</div>
<div class="adblock-btn-ctr"><a target="_blank" href="https://www.coupondunia.in/profile/support/faqs?faqId=faq-35"><div class="how-to-do-btn">TELL ME HOW TO DO IT</div></a><div class="disabled-adblock-btn">I'VE DISABLED ADBLOCK</div>
<div class="adblock-not-disabled-text">Adblock is still not disabled.</div>
</div>
<div class="skip-adblock-btn">Skip &amp; Lose Cashback</div>
</div>
</div>
</div>
</div>
<div class="md-overlay" data-modal="disableAdblockModal">
</div>
</div>
<div class="get-code-modals how-it-works-modal">
<div class="md-modal get-code-modal-popup md-scaled-effect" id="howItWorksModal">
<div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-popup-close md-close get-code-close-modal" data-modal="howItWorksModal">×</div>
<div class="earn-cash-text"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/currency-tilt-green.png" alt="cd"><span>Earn Cash </span>Every Time You Shop! </div>
</div>
<div class="cd-modal-content-footer">
<div class="step-icons">
<div class="get-coupon-sprite how-works-icon how-works-restaurant-icon-red">
</div>
<div class="divider">
</div>
<div class="get-coupon-sprite how-works-icon how-works-app-icon">
</div>
<div class="divider">
</div>
<div class="get-coupon-sprite how-works-icon how-works-user-icon">
</div>
<div class="divider">
</div>
<div class="get-coupon-sprite how-works-icon how-works-shape-icon">
</div>
</div>
<div class="steps-text">
<div class="how-works-step red">Shop via CouponDunia</div>
<div class="how-works-step">Store pays us commission</div>
<div class="how-works-step">We pay you cash</div>
<div class="how-works-step">Withdraw cash to bank/paytm/GVs</div>
</div>
<div class="simple-text">It's that simple!</div>
<div class="btn-holder">
<div class="signup-btn signup-link get-code-close-modal">Sign Up Now</div>
<div class="back-btn get-code-close-modal">Back to Offers</div>
</div><a href="https://www.coupondunia.in/support"><div>More about how this works</div>
</a></div>
</div>
</div>
<div class="md-overlay get-code-close-modal">
</div>
</div>
<div class="how-to-use-container">
<div class="how-to-use-modal md-modal md-scaled-effect get-code-modal-popup" tabindex="1"><div class="md-content">
<div class="cd-modal-content">
<div class="cd-modal-body">
<div class="modal-header">
<div class="zoom-close-div how-to-use-container-close">×</div>
</div>
<div class="desktop-image-zoom-image-container">
<div class="zoom-nav-prev-div fa-angle-left">
</div><div class="desktop-image-zoom-primary-image-container">
<div class="cd-loader how-to-use-modal-loader">
</div>
<img class="desktop-image-zoom-primary-image" src="https://www.coupondunia.in/flipkart">
<div class="image-desc">
</div>
</div>
<div class="zoom-nav-next-div fa-angle-right">
</div>
</div>
<div class="thumbnails-container">
<div class="prev-thumbnails">
<i class="fa-angle-left">
</i>
</div>
<div class="thumbnails-horizontal-container">
</div>
<div class="next-thumbnails">
<i class="fa-angle-right">
</i>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="md-overlay how-to-use-container-close">
</div>
</div>
<div class="cashback-detail" data-original="">
<p><span data-t="">
</span> from CouponDunia is real money that is added to your CouponDunia account after you transact at<span data-s="">
</span>.</p>
<a href="https://www.coupondunia.in/flipkart#" class="how-this-works-modal-link">How this works <i class="fa fa-sign-out">
</i>
</a>
</div>
<div class="main-content">
<div class="content-wrapper">
<div class="breadcrumb">
<ol class="ordered_list">
<li><span class="previous">
<a id="breadcrumb-home" href="https://www.coupondunia.in/"><span>Home</span></a></span></li>
<li>
<span class="greater-than">
<i class="fa fa-chevron-right breadcrumb-arrow">
</i>
</span>
<span class="previous">
<a id="breadcrumb-nav1" href="https://www.coupondunia.in/category/miscellaneous">
<span>Miscellaneous</span>
</a>
</span>
</li>
<li>
<span class="greater-than">
<i class="fa fa-chevron-right breadcrumb-arrow">
</i>
</span>
<span class="previous">
<a id="breadcrumb-nav2" href="https://www.coupondunia.in/category/miscellaneous/others">
<span>Others</span>
</a>
</span>
</li>
<li>
<span class="greater-than">
<i class="fa fa-chevron-right breadcrumb-arrow">
</i>
</span><span class="current">
<a id="breadcrumb-Flipkart">
<span>Amazon Offers</span>
</a>
</span>
</li>
</ol>
</div>
<div class="sidebar">
<div class="merchant-info">
<div class="merchant-desc">
<div id="store-favourite-heart" class="fa fa-heart fav-heart" title="Add to Favourites">
</div>
<div class="merchant-logo">
<img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/flipkart-logo-large.jpg" alt="Amazon coupons">
</div>
</div>
<div class="merchant-offer-desc">
<div>
<div class="offer-desc-value">
<div><span class="cb-text flat-green">
<span class="ico">
</span>
<span>upto 7.5% Rewards from CouponDunia </span>
</span>
</div>
</div>
</div>
<a id="shop-at-merchant-button-is-cashback" class="merchant-show-btn hvr-icon-wobble-horizontal">Activate Rewards</a>
</div>
</div>
<div class="filters-div" style="margin-top: auto; position: relative; top: auto; width: 260px;">
<div class="filter-container sidebar-section category-filter">
<p class="title">Categories</p>
<div class="clear-filter" id="clear">Clear</div>
<ul class="filter-list">
    <div>
        
        <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label>
        <span class="tag">Mobiles & Tablets (12)</span>
    </div>
    <div>
        
        <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label>
        <span class="tag">Fashion (9)</span>
    </div>
    <div>
        
        <input type="checkbox" id="checkbox-1-3" class="regular-checkbox" /><label for="checkbox-1-3"></label>
        <span class="tag">Computers, Lap.. (11)</span>
    </div>
    <div>
        
        <input type="checkbox" id="checkbox-1-4" class="regular-checkbox" /><label for="checkbox-1-4"></label>
        <span class="tag">Fitness (14)</span>
    </div>
    <div>
        
        <input type="checkbox" id="checkbox-1-5" class="regular-checkbox" /><label for="checkbox-1-5"></label>
        <span class="tag">Books & Statio...(9)</span>
    </div>

    <div>
        
        <input type="checkbox" id="cat-filter-mobiles-and-tablets-m" class="regular-checkbox" /><label for="cat-filter-mobiles-and-tablets-m"></label>
        <span class="tag">Beauty & Health(9)</span>
    </div>
    
</ul>
</div>
</div>

<div class="casback-rates-ctr sidebar-section" id="casback-rates-ctr" style="height: auto;">
<p class="title">Rewards Rates</p>
<div class="cashback-offers-ctr" id="cashback-offers-ctr" style="height: auto;">
<div class="cashback-offer">
<div class="casback-value">
<span class="cb-text flat-green">
<span class="ico">
</span>
<span>7.5%</span>
</span>
</div>
<div class="cashback-offer-desc"> Rewards for Fashion &amp; Lifestyle Categories (Clothing, Footwear, Watches, Bags-Wallets-Belts, Fashion Accessories, Luggage &amp; Travel, Sunglasses &amp; Eyewear, Sports &amp; Fitness, Jewellery) (Old Users on Desktop) </div>
</div>
<div class="cashback-offer">
<div class="casback-value">
<span class="cb-text flat-green">
<span class="ico">
</span>
<span>1.5%</span>
</span>
</div>
 <div class="cashback-offer-desc"> Rewards for Mobile Phones (Category C): All Other Mobile Phones not included in Categories (A) &amp; (B) (Old Users on Desktop) </div></div><div class="cashback-offer"><div class="casback-value"><span class="cb-text flat-green"><span class="ico"></span><span>7.5%</span></span></div><div class="cashback-offer-desc"> Rewards for Toys &amp; School Supplies (New Users on Desktop) </div></div><div class="cashback-offer"><div class="casback-value"><span class="cb-text flat-green"><span class="ico"></span><span>7.5%</span></span></div><div class="cashback-offer-desc"> Rewards for Fragrance, Beauty &amp; Wellness (New Users on Desktop) </div></div></div><div id="view-more-cashback-rates" class="cashback-view-more">View more</div></div><div class="useful-tips sidebar-section"><p class="title">Useful Tips</p><p>CD Rewards will be based on the Final Sale Amount minus PhonePe/Amazon Cashback &amp; Shipping Charges. CD Rewards can be transferred to PayTM; or for making a mobile phone or DTH recharge. It cannot be transferred to a bank account. CD reward queries should be directed to CouponDunia. Please do not contact Amazon. No CD rewards for bulk buyers.</p></div><div class="about-merchant sidebar-section"><p class="title">About Amazon</p><div class="about-merchant-desc">CouponDunia offers you the best prices on various products featured on Amazon, India's leading destination when it comes to online shopping. </div><a class="desc-more cHide" id="view-more-desc">More</a><a class="desc-more cHide" id="view-less-desc">Less</a></div><div class="cashack-stats sidebar-section"><p class="title">Cashback Stats</p><div class="cashback-stat-title ">Estimated Payment Date <div class="tooltip fa fa-info-circle" id="payment-stat-tooltip"><div class="tooltiptext"> If you shop today, we expect your rewards will be credited to your CouponDunia account around 16 May, 2018. </div></div></div><div class="cashback-stat-value">16 May, 2018</div><div class="cashback-stat-title ">Tracking Speed <div class="tooltip fa fa-info-circle" id="speed-stat-tooltip"><div class="tooltiptext"> It takes approximately <span>1 hour</span> to track your rewards when shopping at Amazon. </div></div></div><div class="cashback-stat-value">1 hour</div><div class="cashback-stat-title">Rewards Claim Time <div class="tooltip fa fa-info-circle" id="claim-stat-tooltip"><div class="tooltiptext"> In case your rewards does not track automatically, you can file a missing rewards claim request that will take 60 days to resolve. </div></div></div><div class="cashback-stat-value">60 days</div></div><div class="similar-stores sidebar-section similar"><p class="title">Similar Stores</p><div class="store-card"><a href="https://www.coupondunia.in/amazon"><div class="card-logo"><img id="similar-store-img-link-amazon" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/amazon-logo-small.jpg" class="similar-store-img" alt="Amazon coupons">
</div>
<div class="card-offer-desc" id="similar-store-link-amazon" title="Amazon"> Amazon </div>
</a>
</div>
<div class="store-card">
<a href="https://www.coupondunia.in/paytmmall">
<div class="card-logo"><img id="similar-store-img-link-paytmmall" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/paytmmall-logo-small.png" class="similar-store-img" alt="Paytm Mall coupons"></div>
<div class="card-offer-desc" id="similar-store-link-paytmmall" title="Paytm Mall"> Paytm Mall </div>
</a>
</div>
</div>
<a href="https://www.coupondunia.in/home/download-browser-extension?utm_source=merchant-sidebar&amp;utm_medium=banner">
<img class="ext-merchantpage-sidebanner" data-lazy-src="https://d1nrhamtcpp354.cloudfront.net/modules/web/assets/images/ext-merchantpage-sidebanner.png" alt="extension-banner" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/ext-merchantpage-sidebanner.png">
</a>
</div>
<div class="main-body">
<section class="merchant-banner">
<div class="banner-content">
<div class="merchant-title-ctr">
<h1 class="merchant-title">Amazon Coupons &amp; Offers</h1>
<div class="merchant-offers">
<div class="cb-text flat-green">
<span class="ico">
</span>
<span>Upto 7.5% Rewards from CouponDunia</span>
</div>
</div>
</div>


<div class="subscribe-btn-holder subscribe " style="display: inline;">
<input id="subscribe-input" class="merchant-sub-input subscribe-input" type="text" placeholder="Enter your Email...">
<label id="subscribe-button" class="subscribe-btn-label subscribe-btn" for="merchant-sub-input">
<span>Subscribe to Amazon</span>
</label>
</div>
<div class="subscribe-btn-holder subscribed" style="display: none">
<div id="subscribe-btn" class="subscribe-btn subscribed-btn">
<span>Subscribed</span>
<i class="fa fa-check">
</i>
</div>
</div>
<div class="cashback-info-desc">


<span>Rewards from CouponDunia</span> can be transferred to PayTM, Freecharge or to do direct recharge <a href="https://www.coupondunia.in/support" target="_blank"> How It Works?</a>
</div>
</div>
</section>
<section class="offer-cards">
<ul class="nav nav-tabs"><li data-tab="all" class="offer-active-tab navigation-tab">
<a data-gtm="all">All (<span>52</span>)</a>
</li>
<li data-tab="coupon" class=" navigation-tab">
<a data-gtm="coupons">Coupons (<span>0</span>)</a>
</li>
<li data-tab="deal" class=" navigation-tab">
<a data-gtm="deals">Deals (<span>52</span>)</a>
</li>
</ul>
<div class="show-filters cHide">
<div class="applied-filters-container">
</div>
<div class="clear-all" id="clear-all-category-filters">Clear All</div>
<hr>
</div>
<div class="tab-content posr">
<div class="expired-offer-msg" style="display:none">Sorry, this offer doesn't exist.<i class="fa fa-frown-o">
</i>
</div>
<div class="no-offer-avail" style="display:none">
<span class="sorry-msg ">
</span><div class="more-link " style="display: none">
<span class="msg-prefix">
</span>
<a>
<span class="msg-link" id="link">
</span>
</a>
<span class="msg-suffix">
</span>
</div>
<div class="no-offer-arrow-img general-sprite no-offer-arrow" style="display:none">
</div>
</div>
<div class="pre-render">
<div class="skip-lose-card skip-lose-coupon">
<div class="skip-left">
<div class="sel-optn-txt">CHOOSE AN OPTION TO SEE YOUR COUPON CODE</div>
<div onclick="CD.c.getcode.backToCouponDetails(this)" class="flip-back">Back to Coupon Details <i class="fa fa-arrow-right">
</i>
</div>
</div>
<div class="skip-right">
<div class="opt-1 options">
<div class="opt-txt">
<span>Option 1: </span> Coupon + <span class="cb-rewards">Cashback</span>
</div>
<div class="cb-text flat-green">
<span class="ico">
</span>
<span class="cashback-amt-span">
</span>

</div>
<div class="cpn-holder">
<div class="cpn-code">
</div>
<div class="outer-box">
</div>
</div>
<div class="login-btn signin-link btns" onclick="CD.c.getcode.disablePopupClose()">Login</div>
<div class="no-acnt">Don't have an account? <span class="signup-link" onclick="CD.c.getcode.disablePopupClose()">Sign Up</span>
</div>
</div>
<div class="or-divider">
<div>Or</div>
</div>
<div class="opt-2 options">
<div class="opt-txt">
<span>Option 2: </span> Coupon Only</div>
<div class="cb-text">
</div>
<div class="cpn-holder">
<div class="cpn-code">
</div>
<div class="outer-box">
</div>
</div>
<div class="btns" onclick="CD.c.getcode.offerSkipLogin()">Continue As Guest</div>
</div>
</div>
</div>
<div class="skip-lose-card skip-lose-deal">
<div class="skip-left">
<div class="sel-optn-txt">CHOOSE AN OPTION TO ACTIVATE YOUR DEAL</div>
<div onclick="CD.c.getcode.backToCouponDetails(this)" class="flip-back">Back to Deal Details <i class="fa fa-arrow-right">
</i>
</div>
</div>
<div class="skip-right">
<div class="opt-1 options">
<div class="opt-txt">
<span>Option 1: </span> Deal + <span class="cb-rewards">Cashback</span>
</div>
<div class="cb-text flat-green">
<span class="ico">
</span>
<span class="cashback-amt-span">
</span>
</div>
<div class="login-btn signin-link btns" onclick="CD.c.getcode.disablePopupClose()">Login</div>
<div class="no-acnt">Don't have an account? <span class="signup-link" onclick="CD.c.getcode.disablePopupClose()">Sign Up</span>
</div>
</div>
<div class="or-divider">
<div>Or</div>
</div>
<div class="opt-2 options">
<div class="opt-txt">
<span>Option 2: </span> Deal Only</div>
<div class="cb-text">
</div>
<div class="btns" onclick="CD.c.getcode.offerSkipLogin()">Continue As Guest</div>
</div>
</div>
</div>
<div  class="ofr-card-wrap revert">
<div class="offer-card-ctr">













































<div class="offer-card-wrapper" id="cat-filter-main">
<div class="offer-card-holder">
<div class="cashback-tile" >
<div class="tile-content" >
<span class="offer-big-font" title="">90%</span>
<span class="offer-small-font">OFF</span>
</div>
<a href="https://www.coupondunia.in/flipkart" class="cHide">
<div class="tile-logo">
<img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/flipkart-logo-large.jpg" alt="Flipkart coupons">
</div>
</a>
</div>
<div class="card-content-top" >
<div class="title-meta" data-offer-key="storeImage" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-large.jpg?126153">
<span class="coupon-verification">
<i class="fa fa-check-box">
</i>Verified 8 hours ago</span>
<span class="coupon-num-uses">
<i class="fa fa-users">
</i>595 People Used Today </span>
<span class="editors-choice">
<img class="editors-choice-icon" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/editors-choice.png" alt="editors choice">
<span class="editors-choice-text"> Editor's Choice </span>
</span>
</div>
<div class="horizontal_online_content" >
<a>
<div> Deal of the Day: Upto 90% Off on Various Products </div>
</a>
</span><div class="cashback-txt">
<span class="cb-text flat-green">
<span class="ico">
</span>
<span data-offer-key="cashbackText" data-offer-value="Upto &lt;span class=&#39;red&#39;&gt;7.5%&lt;/span&gt; Rewards"> Upto 7.5% Rewards From CouponDunia </span>
</span>
</div>
</div>
<div class="get-codebtn-holder" data-offer-key="id" data-offer-value="psFp3Fqyss">
<a class="get-offer-code" data-offer-key="couponCode" data-offer-value="" data-gtm-offer-type="deal">
<div class="get-codebtn offer-get-code-link offer-is-deal" data-flip="true" onclick="CD.c.util.logUserAction(&#39;offer-click&#39;, null, &#39;psFp3Fqyss&#39;)" data-offer-key="offerGetCodeBtnText" data-offer-value="&amp; GET DEAL" data-offer-id="psFp3Fqyss" data-popup-id="ohWaitModal" data-gtm="flip">Get Deal</div>
</a>
</div>
</div>
<div class="card-content-bottom" data-offer-key="storeName" data-offer-value="Flipkart">
<div class="offer-desc" data-offer-key="affKey" data-offer-value="flipkart_desktop_1">
<span class="desc-txt more-desc more-desc-text with-bullets">
<ol>
<li>
<span> Deal of the Day: Get upto 90% off on apparel, accessories, electronics, books and more.</span>
</li>
<li>
<span> Discount mentioned against the products.</span>
</li>
</ol>
</span>
</div>
</div>
</div>


<div id="tpppkyoHMscat" class="ofr-card-wrap revert">
   <div class="offer-card-ctr">
      <div class="offer-card-wrapper" data-offer-key="couponType" data-offer-value="deal">
         <div class="offer-card-holder" data-offer-key="isCashback" data-offer-value="1">
            <div class="cashback-tile" data-offer-key="storeId" data-offer-value="flipkart">
               <div class="tile-content" data-offer-key="wapHasHigherCashback" data-offer-value=""><span class="offer-big-font" title="">GREAT</span><span class="offer-small-font">DEAL</span></div>
               <a href="https://www.coupondunia.in/flipkart" class="cHide">
                  <div class="tile-logo"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/flipkart-logo-large.jpg" alt="Flipkart coupons"></div>
               </a>
            </div>
            <div class="card-content-top" data-offer-key="mobileCashbackValue" data-offer-value="0.07%">
               <div class="title-meta" data-offer-key="storeImage" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-large.jpg?126153"><span class="coupon-verification"><i class="fa fa-check-box"></i>Verified 8 hours ago</span><span class="coupon-num-uses"><i class="fa fa-users"></i>8 People Used Today </span></div>
               <div class="horizontal_online_content" data-offer-key="cashbackType" data-offer-value="REWARDS">
                  <a href="https://www.coupondunia.in/flipkart" class="cHide"><span class="store-name"> Flipkart </span></a>
                  <a>
                     <div class="offer-title offer-get-code-link" data-flip="true" data-offer-id="tpppkyoHMs" onclick="CD.c.util.logUserAction(&#39;offer-click&#39;, null, &#39;tpppkyoHMs&#39;)" data-popup-id="ohWaitModal" data-offer-key="offerTitle" data-offer-value="Apple iPhone 6 Starting at Rs. 25,199" data-gtm="flip"> Apple iPhone 6 Starting at Rs. 25,199 </div>
                  </a>
                  <span data-offer-key="isDaySpecific" data-offer-value="0"></span><span data-offer-key="validDays" data-offer-value="[]"></span><span data-offer-key="isValidToday" data-offer-value="0"></span>
                  <div class="cashback-txt"><span class="cb-text flat-green"><span class="ico"></span><span data-offer-key="cashbackText" data-offer-value="Upto &lt;span class=&#39;red&#39;&gt;0.07%&lt;/span&gt; Rewards"> Upto 0.07% Rewards From CouponDunia </span></span></div>
               </div>
               <div class="get-codebtn-holder" data-offer-key="id" data-offer-value="tpppkyoHMs">
                  <a class="get-offer-code" data-offer-key="couponCode" data-offer-value="" data-gtm-offer-type="deal">
                     <div class="get-codebtn offer-get-code-link offer-is-deal" data-flip="true" onclick="CD.c.util.logUserAction(&#39;offer-click&#39;, null, &#39;tpppkyoHMs&#39;)" data-offer-key="offerGetCodeBtnText" data-offer-value="&amp; GET DEAL" data-offer-id="tpppkyoHMs" data-popup-id="ohWaitModal" data-gtm="flip">Get Deal</div>
                  </a>
               </div>
            </div>
            <div class="card-content-bottom" data-offer-key="storeName" data-offer-value="Flipkart">
               <div class="offer-desc" data-offer-key="affKey" data-offer-value="flipkart_desktop_1">
                  <span class="desc-txt more-desc more-desc-text with-bullets">
                     <ol>
                        <li><span> Get Apple iPhone 6 starting at Rs. 25,199.</span></li>
                        <li><span> No coupon code is required.</span></li>
                     </ol>
                  </span>
               </div>
               <div class="success-hit" onclick="CD.p.offer.commentBox(&quot;tpppkyoHMs&quot;, this)" data-offer-key="storeImageSmall" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-small.jpg?976041"><span class="txt-bold padL10 commentcounttpppkyoHMs"><i class="fa fa-commenting-dots"></i>0</span><span class="txt-light open-cmt padR10"> Comments</span></div>
               <span class="read-more more-tag less-desc-text" onclick="CD.p.offer.moredescclick(this);">
                  <div class="read-more-fade"></div>
                  <div class="fa-angle-double-down"></div>
                  <div class="read-more-less-text">Read More</div>
               </span>
               <span class="read-less less-tag more-desc-text" style="display:none" onclick="CD.p.offer.lessdescclick(this);">
                  <div class="fa-angle-double-up"></div>
                  <div class="read-more-less-text">Read Less</div>
               </span>
            </div>
         </div>
      </div>
      <div class="comments-section comment-box-downtpppkyoHMs" style="display: none">
         <div class="cmt-wrapper">
            <div class="close-comment-panel closetpppkyoHMs"><i class="fa fa-cancel-circled"></i></div>
            <div class="cmt-parent-container">
               <div class="cmt-container show-top-comments comment-container-tpppkyoHMs"></div>
               <div class="show-more-btn showmoretpppkyoHMs" style="display:none">Show More <i class="fa fa-chevron-down"></i></div>
            </div>
            <div class="add-cmt">
               <div class="cmt-form"><textarea class="add-comment-input" placeholder="Add a comment"></textarea><input class="cmt-name-input" placeholder="Name"><span class="cmt-post-btn cmt-post-btntpppkyoHMs" onclick="CD.p.offer.postComment(this, &quot;tpppkyoHMs&quot;, &quot;false&quot;);">Post Comment</span></div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php 
    $projects = array();
    $records = $mysqli->query("SELECT * FROM vcom");
    while ($project =  mysqli_fetch_array($records))
    {
        $projects[] = $project;
    }
    foreach ($projects as $project)
    {
        if($project['name']=="Healthkart"){
?>
            <div id="J0ZjIxHXiscat" class="ofr-card-wrap revert">
               <div class="offer-card-ctr">
                  <div class="offer-card-wrapper" data-offer-key="couponType" data-offer-value="deal">
                     <div class="offer-card-holder" data-offer-key="isCashback" data-offer-value="1">
                        <div class="cashback-tile" data-offer-key="storeId" data-offer-value="flipkart">
                           <div class="tile-content" data-offer-key="wapHasHigherCashback" data-offer-value=""><span class="offer-big-font" title="">GREAT</span></div>
                           <a href="https://www.coupondunia.in/flipkart" class="cHide">
                              <div class="tile-logo"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/flipkart-logo-large.jpg" alt="Flipkart coupons"></div>
                           </a>
                        </div>
                        <div class="card-content-top" data-offer-key="mobileCashbackValue" data-offer-value="0.07%">
                           <div class="title-meta" data-offer-key="storeImage" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-large.jpg?126153"><span class="coupon-verification"><i class="fa fa-check-box"></i>Verified 8 hours ago</span><span class="coupon-num-uses"><i class="fa fa-users"></i>8 People Used Today </span></div>
                           <div class="horizontal_online_content" data-offer-key="cashbackType" data-offer-value="REWARDS">
                              <a href="https://www.coupondunia.in/flipkart" class="cHide"><span class="store-name"> Flipkart </span></a>
                              <a href="<?php echo $project['link']; ?>">
                                 <div class="offer-title offer-get-code-link"> <?php echo $project['title']?> </div>
                              </a>
                              
                              <div class="cashback-txt"><span class="cb-text flat-green"><span class="ico"></span><span data-offer-key="cashbackText" data-offer-value="Upto &lt;span class=&#39;red&#39;&gt;0.07%&lt;/span&gt; Rewards"> Upto 7.5% Rewards From CouponDunia </span></span></div>
                           </div>
                           <div class="get-codebtn-holder">
                              <a href="<?php echo $project['link']; ?>">
                                 <div class="get-codebtn offer-get-code-link offer-is-deal" >Get Deal</div>
                              </a>
                           </div>
                        </div>
                        <div class="card-content-bottom" data-offer-key="storeName" data-offer-value="Flipkart">
                           <div class="offer-desc" data-offer-key="affKey" data-offer-value="flipkart_desktop_1">
                              <span class="desc-txt more-desc more-desc-text with-bullets">
                                 <ol>
                                    <li><span> Get iPhone 8 starting at Rs.55,999.</span></li>
                                    <li><span> No coupon code is required.</span></li>
                                 </ol>
                              </span>
                           </div>
                           <div class="success-hit" onclick="CD.p.offer.commentBox(&quot;J0ZjIxHXis&quot;, this)" data-offer-key="storeImageSmall" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-small.jpg?976041"><span class="txt-bold padL10 commentcountJ0ZjIxHXis"><i class="fa fa-commenting-dots"></i>0</span><span class="txt-light open-cmt padR10"> Comments</span></div>
                           <span class="read-more more-tag less-desc-text" onclick="CD.p.offer.moredescclick(this);">
                              <div class="read-more-fade"></div>
                              <div class="fa-angle-double-down"></div>
                              <div class="read-more-less-text">Read More</div>
                           </span>
                           <span class="read-less less-tag more-desc-text" style="display:none" onclick="CD.p.offer.lessdescclick(this);">
                              <div class="fa-angle-double-up"></div>
                              <div class="read-more-less-text">Read Less</div>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="comments-section comment-box-downJ0ZjIxHXis" style="display: none">
                     <div class="cmt-wrapper">
                        <div class="close-comment-panel closeJ0ZjIxHXis"><i class="fa fa-cancel-circled"></i></div>
                        <div class="cmt-parent-container">
                           <div class="cmt-container show-top-comments comment-container-J0ZjIxHXis"></div>
                           <div class="show-more-btn showmoreJ0ZjIxHXis" style="display:none">Show More <i class="fa fa-chevron-down"></i></div>
                        </div>
                        <div class="add-cmt">
                           <div class="cmt-form"><textarea class="add-comment-input" placeholder="Add a comment"></textarea><input class="cmt-name-input" placeholder="Name"><span class="cmt-post-btn cmt-post-btnJ0ZjIxHXis" onclick="CD.p.offer.postComment(this, &quot;J0ZjIxHXis&quot;, &quot;false&quot;);">Post Comment</span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
        }
            }
            ?>

<div id="J0ZjIxHXiscat" class="ofr-card-wrap revert">
   <div class="offer-card-ctr">
      <div class="offer-card-wrapper" data-offer-key="couponType" data-offer-value="deal">
         <div class="offer-card-holder" data-offer-key="isCashback" data-offer-value="1">
            <div class="cashback-tile" data-offer-key="storeId" data-offer-value="flipkart">
               <div class="tile-content" data-offer-key="wapHasHigherCashback" data-offer-value=""><span class="offer-big-font" title="">GREAT</span><span class="offer-small-font">DEAL</span></div>
               <a href="https://www.coupondunia.in/flipkart" class="cHide">
                  <div class="tile-logo"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/flipkart-logo-large.jpg" alt="Flipkart coupons"></div>
               </a>
            </div>
            <div class="card-content-top" data-offer-key="mobileCashbackValue" data-offer-value="0.07%">
               <div class="title-meta" data-offer-key="storeImage" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-large.jpg?126153"><span class="coupon-verification"><i class="fa fa-check-box"></i>Verified 8 hours ago</span><span class="coupon-num-uses"><i class="fa fa-users"></i>8 People Used Today </span></div>
               <div class="horizontal_online_content" data-offer-key="cashbackType" data-offer-value="REWARDS">
                  <a href="https://www.coupondunia.in/flipkart" class="cHide"><span class="store-name"> Flipkart </span></a>
                  <a>
                     <div class="offer-title offer-get-code-link"> iPhone 8 Starting at Rs. 55,999 </div>
                  </a>
                  
                  <div class="cashback-txt"><span class="cb-text flat-green"><span class="ico"></span><span data-offer-key="cashbackText" data-offer-value="Upto &lt;span class=&#39;red&#39;&gt;0.07%&lt;/span&gt; Rewards"> Upto 0.07% Rewards From CouponDunia </span></span></div>
               </div>
               <div class="get-codebtn-holder">
                  <a>
                     <div class="get-codebtn offer-get-code-link offer-is-deal" >Get Deal</div>
                  </a>
               </div>
            </div>
            <div class="card-content-bottom" data-offer-key="storeName" data-offer-value="Flipkart">
               <div class="offer-desc" data-offer-key="affKey" data-offer-value="flipkart_desktop_1">
                  <span class="desc-txt more-desc more-desc-text with-bullets">
                     <ol>
                        <li><span> Get iPhone 8 starting at Rs.55,999.</span></li>
                        <li><span> No coupon code is required.</span></li>
                     </ol>
                  </span>
               </div>
               <div class="success-hit" onclick="CD.p.offer.commentBox(&quot;J0ZjIxHXis&quot;, this)" data-offer-key="storeImageSmall" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-small.jpg?976041"><span class="txt-bold padL10 commentcountJ0ZjIxHXis"><i class="fa fa-commenting-dots"></i>0</span><span class="txt-light open-cmt padR10"> Comments</span></div>
               <span class="read-more more-tag less-desc-text" onclick="CD.p.offer.moredescclick(this);">
                  <div class="read-more-fade"></div>
                  <div class="fa-angle-double-down"></div>
                  <div class="read-more-less-text">Read More</div>
               </span>
               <span class="read-less less-tag more-desc-text" style="display:none" onclick="CD.p.offer.lessdescclick(this);">
                  <div class="fa-angle-double-up"></div>
                  <div class="read-more-less-text">Read Less</div>
               </span>
            </div>
         </div>
      </div>
      <div class="comments-section comment-box-downJ0ZjIxHXis" style="display: none">
         <div class="cmt-wrapper">
            <div class="close-comment-panel closeJ0ZjIxHXis"><i class="fa fa-cancel-circled"></i></div>
            <div class="cmt-parent-container">
               <div class="cmt-container show-top-comments comment-container-J0ZjIxHXis"></div>
               <div class="show-more-btn showmoreJ0ZjIxHXis" style="display:none">Show More <i class="fa fa-chevron-down"></i></div>
            </div>
            <div class="add-cmt">
               <div class="cmt-form"><textarea class="add-comment-input" placeholder="Add a comment"></textarea><input class="cmt-name-input" placeholder="Name"><span class="cmt-post-btn cmt-post-btnJ0ZjIxHXis" onclick="CD.p.offer.postComment(this, &quot;J0ZjIxHXis&quot;, &quot;false&quot;);">Post Comment</span></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="results-final"></div>
</div>
<div class="cat-store-loader offer-loader-gif cHide">
   <div class="cd-loader"></div>
</div>
<section class="still-earn-cashback">
   <div class="still-earn-cashback-text">
      <div class="still-earn-cb-header">Didn't find an offer you like?</div>
      <div class="still-earn-cb-store-details">
         No worries, Click to earn 
         <div><span class="cb-text flat-green"><span class="ico"></span><span> Upto 7.5% rewards </span></span></div>
         on Amazon 
      </div>
      <div class="still-earn-cashback-btn">Earn Rewards on Amazon</div>
   </div>
</section>
<div class="load-more-offers hvr-icon-wobble-vertical cHide">Show all offers</div>
</div></section>

<section class="about-merchant">
   <h3>More About Amazon</h3>
   <div class="about-wrapper">
      <div class="about-content">
         <h1 style="font-size: 1em;">What are the best Amazon offers, coupons and promo codes valid today ?</h1>
         <style>table, th, td { border: 0.5px solid black;}</style>
         <table style="width:100%">
            <tbody>
               <tr>
                  <th>Offers</th>
                  <th>Products</th>
               </tr>
               <tr>
                  <td align="center">Upto 80% Off</td>
                  <td align="center">Clothing, Footwear &amp; Accessories</td>
               </tr>
               <tr>
                  <td align="center">Upto 50% Off</td>
                  <td align="center">Mobile Phones</td>
               </tr>
               <tr>
                  <td align="center">Upto 75% Off</td>
                  <td align="center">TV's &amp; Appliances</td>
               </tr>
               <tr>
                  <td align="center">Upto 80% Off</td>
                  <td align="center">Lifestyle &amp; Fashion</td>
               </tr>
               <tr>
                  <td align="center">Upto 75% Off</td>
                  <td align="center">Home Decor</td>
               </tr>
            </tbody>
         </table>
         <h4>Amazon, Indias Most Popular Online Mega Store</h4>
         Amazon is a name that needs no introduction. Shoes, bags, accessories, electronics and books. You name it and this site has it all. Looking for the latest Jeffrey Archer? <b>Amaozn</b> has it in hard back and soft cover. Looking for a collectors edition Beatles cassette? It has that too. Amazon is an innovation unlike any other and is a pioneer among Indian online shopping sites. Two IITians originally began it in 2007 as an online bookstore but once they saw its increasing popularity, they soon branched out into a ton of other stuff including toys, childrens products, clothes, beauty, healthcare, refrigerators, MP3 players, microwaves and everything else under the sun. Their products are excellent, their variety is unparalleled and their sales and delivery services are prompt and efficient. If youre looking for an incredible shopping experience right from the comfort of your home, look no further than Amazon.com. <br>
         <h4>Why Shop from Amazon? WHY NOT!?</h4>
         Its cheap. Its efficient. Its fast. Amazon sells electronics, apparel &amp; accessories, DVDs, Blu-rays, CDs, video games, cars, musical instruments and furniture. The company also manufactures and sells its own range of cooking utilities and grooming products through its own brand Citron. The quality is incomparable and there is a wide variety of merchandise suitable for all budgets. It has round-the-clock customer service and a cash on delivery option, as well as an easy 30 day return policy. Not just this, it has an amazing user interface and is easy to use, uncomplicated and has a no fuss, user friendly look to it. What more could one ask for?<br>
         <h4>What makes Amazon the Best?</h4>
         Its the first of its kind in India and is now one of the fastest growing e-commerce companies in the world. It is known for having made online shopping popular in India. They also offer incredible monthly deals, which, in addition to our coupons, make shopping so effortless and cheap, like never before. Whats more, it has won several awards since its inception, such as Entrepreneur of the Year from the Economic Times and Young Turk of the Year from CNBC. Need we say more? <br>
         <h4>Does Amazon have a SALE period for a calendar year?</h4>
         <i>Amazon</i> is known for its amazing sales like <i>The Big Billion Sale</i>, which is held from October 13 to October 17. Amazon also has Deals of the Day, which provides users with great discounts on various products daily. You can also use the Amazon App, to check for great discounts and get prices instantly on a wide array of products across all categories. <br>
         <h4>Stay Connected with Amazon for the Best Deals</h4>
         <b>Amazon offers</b> fantastic discounts on branded clothes, footwear, bags, books, mobile phones, tablets, laptops, beauty products, cameras, home furnishing and much more. Coupondunia has listed some great offers for Amazon like the big discounts on smartphones, top clothing brands for both men and women, great deals on storage devices, home appliances and many such great offers. <i>Also earn upto 10% cashback from CouponDunia over and above the discount offered by Amazon</i>. 
      </div>
   </div>
</section>
</div></div></div>
<div class="what-shop-modal">
   <div class="md-shop-modal md-scaled-effect get-code-modal-popup" id="whatShopModal">
      <form>
         <div class="md-content">
            <div class="cd-modal-content">
               <div class="cd-modal-body">
                  <div class="modal-header">What are you shopping for?</div>
                  <div class="btn-holder"><span class="btn-type md-close" data-aff-id="1">AMAZON-DESKTOP</span></div>
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class="md-overlay md-close" data-modal="whatShopModal"></div>
</div>
<style type="text/css"> .cb-rates-table-wrapper td:first-child { width: 50% } .cb-rates-table-wrapper td { width: 25% } </style>
<div class="view-more-cashback-rates-modal">
   <div class="md-cashback-modal newcashback-modal md-scaled-effect">
      <div class="md-content">
         <div class="cd-modal-content">
            <div class="cd-modal-body">
               <div class="modal-header">
                  <div class="cd-modal-popup-close md-close close-cashback-rates-popup">×</div>
               </div>
               <div class="title"> Rewards Rates </div>
               <div class="cb-rates-table-wrapper">
                  <table>
                     <tbody>
                        <tr class="table-heading red">
                           <td>Product Category</td>
                           <td>User Type</td>
                           <td>Rewards</td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="cb-rates-content">
                     <table>
                        <tbody>
                           <tr>
                              <td rowspan="1"> Books, e-Learning, Fashion &amp; Lifestyle Categories (Clothing, Footwear, Watches, Bags-Wallets-Belts, Fashion Accessories, Luggage &amp; Travel, Sunglasses &amp; Eyewear, Sports &amp; Fitness, Jewellery), Toys &amp; School Supplies, Musical Instruments, Baby Care &amp; Diapers, Fragrance, Beauty &amp; Wellness, Stationery &amp; Office Supplies, Household Supplies, Pet Supplies, Food &amp; Nutrition, Home Categories (Home &amp; Kitchen Needs, Home Decor, Home Furnishings, Home Improvement Tools), Furniture, Air Purifiers </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 7.5 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> Amazon First Subscription, Value Added Services, Any product/category not mentioned with cashback </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 0 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> Gemstones, Gold &amp; Silver Coins, Amazon Gift Card, Mobile Phones (Category B): Redmi Note 4, Redmi 4A, Redmi 5A, Mi A1, Redmi Note 5, Redmi Note 5 Pro, Apple iPhones, Honor 9 Lite, Infinix Hot S3, Mi Smart LED TVs </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 0.07 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> Home &amp; Kitchen Appliances, Personal Care Appliances, Health Care Appliances, Automobiles &amp; Auto Accessories </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 6 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> Large Appliances (Televisions (Except Cloudwalker Televisions), Refrigerator, Air Conditioner, Washing Machine &amp; Dryer, Microwave Oven), Wearable Smart Devices, Automation and Robotics, Small Entertainment (iPods, MP3, Video &amp; Audio), Laptops &amp; Tablets, Cameras, Gaming Consoles, Mobile, Tablet, Computer, Gaming &amp; Camera Accessories, Computer Peripherals (except Storage), CD/DVD/Blu-ray (Games, Music/Movies/TV Shows, Software) </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 3 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> Large Sports &amp; Fitness Equipments, Bicycles </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 4.5 % </td>
                           </tr>
                           <tr>
                              <td rowspan="2"> Mobile Phones (Category A): Samsung Galaxy (On Max/ On Nxt/ On5/ On7/S7/ S7 Edge/ Z2, J7), Moto (C Plus, E4 Plus, G5), Swipe Elite, Lenovo (K6 Note/ K6 Power/ K8/ K8 Note/ K8 Plus), Intex Aqua Phones </td>
                              <td rowspan="1"> Old User </td>
                              <td rowspan="1"> 0.7 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> New User </td>
                              <td rowspan="1"> 1 % </td>
                           </tr>
                           <tr>
                              <td rowspan="1"> Storage (External Hard Disks, Memory Cards, Pen Drives), Mobile Phones (Category C): All Other Mobile Phones not included in Categories (A) &amp; (B) </td>
                              <td rowspan="1"> Any </td>
                              <td rowspan="1"> 1.5 % </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="md-overlay"></div>
</div>
<div class="view-more-cashback-rates-modal">
   <div class="md-cashback-modal md-scaled-effect oldcashback-modal">
      <div class="md-content">
         <div class="cd-modal-content">
            <div class="cd-modal-body">
               <div class="modal-header">
                  <div class="cd-modal-popup-close md-close close-cashback-rates-popup">×</div>
               </div>
               <div class="title"> Rewards rates </div>
               <div class="cb-rates-table-wrapper">
                  <table class="table-striped">
                     <thead>
                        <tr class="table-heading red"></tr>
                     </thead>
                     <tbody></tbody>
                     <tbody></tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="md-overlay"></div>
</div>
<script> var description = "CouponDunia offers you the best prices on various products featured on Flipkart, India's leading destination when it comes to online shopping."; var storeName = "Flipkart"; var storeId = "flipkart"; var isFavourite = 0; var page = 'stores'; var isCashback = 1; var relatedOffers = 0; var firstOcc = -1; var repeatOcc = -1; var hParam = 0; var hOfferId = ''; var isAuthorized = 0; var hasMultipleOutUrls = false; var storeOptionId = 1; var cashbackType = "REWARDS"; var storeImage = "https:\/\/d3pzq99hz695o4.cloudfront.net\/sitespecific\/in\/stores\/web\/4022b70285e468ff98d01073c52038b8\/flipkart-logo-large.jpg?126153"; var storeImageSmall = "https:\/\/d3pzq99hz695o4.cloudfront.net\/sitespecific\/in\/stores\/web\/4022b70285e468ff98d01073c52038b8\/flipkart-logo-small.jpg?976041"; var cashbackText = "Upto <span class=\"red\">7.5%<\/span> Rewards"; var catOffers = { allOffers: 20, couponOffers: 0, dealOffers: 20 }; var merchantName = "Flipkart"; var merchantCategoryName = 'Miscellaneous'; var merchantSubCategoryName = 'Others'; var sorryHighlight = false; var isUserVerified = ""; var isAdmin = false; var storeLocals = { isSubscribed: 0 }; var newUserOffer = false; GTM_DATA = { page: 'Store', merchant: { merchantName: merchantName, merchantCategoryName: merchantCategoryName, merchantSubCategoryName: merchantSubCategoryName } }; var showRating = 0;</script></div>
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
<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.6250773773776535">
<img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.908976123782324" width="0" height="0" alt="" src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/0">
</div>
</body>
</html> 