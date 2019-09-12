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
			<div class="searchbar">
				<input id="searchInput" type="text" placeholder="Search Data" onkeyup="displaySearch(event)">
			</div>
			<div class="barinfo">
				Dropdown
			</div>
		</div>'
?>