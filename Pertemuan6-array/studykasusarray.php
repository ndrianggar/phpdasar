<?php

// array multidimensi
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
<body>
    <?php foreach($datasiswa as $ds) : ?>

      <ul>
              <li> <?= $ds["nama"]; ?></li>
      </ul>

    <?php endforeach; ?>
</body>
</html>