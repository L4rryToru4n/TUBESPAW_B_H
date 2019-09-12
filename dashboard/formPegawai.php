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
	<link rel="stylesheet" href="../css/UGD2_B_9509.css">
	<title>Employee Manager</title>
</head>
<div class="bg-image"></div>
<body style="background-image:hospitality-hdr.jpg">
<div id="dashboardData">
<form id="formEmpManager" action="../proses/createEmp.php" method="post">
    <!-- <div id="bg-title"> -->
    <h1 class="header-page ">INPUT DATA PEGAWAI PERPUSTAKAAN</h1>
        
        <form name="formemanager"  style="color: white"  action="#">
            <fieldset>
                <legend style="color: black"><b>Data Pegawai</b></legend><br>

                <b class="input-pegawai">Nama Lengkap</b><br><input name="name" type="text" placeholder="Enter username" name='usrname'><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
                
                <b class="input-pegawai">Gender</b><label><br><input type="radio" id="select-gender" name="jenisKelamin">Laki-laki</label>
                <label><input type="radio" name="jenisKelamin">Perempuan</label><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
                
                <b class="input-pegawai">Email</b> <br><input id="input-pegawai" type="text" placeholder="Enter e-mail" name="email"><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
                
                <b class="input-pegawai">Nomor Telepon</b><br><input id="input-telp" type="text" placeholder="Enter phone number" name="nomorHandphone"><br><br>
                <div class="valid-feedback"></div>
				<div class="invalid-feedback"></div>
            </fieldset>

            <fieldset>
                <legend style="color: black"><b>Pendidikan</b></legend><br>
                <b class="input-text" placeholder="Select Education">Background Pendidikan</b>
                <select>
                    <option value="SMA/SMK" name="pendidikan">SMA/SMK</option>
                    <option value="0" name="pendidikan">D3</option>
                    <option value="1" name="pendidikan">S1</option>
                    <option value="2" name="pendidikan">S2</option>
                    <option value="3" name="pendidikan">S3</option>
            </select><br><br>

                <b class="input-text">IPK</b>
                <br><input id="input-ipk" type="number" placeholder="Enter IPK" name="Ipk"><br><br>
                <b class="cumlaude-cus ">Cumlaude</b><label>
                <input type="radio" placeholder="Cumlaude ?" name="cumlaude">Ya</label>
                <label><input type="radio" id="select-cumlaude" name="cumlaude">Tidak</label><br><br>
            </fieldset>

            <fieldset>
                <legend style="color: black"><b>Lokasi Penempatan Kerja</b></legend><br>
                <b class="alamat-cus ">Alamat</b><br><input type="text" placeholder="Enter Address Name" name="alamat"><br><br>
                <b class="kota-cus ">Kota</b><br><input type="text" placeholder="Enter City Name" name="kota">
            </fieldset>
            <div class="container"><input type="submit" name="store" id="submitBtn" value="Submit" onclick="hurufAll(document.formemanager.usrname) ; angkaAll(document.formemanager.nomorHandphone) ; noempt(document.formemanager.email)" /></div>
            </form>
            <!-- </div> -->
        </form>
</div>
</body>
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