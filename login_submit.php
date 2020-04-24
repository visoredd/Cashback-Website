<?php
$con = mysqli_connect("localhost","root","","cashback");
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$user="SELECT email FROM cash where email='$email'";
	$result=mysqli_query($con,$user);
	$rows = mysqli_num_rows($result);
	if($rows<1){
		$query = "INSERT INTO cash(email) VALUES('$email')";
		$insert = $this->db->query($query);
	}
}
?>