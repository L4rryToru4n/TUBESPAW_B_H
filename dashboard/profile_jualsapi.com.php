<?php
    session_start();
    
    include ('../db.php');

    $id = $_SESSION['user'];
    $id_users = $id['id'];

    $result = mysqli_query($con,"SELECT * FROM data_users where id='$id_users'");
    while($row = mysqli_fetch_assoc($result))
    { 
        $name=$row['name'];
        $email=$row['email'];
        $jeniskelamin=$row['jeniskelamin'];
        $notelp=$row['nomortelp'];
        $tgllahir=$row['tanggallahir'];
    }
    ?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	
	<body>

      <table width="398" border="0" align="center" cellpadding="0">
          <tr>
            <td height="26" colspan="2">Your Profile Information </td>
          <td><div align="right"><a href="index.php">logout</a></div></td>
          </tr>
          <tr>
            <!-- <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td> -->
            <td width="82" valign="top"><div align="left">FirstName:</div></td>
            <td width="165" valign="top"><?php echo $name ?></td>
          </tr>
          <tr>
            <td valign="top"><div align="left">Email:</div></td>
            <td valign="top"><?php echo $email ?></td>
          </tr>
          <tr>
            <td valign="top"><div align="left">Gender :</div></td>
            <td valign="top"><?php
            if($jeniskelamin == 0){                             
                echo 'Pria';                         
                }else{                             
                    echo 'Wanita';
                }              
            
            ;?></td>
          </tr>
          <tr>
            <td valign="top"><div align="left">NomorTelp:</div></td>
            <td valign="top"><?php echo $notelp ?></td>
          </tr>
          <tr>
            <td valign="top"><div align="left">TglLahir: </div></td>
            <td valign="top"><?php echo $tgllahir ?></td>
          </tr>
        </table>
        <p align="center"><a href="index.php"></a></p>
        <?php echo'<td><a href="./editProfil.php?id='.$id['id'].'">Edit Profile</a>'; ?>

	</body>
</html>