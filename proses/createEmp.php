<?php 
if(isset($_POST['store'])){     
    include('../db.php'); 
 
    $name = $_POST['name'];     
    $email = $_POST['email'];     
    $nomorHandphone = $_POST['nomorHandphone'];     
    $jenisKelamin = $_POST['jenisKelamin'];
    $pendidikan = $_POST['pendidikan'];
    $ipk = $_POST['Ipk'];
    $cumlaude = $_POST['cumlaude'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];

    $input = mysqli_query($con,"INSERT INTO pegawai(name, email, nomorHandphone, jenisKelamin, pendidikan, Ipk, cumlaude, alamat, kota)      
    VALUES('$name','$email','$nomorHandphone','$jenisKelamin', '$pendidikan', '$ipk', '$cumlaude', '$alamat', '$kota')" ) or die(mysqli_error($con));     
    if($input){         
        echo '<script>alert("success"); window.location = "../dashboard/listBuku.php"</script>';     
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/formPegwai.php"</script>';     
    } 
}else{     
    echo '<script>window.history.back()</script>'; 
} 
?>