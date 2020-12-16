<?php
session_start();
$conn = mysqli_connect("localhost","root","","ticketing");
$tno=$_POST['number'];

$result = mysqli_query($conn,"DELETE FROM tickets WHERE tno='$tno'");
echo"<script type='text/javascript'>alert('Cancellation Successful');</script>";
		include 'welcome.php';
?>