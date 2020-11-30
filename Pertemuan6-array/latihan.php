<?php

$angka2 = [1,4,2,3,5,6];
sort($angka2); // ini untuk mengurutkan array 

$konversiarray = count($angka2); // ini adalah mengkonversi array menjadi angka

$arrayasosiatif = [[1,2,3],[4,5,6],[7,8,9]];

// pertanyaannya kalau mau cetak array angka 5 bagaimana?
// echo $arrayasosiatif [1][1] maka mencetak angka 5
// bagaimana kalau mau cetak dengan looping ?
 // yaitu dengan melooping 2x 
// contoh liat kode baris 76

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
            .kotak {
                width: 50px;
                height: 50px;
                background-color:red;
                text-align:center;
                margin: 4px;
                float:left;


            }

            .clear{

                clear:both;
            }
    </style>

   
</head>
<body>

<!-- ini cara pertama looping array -->
    <?php for ($i = 0; $i < $konversiarray; $i++){?>
        <!-- "p for ($i = 0; $i < count ($angka2); $i++){?> cara pertama -->
        
        <?php if($angka2 %  4 == 3 ):?>
            <div class='kotak'><a href='www.hasanaljaizy.com'><?php echo $angka2[$i] ?></a></div>
         <?php else :?>
        <div class='kotak'><?php echo $angka2[$i] ?></div>
         <?php endif; ?>
            
        
    <?php }?>
    
<!-- ini cara kedua looping array dengan 

   - foreach = "untuk setiap dokumen yang ada di dalamnya"
   - format : foreach ($namaarray as $representasinama variable)
   - untuk pemberian nama variable setelah kata as 
     acuannya bahasa inggris : ada jamak($books) singular ($book) 

-->    
     

     <div class="clear"></div>

    <?php foreach ($angka2 as $number ){?>
        <div class="kotak"><?php echo $number; ?></div>
    <?php } ?>
    
    <div class="clear"></div>
    <?php foreach ($arrayasosiatif as $a ) : ?>
        <?php foreach ($a as $b ) :?>
            <div class="kotak"><?= $b ?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>