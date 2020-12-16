<?php
session_start();
$conn = mysqli_connect("localhost","root","","ticketing");
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$train=$_POST['train'];
$date=$_POST['date'];
$result = mysqli_query($conn,"INSERT INTO tickets (name,email,age,phone,train,date) VALUES ('$name','$email','$age','$phone','$train','$date')");
echo"<script type='text/javascript'>alert('Booking Successful');</script>";
		include 'welcome.php';
?>