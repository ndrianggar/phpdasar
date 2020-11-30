<?php 

// buat variable 

$angka_sblm=0;
$angka_skrg=1;

// ini mencetak variable hasilnya =>  mencetak 0 1
echo "$angka_sblm $angka_skrg"; // 


for ($i=0; $i<5; $i++)
{
    $output = $angka_sblm + $angka_skrg;
    echo "$output"; // cetak 1

    $angka_sblm = $angka_skrg; // cetak 2
    $angka_skrg = $output; // cetak 3
}

?>