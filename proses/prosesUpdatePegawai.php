<?php  
    include ('../db.php');
    $id = $_POST['id'];
    $name = $_POST['name'];     
    $email = $_POST['email'];     
    $nomorHandphone = $_POST['nomorHandphone'];     
    $jenisKelamin = $_POST['jenisKelamin'];
    $pendidikan = $_POST['pendidikan'];
    $ipk = $_POST['Ipk'];
    $cumlaude = $_POST['cumlaude'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];

    $update=mysqli_query($con,"UPDATE pegawai SET name='$name', email='$email', nomorHandphone='$nomorHandphone', jenisKelamin='$jenisKelamin', pendidikan='$pendidikan', Ipk='$ipk', cumlaude='$cumlaude', alamat='$alamat', kota='$kota' WHERE id='$id'") or die(mysqli_error($con));   
    if($update){         
        echo '<script>alert("success"); window.location = "../dashboard/listBuku.php"</script>'; 
        header("location:../dashboard/listBuku.php?pesan=update");    
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/editPegawai.php"</script>';     
    }

    
?>