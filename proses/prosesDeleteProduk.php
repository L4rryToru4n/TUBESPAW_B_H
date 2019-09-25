<?php 
if(isset($_GET['id'])){     
    include('../db.php'); 
 
    $data = $_GET['id'];     

    $delete = mysqli_query($con,"DELETE FROM dataproduk_sapi WHERE ID_DATA='$data'" )or die(mysqli_error($con));     
    if($delete){         
        echo '<script>alert("success"); window.location = "../dashboard/sapiSaya.php"</script>';     
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/sapiSaya.php"</script>';     
    } 
}else{     
    echo '<script>window.history.back()</script>'; 
} 
?>