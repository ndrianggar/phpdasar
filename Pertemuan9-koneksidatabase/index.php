<?php 

require 'functions.php';
   // 2. Mengambil data dari database
$mahasiswa = query("SELECT * FROM mahasiswa");

// PENJELASAN
// $mahasiswa = namavariable
// query = function yang diambil dari file functions.php
// mekanisme querynya ada di file functions.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        
        </tr>
        <?php $i =1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td> <a href=""> Hapus</a>
            <a href=""> Ubah</a> 
           </td>
            <td><img src="img/<?php echo $mhs["gambar"]; ?>"> </td>
            <td><?php echo $mhs["nrp"];?></td>
            <td><?php echo $mhs["nama"];?></td>
            <td><?php echo $mhs["email"];?></td>
            <td><?php echo $mhs["jurusan"];?></td>
             
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>