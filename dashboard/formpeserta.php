<?php include '../layout/dashboard.php' ;?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css">
	<title>User Manager</title>
</head>
<div id="dashboardData">
<form id="formUserManager" action="../proses/createUser.php" method="post">
<div class="container">
	<h2>User Manager</h2>
	<div class="form-group">
			<div class="form-group">
					<label for="uname">Name</label>
					<form name="formumanager" action="#">
						<input type='text' name="name" class="form-control" id="uname" placeholder="Enter username" name='usrname'required>
						<div class="valid-feedback"></div>
						<div class="invalid-feedback"></div>
						<br>
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Enter e-mail" name="email" required>
						<div class="valid-feedback"></div>
						<div class="invalid-feedback"></div>
						<br>
						<p style="font-style: normal"><b>Birth Date</b></p>
						<input type="date" name="tanggalLahir" required><br><br>
						<label for="uname">Phone Number</label>
						<input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="nomorHandphone" required>
						<div class="valid-feedback"></div>
						<div class="invalid-feedback"></div>
						<br>
						<b>Jenis Kelamin</b><br>
						<label class="radio-options"><input type="radio" id="radio-label" name="jenisKelamin" required>Laki-laki</label>
						<label class="radio-options"><input type="radio" id="radio-label" name="jenisKelamin" required>Perempuan</label>
							<input type="submit" name="store" id="submitBtn" value="Submit" onclick="hurufAll(document.formumanager.usrname) ; angkaAll(document.formumanager.pnumber) ; noempt(document.formumanager.uemail)" />
						<br>
					</form>
			</div>
		</div>
	</div>
	</form>
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
</body>
<script src="../script/script.js"></script>
<script>
    var elm = documentgetElementById("userTab").classList.Add("isActive")
</script>
</html>