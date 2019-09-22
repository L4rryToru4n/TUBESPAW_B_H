<?php
if(isset($_POST['simpan_jualsapi'])){
    include('../db.php');

    $name = $_POST['nama_jualsapi'];
    $email = $_POST['email_jualsapi'];
    $jeniskelamin = $_POST['jk_jualsapi'];
    $notelp = $_POST['notelp_jualsapi'];
    // $tgllahir_hari = $_POST['tgllahir_jualsapi_hari'];
    // $tgllahir_bulan = $_POST['tgllahir_jualsapi_bulan'];
    // $tgllahir_tahun = $_POST['tgllahir_jualsapi_tahun'];
    $tgllahir = $_POST['tgllahir_jualsapi_tahun']."-". $_POST['tgllahir_jualsapi_bulan']."-".$_POST['tgllahir_jualsapi_hari'];
    
    // echo $tgllahir;
    // echo $tgllahir_hari;
    // $tgllahir = $_POST['tgllahir_jualsapi_hari'];
    // $tgllahir = "1999-08-06";
    $password = password_hash($_POST['password_jualsapi'], PASSWORD_DEFAULT);

    $input = mysqli_query($con,"INSERT INTO data_users(name,email,jeniskelamin,nomortelp,tanggallahir,password) VALUES('$name','$email', '$jeniskelamin', '$notelp', '$tgllahir','$password')")or die(mysqli_error($con));

//was CAST('". $tgllahir ."' AS DATE)
    if($input){
        echo '<script>alert("succes"); window.location = "../login_page.php"</script>';
    }else{
        echo'<script>alert("succes"); window.location = "../register_page.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
