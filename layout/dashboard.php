<?php
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../login_page.php");
}else{
    include('../db.php');
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Dashboard</title>
</head>
<body>
	<div class="backgroundAll"></div>
		<div id="sidebar">
			<div class="sideheader">
				<div class="name">
					<h1>Company Logo</h1>
					<p>Company Name</p>
				</div>
				<div class="hamburgerbar">
					<a href="#" onclick="hamburgerFunc()">
						<div>
							<div class="bar topbar"></div>
							<div class="bar middlebar"></div>
							<div class="bar bottombar"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="sidebody">
				<div class="sidebodypart">
					<ul>
						<li id="dasboardTab"><a href="./"><p>Dashboard</p></a></li>
						<li id="userTab"><a href="./formpeserta.php"><p>User Manager</p></a></li>
						<li id="empTab"><a href="./formpegawai.php"><p>Employee Manager</p></a></li>
						<li id="listUser"><a href="./listPeserta.php"><p>List User</p></a></li>
						<li id="listBuku"><a href="./listBuku.php"><p>List Buku</p></a></li>
                   		<li id="logout"><a href="../proses/prosesLogout.php"><p>Logout</p></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="navbar">
					<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">

				</div>
				<ul class="nav navbar-nav">
				<li class="active"><a href=".\home.html">Home</a></li>
				<li><a href=".\about.html">About Us</a></li>
				</li>
				<li><a href=".\gallery.html">Gallery</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href=".\contact.html">Contact Us</a></li>
				</ul>
			</div>
			<div>
			<a href=# class="btn btn-default" role="button">Join Us</a>
			</div>
			</nav>
			<div class="searchbar">
				<input id="searchInput" type="text" placeholder="Search Data" onkeyup="displaySearch(event)">
			</div>
			<div class="barinfo">
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Dropdown</a>
				<div class="dropdown-content">
				  <a href="#">Link 1</a>
				  <a href="#">Link 2</a>
				  <a href="#">Link 3</a>
				</div>
			  </li>
			</div>
		</div>'
?>