// php&mysql

// ekstensi MySQL (sudah tidak disupport)
// eksetensi MySQLi => improve, lebih teroptimasi
// PDO (PHP Data Object) => driver untuk terhubung kebanyak database

<?php 

// koneksi ke database
// butuh parameter : 1. namahost, 
                //   2. usernamelocalhost
                //   3. passwordlocalhost
                //   4. namadatabase

  $conn = mysqli_connect("localhost", "root", "", "phpdasar");
 
  // $conn = variable untuk mempermudah penggunaan



// ambil data dari table mahasiswa / query data
// ada 2 parameter : 1. nama variable koneksi ($conn) 
                //   2. Query database
  // catatan jika menggunakan mysqli pesan berhasil dan gagal tidak ada notifikasi
  // cara mengetahui pesan error atau sukses maka harus buat variable untuk menyimpan query ($result)
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// var_dump($result);

// hasil dari vardump
// (mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(6) ["lengths"]=> NULL ["num_rows"]=> int(3) ["type"]=> int(0) }

// ket : 
// (mysqli_result)#2 (5) = ada berapa data di table yg diqueri  
// ["field_count"]=> int(6) = ada 6 field
// ["num_rows"]=> int(3) = ada 3 record
// var_dump($result); jika salah query database pesannya = bool(false)

// utk cek error
// if(!$result){
//     echo mysqli_error($conn);
// }

// hasilnya = Table 'phpdasar.mahasiswsa' doesn't exist

//===================================//
// analoginya : misalnya kalian main kerumah teman kemudian kalian bilang "eh boleh ga tolong liat isi lemarinya" kemudian temannya bawa lemarinya kedepan tanpa membukakan isi lemarinya maka temannya ga bisa liat isi lemarinya
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); --> maka query ini benar tapi yang dibawa itu semua lemari padahal yang dibutuhkan cm isinya

// jadi butuh tambahan query :

// ambil data  (fetch) mahasiswa dari object result
// ada 4 cara : 
// 1 msqli_fetch_row() mengembalikan array numeric
// 2 msqli_fetch_assoc() mengembalikan array assosiatif
// 3 msqli_fetch_array() mengembalikan kedua2nya (numeric dan assosiatif)
// 4 msqli_fetch_object() mengembalikan dengan format ->

// while ($mhs=mysqli_fetch_assoc($result)){

// var_dump($mhs);
// }
// $result ini biasanya yang disarankan oleh php.net
// ketika kita melakukan query maka akan mengembalikan 2 hal; kalau menambah akan menambah, kalau menghapus akan menghapus 
// query diatas ketika gagal dia akan mengembalikan nilai false jika benar dia true


// jadi untuk memindahkan array TSB kepada kotak di bawah kita menggunakan pengulangan while ($row=mysqli_fetch_assoc ($variablequery)) : ? > 
// cara membuat nomor index otomatis, caranya buat variable <?php $i =1;? >, kemudian pasang di kolom dan sebelum endwhile kasih <? php $i ++;
// cara buat kodingan lebih efektif dan modular (maksudnya buat function koneksi dan querynya terpisah) dalam hal konek ke database dan mengambil datanya
// untuk yg while itu analoginya ada orang bawa lemarinya untuk diperlihatkan bajunya


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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td> <a href=""> Hapus</a>
            <a href=""> Ubah</a> 
           </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>"> </td>
            <td><?php echo $row["nrp"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
             
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>
</body>
</html>