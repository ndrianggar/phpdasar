<?php

// 1. Kita sudah membuat koneksi kedatabase
// koneksi ke database
// butuh parameter : 1. namahost, 
                //   2. usernamelocalhost
                //   3. passwordlocalhost
                //   4. namadatabase

  $conn = mysqli_connect("localhost", "root", "", "phpdasar");

  // $conn = variable untuk mempermudah penggunaan

// ketika dilihat pada browser maka akan muncul pesan error seperti dibawah ini : 

// 1. Notice: Undefined variable: conn in C:\laragon\www\phpdasar\Pertemuan9-koneksidatabase\functions.php on line 16

// Warning: mysqli_query() expects parameter 1 to be mysqli, null given in C:\laragon\www\phpdasar\Pertemuan9-koneksidatabase\functions.php on line 16

// Warning: mysqli_fetch_assoc() expects parameter 1 to be mysqli_result, null given in C:\laragon\www\phpdasar\Pertemuan9-koneksidatabase\functions.php on line 21

// kenapa ini terjadi karena, nomor 1 karena difunction kita paka variable ($conn) ini tidak dikenali

//  variable ($conn) di function dan di koneksi tidak nyambung, karena variable scope (variable yang ada dilingkungan)

// supaya mengacu pada variable yang sama maka harus dilakukan ialah menambahkan kode global $conn;

   // 2. Mengambil data dari database
 function query($query){

    // function query ini yang akan menerima query dari file index.php
    // parameter $query ini untuk menampung query yang ditangkap.

     global $conn; // Penanganan error notice Undefined variable:
      
      // ingat setelah mysqli_query itu ada 2 paramater : 1.koneksi, query
      // $namavariable = function query ($panggilkoneksi, $panggilvariablequery)
      $result = mysqli_query($conn, $query);
      
      // berikutnya kita minta teman kita untuk menyiapkan wadahnya (variable)

      $rows = []; // wadah yang akan diisi baju oleh teman kita
      while ( $row = mysqli_fetch_assoc($result) ) {
          $rows[] = $row;
      }  

      return $rows;
  }
  
  // PENJELASAN
  // while = function pengkondisian
  //  mysqli_fetch_assoc = mengembalikan nilai array berdasarkan nama data dalam array
  // result = variable koneksi dan query
  //  return = untuk mengembalikan nilai dari arraynya 
  // rows = wadah kotak yang sudah terisi baju rapih
  // global $conn = membuat variable $conn itu sama dengan yang di dalam (function) dan di luar (koneksi)
 
    // KESIMPULAN 
    // 1. Kita sudah membuat koneksi kedatabase
    // 2. Mengambil data dari database
    // 3. Membuat kode jadi rapih dan modular
 ?>

  