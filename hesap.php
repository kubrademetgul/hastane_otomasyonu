<?php
include "header.php";

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane Otomasyonu</title>
</head>
<body>
    <div class="hesabim_content">
        <div class="label">
            <label>ADI SOYADI</label>
            <input type="text" placeholder="<?php  echo $kullanicicek['kullanici_adsoyad']; ?>">
        </div><br>
       
        <div class="label">
            <label>TC NO</label>
            <input type="text" placeholder="<?php  echo $kullanicicek['kullanici_tc']; ?>">
        </div><br>
        
        <button type="submit">Güncelle</button>
    </div>
</body>
</html>