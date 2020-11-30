<?php

//ini untuk format function date

//echo date("w, d-M-Y")

//time
// unix timestamp /epoch time
//detik yang sudah berlalu sejak 1 januari 1970

// echo time();

//rumus 60(detik)*60(menit)*24(dalam 1 hari)*2()

// echo date("l", time()+60*60*24*100);

// echo date("l, M-Y", time()-60*60*24*100);



// Mktime
// membuat sendiri detik

// mktim (0,0,0,0,0,0) variabel

// jam, menit, detik, bulan, tanggal, tahun


// echo date("l", mktime(0,0,0,11,24,1990));


//strtotime
 echo date("y", strtotime("25 nov 1990"));


//String : strlen(), strcmp(), explode(), htmlspecialchars()
//utility : var_dump(), isset (untk mengecek variable), empty(cek variable kosong/tidak), die(utk memberhentikan program), sleep(berhenti sesaat)



//User-defined Function







?>