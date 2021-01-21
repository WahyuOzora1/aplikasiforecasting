<?php

include "koneksi.php";

session_start();

//cek ada sesi login atau belum

if (isset($_SESSION["login"])) {

    header("Location:index.php");

    exit;
}

if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    //query
    $queryuser = "SELECT * FROM user WHERE username = '$username' AND password = '$password'  ";
    $resultuser =  mysqli_query($koneksi, $queryuser);

    $cek = mysqli_num_rows($resultuser);

    if ($cek > 0) {

        //cek password

        $rowuser = mysqli_fetch_assoc($resultuser);

        //fungsi cek session login
        $_SESSION["login"] = true;


        header("Location: index.php");

        exit;
    } else {

        $error = true;
    }
}


?>


<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="login.css">
    <link rel="stylesheet" type ="text/css" href="fontawesome-free/css/all.min.css">
    <title>Document</title>
</head>
<body class="html">
<div class="container">
          <h2>Login</h2>
          <form action="" method="POST">
          <?php if(isset($error)) : ?>
           <p style="color: red; font-style: italic;">Username dan Password salah</p>
           <?php endif; ?>  
                <label>Username</label>
                <br>
                <input type="text" name="username" id="username">
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
                <button name="login" id="login" type="submit">Login</button>
            </form>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
