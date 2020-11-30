<?php 

// buat variable 

$angka_sblm=0;
$angka_skrg=1;

// ini mencetak variable hasilnya =>  mencetak 0 1
echo "$angka_sblm $angka_skrg"; 


for ($i=0; $i<5; $i++)
{
    $output = $angka_sblm + $angka_skrg;
    echo "$output"; // cetak 1

    $angka_sblm = $angka_skrg; // cetak 2
    $angka_skrg = $output; // cetak 3
}

echo "<br>";

function angkaderet_fibo($jumlah)
{
    $angk_l=0;
    $angk_b=1;

    $hasil = "$angk_l $angk_b";

    for($i=0; $i<$jumlah-2; $i++){

       $out = $angk_l+$angk_b;
        $hasil =$hasil. "$out";

        $angk_l =$angk_b;
        $angk_b =$out;
    }
    return $hasil;
}

echo angkaderet_fibo(8);




?>