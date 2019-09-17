<?php
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../login_page.php");
}else{
    include('../db.php');
}

echo' <!DOCTYPE html>
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
  <nav class="navbar">
                      <a class="navbar-brand" href="./">
                        <img src="https://cdn.pixabay.com/photo/2016/06/28/17/26/cow-1485012_960_720.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      </a>
                      <div class="btn-group">
                          <button type="button" class="btn">Home</button>
                          <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"> 
                          </button>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Home</a>
                              <a class="dropdown-item" href="#">Profil</a>
                              <a class="dropdown-item" href="#">Sapi Saya</a>
                          </div>            
                      </div>

                      <form class="form-inline" action="/action_page.php">
                          <input class="form-control mr-sm-2" type="text" placeholder="Pencarian">
                          <button class="btn" type="submit">Search</button>
                      </form>
              </nav>
              <div class="deret_link">
                      <a href="#" style="color: white">Tentang Kami</a> <a style="color: white"> | </a>
                      <a href="#" style="color: white">Pusat Bantuan</a>  <a style="color: white">  | </a>
                      <a href="#" style="color: white">Hubungi Kami</a>
              </div>'
?>