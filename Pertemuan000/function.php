<?php
function salam($nama){
    return "Selamat Datang, $nama!";

}

function perkalian($m){
  return  $hitung = 5 * $m;

}

function pembagian ($j){
    return $bagi = 300 / $j;
}


function modulus ($i){
    return $mod = 400 % $i;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1> <?php echo salam("Hendri"); ?></h1>
    <h1> <?php echo perkalian("110"); ?></h1>
    <h1> <?php echo pembagian ("90"); ?></h1>
    <p> <?php echo modulus ("9"); ?> </p>

</body>

</html>