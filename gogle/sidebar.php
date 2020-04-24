<div class="profile-sidebar">
				<div class="profile-info border-bottom-grey">
					<img class="profile-pic" src="https://d1nrhamtcpp354.cloudfront.net/modules/web/assets/images/default_user.png">
					<div class="profile-user-name"> <?php echo $userData['first_name']; ?> 
						<div class="profile-user-available-amt">Available: <span>Rs. <?php echo $ca;?> </span>
						</div>
						<div class="profile-user-pending-amt">Pending: <span>Rs. 0 </span>
						</div>
					</div>
				</div>
				<div id="sidetabs" class="profile-tabs">
					<div class="sidetab">
						<a  href="overviewcash.php" class="router-link-active">
							<div>
								<div class="itag profile-sprite overview">
								</div>
								<span class="innerSpan clcov"> Overview </span>
							</div>
						</a>
					</div>
					<div class="sidetab">
						<a href="withdraw.php">
							<div>
								<div class="itag profile-sprite user-transfer"></div>
								<span class="innerSpan clcwi"> Withdraw Money </span>
							</div>
						</a>
					</div>
					<div class="sidetab">
						<a href="cashbackactivity.php">
							<div>
								<div class="itag profile-sprite cashback-activity-sidebar"></div><span class="innerSpan clcca"> Cashback Activity </span>
							</div>
						</a>
					</div>
					<div class="sidetab">
						<a href="notification.php">
							<div>
								<i class="itag fa fa-bell-o"></i><span class="innerSpan clcno"> All Notifications </span>
							</div>
						</a>
					</div>
					<div class="sidetab">
						<a href="suppoort.php">
							<div>
								<div class="itag profile-sprite help-support-sidebar"></div><span class="innerSpan clcsup"> Help & Support </span>
							</div>
						</a>
					</div>
				</div>
			</div>