<?php
if(isset($_POST['simpan_jualsapi'])){
    include('../db.php');

    $name = $_POST['nama_jualsapi'];
    $email = $_POST['email_jualsapi'];
    $jeniskelamin = $_POST['jk_jualsapi'];
    $notelp = $_POST['notelp_jualsapi'];
    $tgllahir = $_POST['tgllahir_jualsapi'];
    $password = password_hash($_POST['password_jualsapi'], PASSWORD_DEFAULT);

    $input = mysqli_query($con,"INSERT INTO data_users(name,email,jeniskelamin,nomortelp,tanggallahir,password) VALUES('$name','$email', '$jeniskelamin', '$notelp', '$tgllahir', '$password')")or die(mysqli_error($con));
    if($input){
        echo '<script>alert("succes"); window.location = "../login_page.php"</script>';
    }else{
        echo'<script>alert("succes"); window.location = "../register_page.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>