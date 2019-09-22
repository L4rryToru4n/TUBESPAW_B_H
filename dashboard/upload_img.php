
<!DOCTYPE html>
<html>
<body>

<form action="..\proses\prosesUnggah.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" name="id_jualsapi" value="<?php echo $data['id_jualsapi'] ?>">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
