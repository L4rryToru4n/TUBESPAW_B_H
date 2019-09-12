<?php
    include ('../db.php');

    $id = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM pegawai WHERE id='$id'") or die(mysqli_error($con));

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
	<title>Edit Pegawai</title>
    </head>
<div id="dashboardData">
    <!-- <form id="formEmpManager" action="../proses/createEmp.php" method="post"> -->
    <div class="container">
    <form name="formumanager" action="../proses/prosesUpdatePegawai.php" method="post">
        <fieldset>
            <label for="uname">Name</label>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <b class="input-pegawai"><input type='text' name="name" class="form-control" id="uname" placeholder="Enter username" name='usrname' value="<?php echo $data['name'] ?>" required><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            <br>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
            
            <b class="input-pegawai">Gender</b><label><input type="radio" id="select-gender" name="jenisKelamin" value="<?php echo $data['jenisKelamin'] ?>">Laki-laki</label>
            <label><input type="radio" name="jenisKelamin" value="<?php echo $data['name'] ?>">Perempuan</label><br><br>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
            
            <b class="input-pegawai">Email</b> <input id="input-pegawai" type="text" placeholder="Enter e-mail" name="email" value="<?php echo $data['email'] ?>"><br><br>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
            
            <b class="input-pegawai">Nomor Telepon</b><input id="input-telp" type="text" placeholder="Enter phone number" name="nomorHandphone" value="<?php echo $data['nomorHandphone'] ?>"><br><br>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
            
            <fieldset>
            <legend style="color: white"><b>Pendidikan</b></legend><br>
            <b class="input-text" placeholder="Select Education">Background Pendidikan</b>
            <select>
                    <option value="SMA/SMK" name="pendidikan" value="<?php echo $data['pendidikan'] ?>">SMA/SMK</option>
                    <option value="D3" name="pendidikan" value="<?php echo $data['pendidikan'] ?>">D3</option>
                    <option value="S1" name="pendidikan" value="<?php echo $data['pendidikan'] ?>">S1</option>
                    <option value="S2" name="pendidikan" value="<?php echo $data['pendidikan'] ?>">S2</option>
                    <option value="S3" name="pendidikan"value="<?php echo $data['pendidikan'] ?>">S3</option>
            </select><br><br>

                <b class="input-text">IPK</b>
                <input id="input-ipk" type="number" placeholder="Enter IPK" name="Ipk" value="<?php echo $data['Ipk'] ?>"><br><br>
                <b class="cumlaude-cus ">Cumlaude</b><label>
                <input type="radio" placeholder="Cumlaude ?" name="cumlaude" value="<?php echo $data['cumlaude'] ?>">Ya</label>
                <label><input type="radio" id="select-cumlaude" name="cumlaude">Tidak</label><br><br>
            </fieldset>

            <fieldset>
                <legend style="color: white"><b>Lokasi Penempatan Kerja</b></legend><br>
                <b class="alamat-cus ">Alamat</b><input type="text" placeholder="Enter Address Name" name="alamat" value="<?php echo $data['alamat'] ?>"><br><br>
                <b class="kota-cus ">Kota</b><input type="text" placeholder="Enter City Name" name="kota" value="<?php echo $data['kota'] ?>">
            </fieldset>
                <input type="submit" name="store" id="submitBtn" value="Update"/>
            <br>
        </fieldset>
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