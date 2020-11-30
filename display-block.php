<!DOCTYPE html>
<html>
  <head>
    <title>CSS Display</title>
  </head>
  <style>
    div * {
      border-bottom: 1px solid white;
      background: lightgrey;
    }
/* 
    .heading {
  font-size: 20px;
  font-weight: bold;
}

.subheading {
  display: block;
  padding-left: 30px;
} */

 .heading {
  font-size: 20px;
  font-weight: bold;
}

.subheading {
  padding-left: 30px;
}

span {
  padding: 5px;
  display: block; 
}
/* div > .heading {
  font-size: 20px;
  font-weight: bold;
}

div > .subheading {
  padding-left: 30px;
}

div > p {
  padding: 10px;
  display: block;
}
span {
  padding: 10px;
} */
  </style>
  <body>
    <div>
      <span class="heading">Pelatihan</span>
      <span class="subheading">Kurikulum</span>
      <span class="subheading">Materi</span>
      <span class="subheading">Lokasi</span>
    </div>
    <div>
      <span class="heading">Perusahaan</span>
      <span class="subheading">Tim</span>
      <span class="subheading">Visi dan Misi</span>
    </div>
  </body>
</html>