<?php
// Pengecekan tombol submit
if (isset ($_POST["submit"]) ) {

    // Pengecekan username dan password

if ($_POST["username"] == "panji" && $_POST["password"]== "123") {


    // direct halaman login
    header("Location: admin.php");
    exit;

}else{

    // kalau salah, popup tulisan password dan username salah
    $error = true;
      
    }


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

    
<?php if ( isset($error) ) : ?>
    <p style="color: red;" font-style: italic;>Password dan username salah</p>

<?php endif;?>


<ul>
    <form action="" method="POST">
      <li>
        <label for="username">Username</label>
            <input type="text" name="username" id="username">
      </li>
      <li><label for="password">Password</label>
          <input type="password" name="password" id="password">
      </li>

      <button type="submit" name="submit">Kirim</button>
    
    </form>
</ul>





</body>
</html>