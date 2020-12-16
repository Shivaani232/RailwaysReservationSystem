
<html>
<head>
  <title>Ticket Details</title>
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
      <a class="nav-link  dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Check Availability
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item " href="train.php">Train Details</a>
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
      <a class="nav-link active" href="ticketing.php">Your Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Faq.php" target="_blank">Help</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Logout</a>
    </li>
  </ul>
</nav>
  
  <div class="alert alert-info text-center">
Displaying Ticket Details
</div>

<?php
session_start();
$conn = mysqli_connect("localhost","root","","ticketing");
$email=$_POST['email'];
$result = mysqli_query($conn,"SELECT * FROM tickets WHERE email='$email'");
?>
  

<table class="flat-table flat-table-1" style="position: relative;left: 26%;">

  <thead>
    <th>Ticket No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Phone</th>
    <th>Train Name</th>
    <th>Date</th>
    
    
  </thead>
  <tbody>
    <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["tno"]; ?></td>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["age"]; ?></td>
  <td><?php echo  $row["phone"]; ?></td>
  <td><?php echo  $row["train"]; ?></td>
  <td><?php echo  $row["date"]; ?></td>
  
  

    </tr>
  <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["tno"]; ?></td>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["age"]; ?></td>
  <td><?php echo  $row["phone"]; ?></td>
  <td><?php echo  $row["train"]; ?></td>
  <td><?php echo  $row["date"]; ?></td>
  

    </tr>
       <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["tno"]; ?></td>
  <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["age"]; ?></td>
  <td><?php echo  $row["phone"]; ?></td>
  <td><?php echo  $row["train"]; ?></td>
  <td><?php echo  $row["date"]; ?></td>
  

    </tr>
        
  </tbody>
</table>
</body>

<footer style=" position:relative; top:230px;">
<div class="alert alert-success text-center">
Thank You, Visit Again &#128516
</div>
</footer>

</html>