<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


if(isset($_POST['submit'])){

    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email =$_POST['email'];
    $jurusan =$_POST['jurusan'];
    $gambar =$_POST['gambar'];

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
    
    ";

mysqli_query($conn, $query);
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
        <li> <label for="nrp">NRP</label>
        <input type="text" name="nrp"></li>

        <li> <label for="nama">NAMA</label>
        <input type="text" name="nama"></li>

        <li> <label for="email">EMAIL</label>
        <input type="text" name="email"></li>

        <li> <label for="jurusan">JURUSAN</label>
        <input type="text" name="jurusan"></li>
        <li> <label for="jurusan">GAMBAR</label>
        <input type="file" name="gambar"></li>

        <button type="submit" name="submit">Simpan data!</button>
    </ul>



</form>
    
</body>
</html>