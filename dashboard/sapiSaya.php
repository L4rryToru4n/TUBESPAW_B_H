<?php include '../layout/dashboard.php';
session_start();
$id_users=$_SESSION['user'];
$id_user = $id_users['id']; 

?>
<html lang="en">
    <head>
    <title>Produk Sapi Saya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div id="dashboardData" class="container">
    <input type="hidden" name="id_users" value="<?php echo $user['id'] ?>">
    <?php         
    include('../db.php');

      // $user = $_GET['id'];  
      $query = mysqli_query($con,"SELECT * FROM dataproduk_sapi WHERE ID_USERS = '$id_user'") or die(mysqli_error($con));
      if(mysqli_num_rows($query) == 0){             
          echo 'Tidak ada data !';            
      }else{             
          while($data = mysqli_fetch_assoc($query)){                 
            echo'
            <div class="responsive">
              <div class="gallery">
              
                  <a target="_blank" href=".\detailBarang.php?id='.$data['ID_DATA'].'">
                  <img src="..\images\10\1\2.jpg" alt="Sapi Saya" width="600" height="400" onclick="return">
                  </a>
                <div class="desc">Keterangan Sapi</div>
              </div>
            </div>';
          }
      }  
      
    ?> 
    </div>
    </body>
    <script src="../script/script.js"></script>
<script>
    var elm = documentgetElementById("userTab").classList.Add("isActive")
</script>
</html>