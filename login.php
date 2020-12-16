<?php
session_start();
$conn = mysqli_connect("localhost","root","","ticketing");
$result = mysqli_query($conn,"SELECT * FROM passenger");
?>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #1f1d1d ">
<div class="jumbotron text-center" style="font-size:35px;background-color: rgba(0,0,0,0.7);color:white;opacity:0.8">
  Railways Reservation System
</div>

<div class="container">
  
  <form method="post" action="check.php">
    <div class="form-group">
      <label for="email" style="color: white;">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd" style="color: white;">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div style="text-align: center;">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
  </form>
</div>
</body>
</html>
