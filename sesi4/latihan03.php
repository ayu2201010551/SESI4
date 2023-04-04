<?php
    $path="upgamabar/";

    if(isset($_POST["kirim"])){
        
      $file=$path . basename($_FILES["upGAMBAR"]["name"]);
      move_upload_file($_FILES ["upGAMBAR"]["tmp_name"], $filex);

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <?php

if(isset($_POST["kirim"])){
    echo "<img src='".$filex."'>";
}
?>
<form method="POST" action="latihan03.php" enctype="multipart/form-data">
    <div> 
        upload File Gambar 
        <input type="file" name="upGAMBAR">
    </div>
    <div>
        <button type="submit"> Upload Gambar </button>
        <input type="hidden" name="kirim" value="OKAY">
    </div>

</form>
</body>
</html>