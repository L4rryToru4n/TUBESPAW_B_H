<?php
if(isset($_POST['login_jualsapi'])){
    include('../db.php');

<<<<<<< HEAD
    $email = $_POST['email'];
    $password = $_POST['password'];
=======
    $email = $_POST['email_jualsapi'];
    $password = $_POST['password_jualsapi'];
>>>>>>> e3acc528bbaa3343df4d0d2824ee73bc11ff22eb
    $query = mysqli_query($con,"SELECT * FROM data_users WHERE email = '$email' Limit 1") or die(mysqli_error($con));

    if(mysqli_num_rows($query)==0){
        echo '<script>alert("Email not found"); window.location = "../login_page.php"</script>';
    }else{
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            echo'<script>alert("succes"); window.location = "../dashboard"</script>';
        }else{
            echo'<script>alert("Email or password invalid!"); window.location = "../login.page.php"</script>';
        }
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>