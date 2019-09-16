<?php
if(isset($_POST['store'])){
    include('../db.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nomortelp = $_POST['nomortelp'];
    $tanggallahir = $_POST['tanggallahir'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $input = mysqli_query($con,"INSERT INTO data_users(name,email,jeniskelamin,nomortelp,tanggallahir,password) VALUES('$name','$email','$jeniskelamin','$nomortelp','$tanggallahir','$password')")or die(mysqli_error($con));
    if($input){
        echo '<script>alert("succes"); window.location = "../login_page.php"</script>';
    }else{
        echo'<script>alert("succes"); window.location = "../register_page.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>