<?php
    include ('../db.php');

    $id = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM customer WHERE id='$id'") or die(mysqli_error($con));

    while($data = mysqli_fetch_array($query)){
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href=".\GD3_B_9509\style.css">
	<title>Edit Peserta</title>
    </head>
<div id="dashboardData">
    <!-- <form id="formUserManager" action="../proses/createUser.php" method="post"> -->
    <div class="container">
    <form name="formumanager" action="../proses/prosesUpdate.php" method="post">
        <label for="uname">Name</label>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type='text' name="name" class="form-control" id="uname" placeholder="Enter username" name='usrname' value="<?php echo $data['name'] ?>" required >
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        <br>
        <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter e-mail" name="email" value="<?php echo $data['email'] ?>" required >
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        <br>
        <p style="font-style: normal"><b>Birth Date</b></p>
            <input type="date" name="tanggalLahir" value="<?php echo $data['tanggalLahir'] ?>" required ><br><br>
        <label for="uname">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="nomorHandphone" value="<?php echo $data['nomorHandphone'] ?>" required >
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        <br>
        <b>Jenis Kelamin</b><br>
        <label class="radio-options">
            <input type="radio" id="radio-label" name="jenisKelamin" required value="<?php echo $data['jenisKelamin'] ?>" required >Laki-laki</label>
        <label class="radio-options">
            <input type="radio" id="radio-label" name="jenisKelamin" required>Perempuan</label>
            <input type="submit" name="store" id="submitBtn" value="Update"/>
        <br>
    </form>
    </div>
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
 <?php } ?>