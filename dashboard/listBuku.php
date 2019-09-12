<?php include '../layout/dashboard.php';?>
<html lang="en">
<head>
  <title>List Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="dashboardData" class="container">  
<h2>List Buku</h2>        
    <table class="table">    
    <thead class="thead-dark">        
        <tr>                 
            <th>No.</th>                 
            <th>Nama</th>                 
            <th>Email</th>                              
            <th>Nomor Handphone</th>                 
            <th>Jenis Kelamin</th> 
            <th>Pendidikan</th>
            <th>IPK</th>
            <th>Cumlaude</th>
            <th>Alamat</th>
            <th>Kota</th>                
            <th>Pengaturan</th>             
        </tr>
    </thead>
    <?php         
    
    $query = mysqli_query($con,"SELECT * FROM pegawai") or die(mysqli_error($con)); 
    if(mysqli_num_rows($query) == 0){             
        echo '<tr>
                <td colspan="7"> Tidak ada data ! </td>
            </tr>';        
    }else{ 
        $no = 1;             
        while($data = mysqli_fetch_assoc($query)){                 
            echo '<tr>                         
            <td>'.$no.'</td>                         
            <td>'.$data['name'].'</td>                         
            <td>'.$data['email'].'</td>                                                 
            <td>'.$data['nomorHandphone'].'</td>                         
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
        <style> 
        .userListTable{     
            width: 100%; 
        } 
        table, tr, td, th{     
            border: 1px;     
            border: 1px solid black;     
            border-collapse: collapse; 
        } 
        </style> 
    <script src="../script/script.js"></script> <script> var elm = document.getElementById("listBuku").classList.add("isActive")
    </script> 
</html>