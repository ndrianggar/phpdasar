<?php
// Variable Scope / Lingkup variable

// $x =10;
// $l =20;

function tampil($j){
return $kali = 5 * $j;
}

// echo $l;

// SUPERGLOBAL
// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV
//-------------------- 
// variable global milik PHP
// merupakan Array Assosiative

// array assosiative tidak bisa di cetak (print) begitu saja jadi harus 
// menggunakan var_dump()

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER); echo $_SERVER ["SERVER_NAME"];

//array assosiative
// $_GET ["nama"] = "Hendri";
// $_GET ["nip"]  = "23424234";

// var_dump($_GET); url di browser latihan.php? artinya saya akan mengirimkan data pada halaman ini 
                    // masukkan key "namekey" = "namevalue";
// var_dump($_GET);

$datasiswa = [
              [
                "nama" => "said",
                "jk"    => "laki-laki",
                "alamat" => "jl.pekapuaran",
                "notlp"  => "23423423423"
              ],
              [
                "nama" => "aida",
                "jk"    => "perempuan",
                "alamat" => "jl.purikemang",
                "notlp"  => "233334234444"
              ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <h1>Daftar Santri</h1>
      <?php foreach($datasiswa AS $ds) : ?>
            <ul>
                <li><?= $ds["nama"]; ?></li>
                <li><?= $ds["jk"]; ?></li>
                <li><?= $ds["alamat"]; ?></li>
                <li><?= $ds["notlp"]; ?></li>
                <?php echo tampil("3"); ?>
            </ul>
        <?php endforeach; ?> 
        
        <ol>
        <?php foreach($datasiswa as $data) : ?>
            <li>  <a href="latihan2.php?nama=<?= $datas["nama"]; ?>"><?= $datas["nama"]; ?> </a>
            
            </li>
        <?php endforeach; ?>

        </ol>
        
        

<body>
    
</body>
</html>
