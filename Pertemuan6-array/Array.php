<?php
//ARRAY

//VARIABLE YANG BANYAK MEMILIKI BANYAK NILAI

//contoh array
// $nama = "Hendri";

//cara membuat array 

// - Cara lama

$hari = array("Senin", "Selasa", "Rabu", "Kamis");
//---------------

// - Cara baru

$bulan = ["Januari", "Feburary", "Maret"];

$array1 = [123, "Universitas", false];
// ================================================ //

// Menampilkan Array
// - Var_Dump() / Print_r()
// var_dump($hari);

// echo "<br>";
// print_r($bulan);
// ================================================ //

// echo "<br>";
// Menampilkan 1 elemen array 

// echo $array1 [0];
// ================================================ //


// echo "<br>";
// Menambahkan Array 

var_dump($bulan);
$bulan[] = "April";

echo "<br>";
var_dump($bulan);

echo "<br>";
var_dump($hari);
?>