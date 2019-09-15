<table border="1">
  <tr>
    <th>Type:</th>
    <th>Description:</th>
    <th>Recorded Date:</th>
    <th>Added Date:</th>
  </tr>

<?php 
while($row = mysql_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['recorded_date'] ?></td>
        <td><?php echo $row['added_date'] ?></td>
    </tr>
    <br /> 


  <?php 
}
mysql_close();
?>
</table>