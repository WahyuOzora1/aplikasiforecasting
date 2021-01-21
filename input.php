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

    exit;
}
?>


<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
    <link rel="stylesheet" type ="text/css" href="fontawesome-free/css/all.min.css">
    <title>Document</title>
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
    </nav>
<form method ="post" action="simpan.php">
<div class="container ml-5">
<h3 class="text-center mt-3 mb-2">DATA PENJUALAN</h3>
<div class="form-group">
    <label for="">Minggu Penjualan :</label>
    <select name="minggu" id="minggu" class="form-control">
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
    </select>
</div>

<div class="form-group">
    <label for="">Bulan Penjualan :</label>
    <select name="bulan" id="bulan" class="form-control">
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desembar</option>
    </select>
</div>

<div class="form-group">
    <label for="">Tahun Penjualan :</label>
    <input type="year"  class="form-control" name="tahun" id="tahun">
</div>

<div class="form-group">
    <label for="">Jumlah Penjualan :</label>
    <input type="text"  class="form-control" name="jumlah" id="jumlah" size="4" maxlength="6">
</div>
<button type="submit" name="submit" id="submit" class ="btn btn-sm btn-primary">Simpan</button>
<a href="index.php" class="btn btn-sm btn-danger">Kembali</a>
<br>
<br>
</form>
<footer>
<div class="copyright text-center bg-light font-weight-bold p-2" >
  <p>Developed by WahyuOzora copyright <i class="far fa-copyright"></i> 2020</p>
  </div>
  </footer>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

