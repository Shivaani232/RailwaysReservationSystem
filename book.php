<?php
session_start();
$conn = mysqli_connect("localhost","root","","ticketing");
$date=$_POST['date'];
$result = mysqli_query($conn,"SELECT * FROM tickets WHERE date='$date'");
?>
<html>
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style1.css">
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
      <a class="nav-link  dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Check Availability
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="train.php">Train Details</a>
        <a class="dropdown-item " href="get.php">Search</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="bookticket.php">Book your Ticket</a>
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
<div>
  <div>Ticket Number:</div>
  <div><?php echo  $row["tno"]; ?></div>
  <div>Name:</div>
  <div><?php echo  $row["name"]; ?></div>
  <div>Email:</div>
  <div><?php echo  $row["email"]; ?></div>
  <div>Age:</div>
  <div><?php echo  $row["age"]; ?></div>
  <div>Phone:</div>
  <div><?php echo  $row["phone"]; ?></div>
  <div>Train:</div>
  <div><?php echo  $row["train"]; ?></div>
  <div>Date</div>
  <div><?php echo  $row["date"]; ?></div>
</div>
</body>

</html>