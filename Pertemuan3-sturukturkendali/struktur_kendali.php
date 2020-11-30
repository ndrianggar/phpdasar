<?php
// struktur kendali (Control Flow)

/*- Pengulangan 
   1. if .. else

   2. if .. else if .. else

   3. switch

   4. ternary
/* ============================================================================= */

/*
  - for 
  - While
  - do.. while
  - foreach : pengulangan khusus array

*/
/* ============================================================================= */
/*
    for () didalamnya terdiri dari
    
          = inisiasialisasi untuk menentukan variable awal
          = terminasi untuk memberhentikan pengulangannya
          = increment pengulangannya untuk ditambah atau dikurang  
 */

//    for ($i = 0; $i < 5; $i++){
//        echo ("+ <br>");
//    }

/* ============================================================================= */
// $i = 0; // inisialisasi 
// // selama  kondisinya bernilai true (benar) maka akan mencetak

//  while ($i < 5) // terminasi
//  {
//  echo "++ <br>";
 
//  $i++; //increment 
// }

/* ============================================================================= */
// $i=0;
// do{
// // lakukan dahulu pengulangan dan baru pengecekan
// echo "+ <br>";
// $i++;
// }  while( $i < 5)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<style>
  .warna-baris{
    background-color:red;
  
  }
</style>
<body>
    
    <table border="1" cellpadding="10" celspacing="0">
   <p>Cara pertama</p>
      <?php
         for ($i=1; $i <=5; $i++){
             echo "<tr>";
            for ($j = 1; $j<=5; $j++){

                 echo "<td>$i,$j</td>";
             }
           echo "</tr>";

         }
         
         ?>
  
         for ($i=1; $i <=5; $i++){<br>
             echo "< tr >";<br>
            for ($j = 1; $j<=5; $j++){<br>
                <br>
                 echo " < td> $i,$j < /td>";
             }<br>
           echo "< /tr >"; <br><br>
     
     </table>
     <table border="1" cellpadding="10" celspacing="0">
        <p>Cara Kedua</p>
      <?php for ($i=1; $i<=3; $i++){?>
        <tr>
            <?php for ($j=1; $j<=5; $j++){?>
                <td><?php echo "$i,$j" ?></td>
            <?php }?>
        </tr>
      <?php }?>

      
    </table>

    <table border="1" cellpadding="10" celspacing="0">
        <p>Cara Ketiga (dengan merubah statment pembukan kurawal <em>"{"</em> diganti dengan ":" penutupnya diganti dengan endfor;</p>
        <p>catatan : untuk menyingkat dalam menampilkan variable maka bisa diganti "< ? php echo" dengan < ? = </p>
      <?php for ($i=1; $i<=5; $i++) : ?>
        <?php if($i % 2 == 1) : ?>
               <tr class="warna-baris">
        <?php else : ?>
              <tr>
        <?php endif; ?>
            <?php for ($j=1; $j<=5; $j++) : ?>
                <td><?= "$i,$j"; ?></td>              
            <?php endfor; ?>
        </tr>
     <?php endfor; ?>

      
    </table>

</body>
</html>


