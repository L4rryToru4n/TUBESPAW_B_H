<!DOCTYPE html>

<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
  margin-left:10px;
  margin-top: 200px;
  bottom: auto;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
  
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<!-- 
<h2>Responsive Image Gallery</h2>
<h4>Resize the browser window to see the effect.</h4> -->
<input type="hidden" name="ID_DATA" value="<?php echo $data['ID_DATA'] ?>">
<!-- <input type="hidden" name="ID_PRODUK" value="<?php echo $data['ID_PRODUK'] ?>">
<input type="hidden" name="ID_USERS" value="<?php echo $data['ID_USERS'] ?>"> -->
<?php         
    include('../db.php');

  
      $query = mysqli_query($con,"SELECT * FROM dataproduk_sapi") or die(mysqli_error($con));
      if(mysqli_num_rows($query) == 0){             
          echo 'Tidak ada data !';            
      }else{             
          while($data = mysqli_fetch_assoc($query)){                 
            echo'
            <div class="responsive">
              <div class="gallery">
              
                  <a target="_blank" href=".\detailBarang.php?id='.$data['ID_DATA'].'">
                  <img src="..\images\10\1\2.jpg" alt="Rekomendasi" width="600" height="400" onclick="return">
                  </a>
                <div class="desc">'.$data['JUDUL'].'</div>
              </div>
            </div>';
          }
      }  
      
    ?> 

<!-- 
<div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div> -->

</body>
</html>