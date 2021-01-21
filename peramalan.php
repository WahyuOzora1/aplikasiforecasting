<?php  

    //include koneksi ke database

    include "koneksi.php";

//cek sudah login atau belum

session_start();
if (!isset($_SESSION["login"])) {

    echo "
        <script>
            document.location.href='login.php';
        </script>
    ";
    // header("Location: login.php");

    exit;
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
    <link rel="stylesheet" type ="text/css" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
    <title>Aplikasi Peramalan</title>
</head>
<body class="html">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 50px">
      <div class="container">
          <h3><i class="fas fa-hand-holding-usd text-secondary m-2"></i></h3>
      <h2 class="navbar-brand font-weight-bold">APLIKASI FORECASTING</h2>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item">
            <a class="nav-link btn-outline-secondary btn-light" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            <li class="nav-item">
            <a class="nav-link btn-outline-secondary btn-light" href="https://api.whatsapp.com/send?phone=62895426572500&text=Assalamualaikum%20Admin%20Ganteng">Hubungi Kami <span class="sr-only">(current)</span></a>
          <li class="nav-item">
            <a class="nav-link btn-outline-secondary btn-light" href="logout.php">Logout <span class="sr-only">(current)</span></a>
            
        </ul>
      </div>
      </div>
    </nav><br><br>
    <div class="mt-5 text-center">
    <form action="data_penjualan.php" id="form1" name="form1" method="post">
        Peramalan Penjualan Produk
        <select name="list_pilihan" id="list_pilihan">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        Minggu Berikutnya
        <button type="submit" name="prediksi" id="prediksi">Prediksi</button>
        <p><a href="index.php">Kembali ke Halaman Utama</a></p>
    </form>
    </div>
<br><br>
    <footer>
    <div class="copyright text-center bg-light font-weight-bold p-2" >
  <p>Developed by WahyuOzora copyright <i class="far fa-copyright"></i> 2020</p>
    </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>