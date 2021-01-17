
<h1> BILANGAN GANJIL GENAP </h1>

<form action=" " method="GET">
     Banyak : <input type ='text' name ='banyak'><br><br>
     Bilangan : <select name='bil'>
         <option value ='ganjil'>Ganjil</option>
         <option value ='genap'>Genap</option>
     </select><br>
     <br><input type='submit' name='tampil' value='tampil'>
</form>

<?php

if(isset($_GET['tampil'])){ //isset :sebuah variable yang memberi tahu sudah diset atau belum

     $bil = $_GET['bil'];
     $banyak=$_GET['banyak'];

     function ganjil($b=0,$c=0){
         if($b<$c){
             if($b==0){
                  echo $c+=1;
                  echo ",&nbsp";
             }else
                  echo $c+=2;
              echo ",&nbsp";
              $b++;
              ganjil($b,$c);
         }
     }

     function genap($b=0,$c=0){
         if($b<$c){
             if($b==0){
                  echo $c+=2;
                  echo ",&nbsp";
             }else
                  echo $c+=2;
                  echo ",&nbsp";
                  $b++;
                  genap($b,$c);
         }
     }

     switch ($bil){
        case "ganjil":
             echo "Deret Bilangan Ganjil : ";
             ganjil($banyak);
             break;
        case "genap":
             echo "Deret Bilangan Genap : ";
             genap($banyak);
             break;
        default:
             break;
      }
   }
?>