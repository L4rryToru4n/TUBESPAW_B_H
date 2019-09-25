<?php
    include ('../db.php');

    $data = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM dataproduk_sapi WHERE ID_DATA='$data'") or die(mysqli_error($con));

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
	<title>Edit Sapi</title>
    </head>
<div id="dashboardData">
    <!-- <form id="formEmpManager" action="../proses/createEmp.php" method="post"> -->
    <div class="container">
    <form name="formumanager" action="../proses/prosesUpdateProduk.php" method="post">
    <fieldset>
                <input type="hidden" name="id_data" value="<?php echo $data['ID_DATA'] ?>">
                <b class="">Judul Sapi</b><br><input name="judul" type="text" placeholder="Masukkan Judul" value="<?php echo $data['JUDUL'] ?>"><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Berat</b><br><input name="berat" type="number" placeholder="Berat Sapi" value="<?php echo $data['BERAT'] ?>"> kg<br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Kuantitas</b><br><input name="kuantitas" type="number" placeholder="Masukkan Jumlah Sapi" value="<?php echo $data['KUANTITAS'] ?>"> ekor<br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Umur</b><br><input name="umur" type="number" placeholder="Umur Sapi" value="<?php echo $data['UMUR'] ?>"> bulan<br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <label for="lokasi">Lokasi</label>
                <textarea id="" name="lokasi" placeholder="Masukkan Lokasi" placeholder="Lokasi" value="<?php echo $data['LOKASI'] ?>"></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <label for="deskripsi">Deskripsi</label>
                <textarea id="" name="deskripsi" placeholder="Masukkan Deskripsi" placeholder="Deskripsi" value="<?php echo $data['DESKRIPSI'] ?>"></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </fieldset>

            <fieldset>
                <b class="" placeholder="Pilih Warna">Warna</b><label><br>
                <select class="" id="" name="warna" value="<?php echo $data['WARNA'] ?>">
                    <option value="0">Coklat</option>
                    <option value="1">Putih</option>
                    <option value="2">Hitam</option>
                    <option value="3">Abu-abu</option>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Jenis Sapi</b><label><br>
                <select name="jenis" value="<?php echo $data['JENIS'] ?>">
                    <option value="0">Ternak</option>
                    <option value="1">Perah</option>
                    <option value="3">Penarik</option>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Ras Lokal</b><label><br>
                <select name="ras" value="<?php echo $data['RAS'] ?>">
                    <option value="0">Holstein</option>
                    <option value="1">Brahman</option>
                    <option value="3">Simmental</option>
                    <option value="4">Yak</option>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </fieldset>

            <fieldset>
                <b class="">Jenis Kelamin</b><label><br><input type="radio" id="select-gender" name="jenisKelamin" value="<?php echo $data['JENIS_KELAMIN'] ?>">Jantan</label>
                <label><input type="radio" name="jenisKelamin" value="<?php echo $data['JENIS_KELAMIN'] ?>">Betina</label><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Harga</b><br>Rp <input name="harga" type="number" placeholder="Masukkan Jumlah Harga" value="<?php echo $data['HARGA'] ?>"><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </fieldset>
            <div class="tcontainer"><input type="submit" name="tampung" id="submitBtn" value="Update" onclick="hurufAll(document.formsapi.judul) ; angkaAll(document.formsapi.kuantitas) ; noempt(document.formsapi.deskripsi)" /></div>
    </form>
    </div>
</div>
</body>
<script src="../script/script.js"></script>
<script>
    var elm = documentgetElementById("userTab").classList.Add("isActive")
</script>
</html>
 <?php } ?>