<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","ticketing");
	$result = mysqli_query($conn,"SELECT * FROM passenger WHERE email='" . $_POST["email"] . "' and password = '". $_POST["pswd"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo"<script type='text/javascript'>alert('Incorrect Details');</script>";
		include 'index.php';

	} else {
		echo"<script type='text/javascript'>alert('Succesful Login');</script>";
		include 'welcome.php';
	}
}
?>