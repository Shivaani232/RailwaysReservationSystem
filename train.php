<?php
  session_start();
$con=mysqli_connect('localhost','root','','train');
$q="select * from train2 ";
$result=mysqli_query($con,$q);
?>
<html>
<head>
  <title>Train Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
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
        <a class="dropdown-item active" href="train.php">Train Details</a>
        <a class="dropdown-item" href="get.php">Search</a>
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
  
<form method="post" action="train1.php" style="position:fixed;left:35%;">
  <div class="form-group">
  <label for="source" style="color:white;">Source:</label><br>
    <select name="source" id="source" style="width:500px">
     <option>----------------------------------Select----------------------------------</option>
     <option value="Chennai">Chennai</option>
     <option value="Madurai">Madurai</option>
     <option value="Mumbai">Mumbai</option>
     <option value="Bangalore">Bangalore</option>
     <option value="Delhi">Delhi</option>
     <option value="Kolkata">Kolkata</option>
    </select>
  </div>
  <div class="form-group">
  <label for="destination" style="color:white;">Destination:</label><br>
    <select name="destination" id="destination" style="width:500px">
     <option>----------------------------------Select----------------------------------</option>
     <option value="Chennai">Chennai</option>
     <option value="Madurai">Madurai</option>
     <option value="Mumbai">Mumbai</option>
     <option value="Bangalore">Bangalore</option>
     <option value="Delhi">Delhi</option>
     <option value="Kolkata">Kolkata</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>

<footer style=" position:relative; top:470px;">
<div class="alert alert-success text-center">
Thank You, Visit Again &#128516
</div>
</footer>

</html>