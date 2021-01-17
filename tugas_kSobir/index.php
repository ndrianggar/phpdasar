<?php

$nujukoneksi = mysqli_connect("localhost", "root", "", "db_pengajian");



$hasilnadidie = mysqli_query($nujukoneksi, "SELECT * FROM kajian");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kajian</title>
</head>
<body>

<p>Daftar Kajian hari ini tanggal : <?php echo date("l-m-yy")?></p>

<button><a href="tambah.php">Tambah</a></button>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>ID Kajian</th>
        <th>Nama Kajian</th>
        <th>Pemateri</th>
        <th>Tema</th>
        <th>Durasi</th>
        <th>Aksi</th>
    </tr>

        <?php $no =1; ?>
        <?php foreach($hasilnadidie as $tampilken) : ?>
        <tr>
        
        <td><?php echo $no;?></td> 
            <td><?php echo $tampilken["id_kajian"];?></td>        
            <td><?php echo $tampilken["nama_kajian"]?></td>        
            <td><?php echo $tampilken["pemateri"]?></td>        
            <td><?php echo $tampilken["tema_kajian"]?></td>        
            <td><?php echo $tampilken["durasi_kajian"]?></td>  
            <td> <a href=""> Hapus</a>
            <a href=""> Ubah</a> 
           </td>      
        
        </tr>
        <?php $no++;?>
        <?php endforeach; ?>

</table>    
</body>
</html>