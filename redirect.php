<?php $mysqli = new mysqli("localhost", "root", "", "cashback"); ?>
<?php 
    $projects = array();
    $records = $mysqli->query("SELECT * FROM amazon");
    while ($project =  mysqli_fetch_array($records))
    {
        $projects[] = $project;
    }
    foreach ($projects as $project)
    {
?>
            <div id="J0ZjIxHXiscat" class="ofr-card-wrap revert">
               <div class="offer-card-ctr">
                  <div class="offer-card-wrapper" data-offer-key="couponType" data-offer-value="deal">
                     <div class="offer-card-holder" data-offer-key="isCashback" data-offer-value="1">
                        <div class="cashback-tile" data-offer-key="storeId" data-offer-value="flipkart">
                           <div class="tile-content" data-offer-key="wapHasHigherCashback" data-offer-value=""><span class="offer-big-font" title=""><?php echo $project['off']; ?></span></div>
                           <a href="https://www.coupondunia.in/flipkart" class="cHide">
                              <div class="tile-logo"><img src="./Flipkart Coupons &amp; Offers _ Upto 90% OFF _ Upto 7% CD Rewards_files/flipkart-logo-large.jpg" alt="Flipkart coupons"></div>
                           </a>
                        </div>
                        <div class="card-content-top" data-offer-key="mobileCashbackValue" data-offer-value="0.07%">
                           <div class="title-meta" data-offer-key="storeImage" data-offer-value="https://d3pzq99hz695o4.cloudfront.net/sitespecific/in/stores/web/4022b70285e468ff98d01073c52038b8/flipkart-logo-large.jpg?126153"><span class="coupon-verification"><i class="fa fa-check-box"></i>Verified 8 hours ago</span><span class="coupon-num-uses"><i class="fa fa-users"></i>8 People Used Today </span></div>
                           <div class="horizontal_online_content" data-offer-key="cashbackType" data-offer-value="REWARDS">
                              <a href="https://www.coupondunia.in/flipkart" class="cHide"><span class="store-name"> Flipkart </span></a>
                              <a href="display.php?data=<?php echo $project['description']; ?>&data2= <?php echo $project['link']; ?>">
                                 <div class="offer-title offer-get-code-link"> <?php echo $project['description']?> </div>
                              </a>
                              
                              <div class="cashback-txt"><span class="cb-text flat-green"><span class="ico"></span><span data-offer-key="cashbackText" data-offer-value="Upto &lt;span class=&#39;red&#39;&gt;0.07%&lt;/span&gt; Rewards"> Upto 7.5% Rewards From CouponDunia </span></span></div>
                           </div>
                           <div class="get-codebtn-holder">
                              <?php echo "<a href=".$project['link'].">"?>
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
            ?>
