<!DOCTYPE html>
<html>
  <head>
    <title>CSS Display</title>
  </head>
  <style>
    * {
      padding : 15px 15px;
      margin: 5px 10px;
    }

    

    header { background: lightblue; }
    aside { background: lightgreen; }
    main { background: yellow; }
    footer { background: orange; }    

   /* jawaban pilihan A */
    /* header > h1, main > div, aside > h1 {
            display: inline-block;
            }

    header, footer {
  text-align: center;
   } */


 /* jawaban pilihan B */
 header *, main, aside {
  display: inline-block;
}

header, footer {
  text-align: center;
} 

 /* jawaban pilihan C */
/* header > h1, main, aside {
  display: inline-block;
}

header, footer {
  align-text: center;
} */
  </style>
  <body>
    <header>
      <h1 id="logo">Logo</h1>
      <h1 id="title">Title</h1>
      <h3 id="navbar">Navigation Bar</h3>
    </header>
    <aside>
      <h1>Sidebar</h1>
    </aside>
    <main>
      <div>
        <h1>Main Content and Article</h1>
      </div>
    </main>
    <footer>
      <h1>Footer</h1>
    </footer>
  </body>
</html>