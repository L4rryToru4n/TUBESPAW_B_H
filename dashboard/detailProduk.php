<?php include '../layout/dashboard.php';
$id_users=$_SESSION['user'];
$id_user = $id_users['id'];
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="..\css\style.css">
    <title></title>

    <style>
    </style>
</head>   
    <div>
        <h2></h2>
        <table class="table table-borderless">    
    <thead>        
        <tr>                    
            
        </tr>          

    </thead>

    <?php

    // $strSQL_result  = mysqli_query($con,"select `LIKE`,`UNLIKE` from `dataproduk_sapi'");
    // $row            = mysqli_fetch_array($strSQL_result);
    
    // $like       = $row['LIKE'];
    // $unlike     = $row['UNLIKE'];
    
    // if($_POST)
    // {
    //     if(isset($_COOKIE["counter_gang"]))
    //     {
    //         echo "-1";
    //         exit;
    //     }
    //     setcookie("counter_gang", "liked", time()+3600*24, "/like-unlike-in-php-mysql/", ".demo.phpgang.com");
    //     if(mysqli_real_escape_string($connection,$_POST['op']) == 'like')
    //     {
    //         $update = "`like`=`like`+1";
    //     }
    //     if(mysqli_real_escape_string($connection,$_POST['op']) == 'un-like')
    //     {
    //         $update = "`un-like`=`un-like`+1";
    //     }
    //     mysqli_query($con,"update `dataproduk_sapi` set $update");
    //     echo 1;  
    // }         
    
    $data = $_GET['id'];
    $id = $data['id'];
    
    $query = mysqli_query($con,"SELECT * FROM dataproduk_sapi WHERE ID_DATA = '$id' && ID_USERS = '$id_user'") or die(mysqli_error($con)); 
    if(mysqli_num_rows($query) == 0){             
        echo '<tr>
                Tidak ada data !
            </tr>';        
    }else{              
        $data = mysqli_fetch_assoc($query);                 
            echo 
            '<h2>'.$data['JUDUL'].'</h2>
            <tr>                                               
                <td>Ras            : '; if($data['RAS'] == 0){                             
                    echo 'Sapi Ternak';                         
                    }else if($data['RAS'] == 1){                             
                        echo 'Sapi Potong';                         
                    }             
            echo '</td>                         
                <td>Harga          : Rp '.$data['HARGA'].'</td>
                <td>        '.$data['LOKASI'].'</td>                                                 
                <td>        '.$data['DESKRIPSI'].'</td>
            </tr>
            <tr>
                <td>Jenis Sapi     : '; if($data['JENIS'] == 0){                             
                    echo 'Limousine';                         
                    }else if($data['JENIS'] == 1){                             
                        echo 'Sapi Brahman';                         
                    }else if($data['JENIS'] == 2){                             
                        echo 'Sapi Simmental';                         
                    }              
            echo '</td>
                    <td>Umur       : '.$data['UMUR'].' bulan</td>
            </tr>
            <tr>
                <td>Jenis Kelamin     : '; if($data['JENIS_KELAMIN'] == 0){                             
                    echo 'Jantan';                         
                    }else{                             
                        echo 'Betina';
                    }              
            echo '</td>
                    <td>Berat       : '.$data['BERAT'].' Kg</td>
            </tr>
            <tr>
                <td>Warna           : '; if($data['WARNA'] == 0){                             
                    echo 'Coklat';                         
                    }else  if($data['WARNA'] == 1){                             
                        echo 'Putih';
                    }else  if($data['WARNA'] == 2){                             
                        echo 'Hitam';
                    }else{                             
                        echo 'Abu-abu';
                    }              
                echo '</td>
                    <td>Kuantitas       : '.$data['BERAT'].' ekor</td>
            </tr>
            <td><a href="./editProduk.php?id='.$data['ID_DATA'].'">Edit</a>/                             
        <a href="../proses/prosesDeleteProduk.php?id='.$data['ID_DATA'].'" onclick="return confirm(\'Yakin?\')">Hapus </a></td>';                           
    }  
    ?>
    </table>
    </div> 
    <!-- <div class="grid">
                <span id="status"></span><br>
                <input type="button" value="<?php echo $like; ?>" class="button_like" id="linkeBtn" img src="..\images\up.png">
                <input type="button" value="<?php echo $unlike; ?>" class="button_unlike" id="unlinkeBtn" img src="..\images\down.png" "https://www.flaticon.com/authors/freepik"/>
            </div> -->
        </body> 
    <script src="../script/script.js"></script> <script> var elm = document.getElementById("detailBarang").classList.add("isActive")
    </script> 
</html>