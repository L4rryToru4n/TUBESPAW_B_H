<?php include '../layout/dashboard.php' ;?>
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
    <title>Employee Manager</title>
</head>   
    <div>
        <h2>Judul Barang </h2>
        <table class="table table-borderless">    
    <thead>        
        <tr>                 
            <td>Ras</td>
            <td>Harga</td>
            <td>Deskripsi</td> 
        </tr>
        <tr>
            <td>Jenis Sapi</td>                           
            <td>Umur</td> 
        </tr>                 
        <tr>
            <td>Jenis Kelamin</td>
            <td>Berat</td>
            
        </tr>
        <tr>
            <td>Warna</td>
            <td>Kuantitas</td>
            
        </tr>          

    </thead>


    <?php         
    
    $query = mysqli_query($con,"SELECT * FROM dataproduk_sapi where ID_USERS = && ID_PRODUK =") or die(mysqli_error($con)); 
    if(mysqli_num_rows($query) == 0){             
        echo '<tr>
                Tidak ada data !
            </tr>';        
    }else{              
        while($data = mysqli_fetch_assoc($query)){                 
            echo '<tr> 
            <h2>'.$data['JUDUL SAPI'].'</h2>                        
            <td>'.$no.'</td>                         
            <td>'.$data['RAS'].'</td>                         
            <td>'.$data['HARGA'].'</td>                                                 
            <td>'.$data['DESKRIPSI'].'</td>                         
            <td>'; if($data['jenisKelamin'] == 0){                             
                echo 'Laki-laki';                         
                }else{                             
                    echo 'Perempuan';                         
                }             
        echo '</td>
        <td>'; if($data['pendidikan'] == 0){                             
            echo 'SMA/SMK';                         
            }else if($data['pendidikan'] == 1){                             
                echo 'D3';                         
            }else if($data['pendidikan'] == 2){                             
                echo 'S1';
            }else if($data['pendidikan'] == 3){                             
                echo 'S2';
            }else if($data['pendidikan'] == 4){                             
                echo 'S3'; 
            }            
    echo '</td>
        <td>'.$data['Ipk'].'</td>
        <td>'; if($data['cumlaude'] == 0){                             
            echo 'Ya';                         
            }else{                             
                echo 'Tidak';                         
            }             
    echo '</td>
        <td>'.$data['alamat'].'</td>
        <td>'.$data['kota'].'</td>                         
        <td><a href="./editPegawai.php?id='.$data['id'].'">Edit </a>/                             
        <a href="../proses/deletePegawai.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus </a></td>
        </tr>';                 
        $no++;             
        }         
    }     
    ?>
    </table>
    </div> 
        </body> 
        
    <script src="../script/script.js"></script> <script> var elm = document.getElementById("listBuku").classList.add("isActive")
    </script> 
</html>