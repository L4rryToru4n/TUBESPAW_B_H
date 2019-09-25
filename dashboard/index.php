<?php include '../layout/dashboard.php';
session_start();
// if(!isset($_SESSION['user']))
// {
//     header("location:index.php");
// }else
// {
//     echo $_SESSION['user'];
// }
$id=$_SESSION['user'];

// $users = $user;
// $users = $_SESSION['id'];

// echo $user['id'];

$query = mysqli_query($con,"SELECT * FROM data_users") or die(mysqli_error($con));
$users = mysqli_fetch_assoc($query);
// Check the current user


    // echo $user['id'];

echo' <label><a href="tambahSapi.php?id='.$id['id'].'" style="margin-top:50px">Tambah Sapi</label>';
?>
<img src="..\images\ribbon.jpg" alt="Jual Sapi" width="150" height="150" style="margin-top:70px;padding-bottom:0px">

<div id="dashboardData">
<iframe height="1000px" width="100%" src="sapiRekomendasi.php" name="iframe_a" frameBorder="0"></iframe>
</div>
</body>
<script src="../script/script.js"></script>
<script>
    var elm = documentgetElementById("dashboardTab").classList.Add("isActive")
</script>
</html>