<?php 
session_start();
if(isset($_POST['tampung'])){     
    include('../db.php'); 

    $id=$_SESSION['user'];
    $id_users = $_POST['id_users'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];     
    $berat = $_POST['berat'];
    $warna = $_POST['warna'];
    $jenis = $_POST['jenis'];     
    $kuantitas = $_POST['kuantitas'];
    $umur = $_POST['umur'];     
    $jenisKelamin = $_POST['jenisKelamin'];
    $ras = $_POST['ras'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];

    $input = mysqli_query($con,"INSERT INTO dataproduk_sapi(ID_USERS,JUDUL, DESKRIPSI, BERAT, WARNA, JENIS, KUANTITAS, UMUR, JENIS_KELAMIN, RAS, LOKASI, HARGA)      
    VALUES('$id_users','$judul','$deskripsi','$berat','$warna', '$jenis', '$kuantitas', '$umur', '$jenisKelamin', '$ras', '$lokasi', '$harga' )") or die(mysqli_error($con));     
    if($input){      
        $_SESSION['user'] = $id;   
        echo '<script>alert("success"); window.location = "../dashboard/tambahSapi.php?='.$id['id'].'"</script>';     
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/tambahSapi.php"</script>';     
    } 
}else{     
    echo '<script>window.history.back()</script>'; 
} 
?>