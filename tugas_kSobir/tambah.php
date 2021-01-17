<?php

$nujukoneksi = mysqli_connect("localhost", "root", "", "db_pengajian");


// dicek hela apakah tombol anu submit tos di tekan

if (isset($_POST["submit"])){
     
   $nama_kajian = $_POST["nama_kajian"];
   $pemateri = $_POST["pemateri"];
    $tema_kajian = $_POST["tema_kajian"];
    $durasi_kajian = $_POST["durasi_kajian"];


    $query = "INSERT INTO kajian
                   VALUES(null, '$nama_kajian', '$pemateri', '$tema_kajian', '$durasi_kajian')";
                   mysqli_query($nujukoneksi, $query);

var_dump(mysqli_affected_rows($nujukoneksi));

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

    <ul>
         <li>
                <label for="namakajian">Nama Kajian :</label>
                <input type="text" name="nama_kajian" id="namakajian">
         </li>   
         <li>
                <label for="">Pemateri :</label>
                <input type="text" name="pemateri">
         </li>   
         <li>
                <label for="">Tema :</label>
                <input type="text" name="tema_kajian">
         </li>   
         <li>
                <label for="">Durasi :</label>
                <input type="text" name="durasi_kajian">
         </li>   
         <li>
                <button type="submit" name="submit">Simpan</button>
         </li>   




    </ul>

</form>
    
</body>
</html>