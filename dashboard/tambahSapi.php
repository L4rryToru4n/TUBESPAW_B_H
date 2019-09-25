<?php include '../layout/dashboard.php';

// $id = $_GET['id'];
$id_users=$_SESSION['user'];

$query = mysqli_query($con,"SELECT * FROM data_users") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query)

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
	<link rel="stylesheet" href="../css/style.css">
	<title>Tambah Sapi</title>
</head>
<div class="bg-image"></div>
<body style="background-image:hospitality-hdr.jpg">
<div id="dashboardData">
<form id="formEmpManager" action="../proses/prosesTambah_produk.php" method="post">
    <!-- <div id="bg-title"> -->
    <h1 class="header-page ">Tambah Sapi Saya</h1>
            <fieldset>
                <input type="hidden" name="id_users" value="<?php echo $id_users['user'] ?>">
                <b class="">Judul Sapi</b><br><input name="judul" type="text" placeholder="Masukkan Judul"><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Berat</b><br><input name="berat" type="number" placeholder="Berat Sapi"> kg<br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Kuantitas</b><br><input name="kuantitas" type="number" placeholder="Masukkan Jumlah Sapi"> ekor<br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Umur</b><br><input name="umur" type="number" placeholder="Umur Sapi"> bulan<br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <label for="lokasi">Lokasi</label>
                <textarea id="" name="lokasi" placeholder="Masukkan Lokasi" placeholder="Lokasi"></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <label for="deskripsi">Deskripsi</label>
                <textarea id="" name="deskripsi" placeholder="Masukkan Deskripsi" placeholder="Deskripsi"></textarea>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </fieldset>

            <fieldset>
                <b class="" placeholder="Pilih Warna">Warna</b><label><br>
                <select class="" id="" name="warna">
                    <option value="0">Coklat</option>
                    <option value="1">Putih</option>
                    <option value="2">Hitam</option>
                    <option value="3">Abu-abu</option>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Jenis Sapi</b><label><br>
                <select name="jenis">
                    <option value="0">Ternak</option>
                    <option value="1">Perah</option>
                    <option value="3">Penarik</option>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Ras Lokal</b><label><br>
                <select name="ras">
                    <option value="0">Holstein</option>
                    <option value="1">Brahman</option>
                    <option value="3">Simmental</option>
                    <option value="4">Yak</option>
                </select>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </fieldset>

            <fieldset>
                <b class="">Jenis Kelamin</b><label><br><input type="radio" id="select-gender" name="jenisKelamin">Jantan</label>
                <label><input type="radio" name="jenisKelamin">Betina</label><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>

                <b class="">Harga</b><br>Rp <input name="harga" type="number" placeholder="Masukkan Jumlah Harga"><br><br>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </fieldset>
            <div class="tcontainer"><input type="submit" name="tampung" id="submitBtn" value="Submit" onclick="hurufAll(document.formsapi.judul) ; angkaAll(document.formsapi.kuantitas) ; noempt(document.formsapi.deskripsi)" /></div>
            <!-- </div> -->
</form>
</div>
</body>
</body>
<script src="../script/script.js"></script>
<script>
    var elm = documentgetElementById("userTab").classList.Add("isActive")
</script>
</html>