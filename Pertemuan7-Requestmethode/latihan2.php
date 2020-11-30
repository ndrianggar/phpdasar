<?php
    if (!isset   ($_GET["nama"]) ){

        header("Location: https://www.hasanaljaizy.com");
        
    exit;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Data Detail</h1>

<ul>
    <li><?= $_GET["nama"];?></li>
</ul>
    
</body>
</html>