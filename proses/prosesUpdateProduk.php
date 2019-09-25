<?php  
session_start();

if(isset($_POST['tampung'])){  
    include('../db.php');

    $id=$_SESSION['user'];
    $id_data = $_POST['id_data'];
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

    $update=mysqli_query($con,"UPDATE dataproduk_sapi SET JUDUL='$judul', DESKRIPSI='$deskripsi', BERAT='$berat', JENIS_KELAMIN='$jenisKelamin', RAS = '$ras', WARNA='$warna', JENIS='$jenis', UMUR='$umur', KUANTITAS='$kuantitas', LOKASI='$lokasi', HARGA = '$harga' WHERE ID_DATA='$id_data'") or die(mysqli_error($con));   
    if($update){
        $_SESSION['user'] = $id;            
        echo '<script>alert("success"); window.location = "../dashboard/sapiSaya.php"</script>'; 
        header("location:../dashboard/sapiSaya.php?pesan=update");    
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/editProduk.php"</script>';     
    }
}

    
?>