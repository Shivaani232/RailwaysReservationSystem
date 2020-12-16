<?php
session_start();
$conn = mysqli_connect("localhost","root","","train");
$result = mysqli_query($conn,"SELECT * FROM train2");
?>
<html>
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="margin:7px;background-color:#1f1d1d;">

	<div class="jumbotron-fluid text-center display-2" style=" padding:35px; background-color: rgba(0,0,0,0.8);color:white;font-size: 25px">
		Railways Reservation System
	</div>

<nav class="navbar navbar-expand-sm bg-dark justify-content-center navbar-dark sticky-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="welcome.php">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Check Availability
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="train.php">Train Details</a>
        <a class="dropdown-item active" href="get.php">Search</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bookticket.php">Book your Ticket</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cancelticket.php">Cancel Your Ticket</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ticketing.php">Your Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Faq.php" target="_blank">Help</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Logout</a>
    </li>
  </ul>
</nav>


  <form method="post" action="show.php" style="box-sizing: border-box;">
  <div class="form-group">
    <label for="number" style="color:white;box-sizing: border-box;position:relative;top:80px;left:40%">Train Number:</label>
    <input type="number" class="form-control" placeholder="Enter Train Number" id="number" name="number" style="width:300px;box-sizing: border-box;position:relative;top:80px;left:40%">
  </div>
  <button type="submit" class="btn btn-primary" style="box-sizing: border-box;position:relative;top:80px;left:47%">Submit</button>
</form>
</body>

<footer style=" position:relative; top:330px;">
<div class="alert alert-success text-center">
Thank You, Visit Again &#128516
</div>
</footer>


</html>