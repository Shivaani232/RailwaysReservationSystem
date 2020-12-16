<?php
session_start();
$conn = mysqli_connect("localhost","root","","ticketing");
$result = mysqli_query($conn,"SELECT * FROM tickets");
?>
<html>
<head>
  <title>Ticket Booking</title>
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
  
<form method="post" action="booking.php" style="position:fixed;left:35%">
  <div class="form-group">
    <label for="email" style="color:white;">E-mail:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" style="width:500px;">
  </div>
  <div class="form-group">
    <label for="age" style="color:white;">Age:</label>
    <input type="number" class="form-control" placeholder="Enter age" id="age" name="age" style="width:500px">
  </div>
  <div class="form-group">
    <label for="name" style="color:white;">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" style="width:500px">
  </div>
  <div class="form-group">
    <label for="phone" style="color:white;">Phone:</label>
    <input type="text" class="form-control" placeholder="Enter number" id="phone" name="phone" style="width:500px">
  </div>
  <div class="form-group">
    <label for="train" style="color:white;">Train:</label><br>
    <select name="train" id="train" style="width:500px">
      <option>----------------------------------Select----------------------------------</option>
     <option value="Pandian Express">Pandian Express(Chennai-Madurai)</option>
     <option value="Pearl City">Pearl City(Madurai-Chennai)</option>
     <option value="Shahapti Express">Shahapti Express(Chennai-Mumbai)</option>
     <option value="Siberian Express">Siberian Express(Mumbai-Chennai)</option>
     <option value="Delhi Express">Delhi Express(Chennai-Delhi)</option>
     <option value="Ecity Express">Ecity Express(Chennai-Bangalore)</option>
     <option value="Blue Train">Blue Train(Chennai-Kolkata)</option>
     <option value="Orient Express">Orient Express(Delhi-Chennai)</option>
     <option value="Golden Arrow">Golden Arrow(Banglore-Chennai)</option>
     <option value="Andalus Express">Andalus Express(Kolkata-Chennai)</option>
    </select>
  </div>
  <div class="form-group">
    <label for="date" style="color:white;">Date(Type today's date in the given format):</label>
    <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date" name="date" style="width:500px">
  </div>
  <button type="submit" class="btn btn-primary" style="position: relative;left:43%">Submit</button>
</form>


</body>

</html>