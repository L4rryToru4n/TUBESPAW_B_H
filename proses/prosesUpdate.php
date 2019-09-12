<?php  
    include ('../db.php');
    $id = $_POST['id'];
    $name = $_POST['name'];     
    $email = $_POST['email'];     
    $tanggalLahir = $_POST['tanggalLahir'];     
    $nomorHandphone = $_POST['nomorHandphone'];     
    $jenisKelamin = $_POST['jenisKelamin'];

    $update=mysqli_query($con,"UPDATE customer SET name='$name', email='$email', tanggalLahir='$tanggalLahir', nomorHandphone='$nomorHandphone', jenisKelamin='$jenisKelamin' WHERE id='$id'") or die(mysqli_error($con));   
    if($update){         
        echo '<script>alert("success"); window.location = "../dashboard/listPeserta.php"</script>'; 
        header("location:../dashboard/listPeserta.php?pesan=update");    
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/editPeserta.php"</script>';     
    }

    
?>