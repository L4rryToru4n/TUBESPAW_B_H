<?php
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../login_page.php");
}else{
    include('../db.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Dashboard</title>

  <style>
    .navbar-brand
    {
      background-image: url("logo.png");
    }
  </style>
</head>
<body>
<div class="container">
  <h3>Colored Navbar</h3>
  <p>Use any of the .bg-color classes to add a background color to the navbar.</p>
  <p>Tip: Add a white text color to all links in the navbar with the .navbar-dark class, or use the .navbar-light class to add a black text color.</p>
</div>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="navbar-brand" href="index.php">
      <img src="..\layout\logo.png" alt="logo" style="width:40px;">
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item" style="margin-right:90px">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>

    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit" style="margin-right:120px">Search</button>
  </form>
<br>

	<div class="btn-group">
    <button type="button" class="btn btn-primary" style="margin-left:auto">Home</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"> 
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
    </div>
  
	</div>
  </ul>
</nav>


			
		</div>
