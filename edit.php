<?php

//include koneksi
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

    $id = $_GET["id"];

$queryambil = "SELECT * FROM penjualan WHERE id_jual =$id ";

$resultambil = mysqli_query($koneksi, $queryambil);

    while ($rowambil = mysqli_fetch_array($resultambil)) {

    $id = htmlspecialchars($rowambil["id_jual"]);
    $minggu = htmlspecialchars($rowambil["minggu"]);
    $bulan = htmlspecialchars($rowambil["bulan"]);
    $tahun = htmlspecialchars($rowambil["tahun"]);
    $jumlahpenjualan = htmlspecialchars($rowambil["jumlah"]);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type ="text/css" href="style.css">
        <link rel="stylesheet" type ="text/css" href="fontawesome-free/css/all.min.css">

        <title> Edit Data </title>
    </head>

    <body>
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

    <form method ="post" action="method_edit.php" enctype="multipart/form-data">
<div class="container ml-5">
<h3 class="text-center mt-3 mb-2">EDIT DATA PENJUALAN</h3>

<div class="form-group">
<input type="hidden" name="id_jual" value=" <?php echo $rowambil["id_jual"]; ?> ">

</div>

<div class="form-group">
    <label for="">Minggu Penjualan :</label>
    <select name="minggu" id="minggu" class="form-control">
    <?php  
        if ($rowambil["minggu"] == "1")  echo "<option value='1' selected>I</option>";
            else echo "<option value='1'>I</option>";
        if ($rowambil["minggu"] == "2")  echo "<option value='2' selected>II</option>";
            else echo "<option value='2'>II</option>";
        if ($rowambil["minggu"] == "3")  echo "<option value='3' selected>III</option>";
            else echo "<option value='3'>III</option>";
        if ($rowambil["minggu"] == "4")  echo "<option value='4' selected>IV</option>";
            else echo "<option value='4'>IV</option>";
        if ($rowambil["minggu"] == "5")  echo "<option value='5' selected>V</option>";
            else echo "<option value='5'>V</option>";
        ?>
    </select>
</div>

<div class="form-group">
    <label for="">Bulan Penjualan :</label>
    <select name="bulan" id="bulan" class="form-control">
    <?php  
        if($rowambil["bulan"] == "01") echo " <option value='01' selected > Januari</option> ";
            else echo "<option value='01' > Januari</option>";
        if($rowambil["bulan"] == "02") echo" <option value='02' selected>Februari</option>";
            else echo "<option value='02' > Februari</option>";
        if ($rowambil["bulan"] == "03") echo " <option value='03' selected>Maret</option>";
            else echo "<option value='03' >Maret</option>";
        if ($rowambil["bulan"] == "04") echo " <option value='04' selected>April</option>";
            else echo "<option value='04' >April</option>";
        if ($rowambil["bulan"] == "05") echo " <option value='05' selected>Mei</option>";
            else echo "<option value='06' >Mei</option>";
        if ($rowambil["bulan"] == "06") echo " <option value='06' selected>Juni</option>";
            else echo "<option value='06' >Juni</option>";
        if ($rowambil["bulan"] == "07") echo " <option value='07' selected>Juli</option>";
            else echo "<option value='07' >Juli</option>";
        if ($rowambil["bulan"] == "08") echo " <option value='08' selected>Agustus</option>";
            else echo "<option value='08' >Agustus</option>";
        if ($rowambil["bulan"] == "09") echo " <option value='09' selected>September</option>";
            else echo "<option value='09' >September</option>";
        if ($rowambil["bulan"] == "10") echo " <option value='10' selected>Oktober</option>";
            else echo "<option value='10' >Oktober</option>";
        if ($rowambil["bulan"] == "11") echo " <option value='11' selected>November</option>";
            else echo "<option value='11' >November</option>";
        if ($rowambil["bulan"] == "12") echo " <option value='12' selected>Desember</option>";
            else echo "<option value='12' >Desember</option>";
     ?>
    </select>
</div>

<div class="form-group">
    <label for="">Tahun Penjualan :</label>
    <input type="year"  class="form-control" name="tahun" id="tahun" value="<?php echo $rowambil["tahun"]; ?>">
</div>

<div class="form-group">
    <label for="">Jumlah Penjualan :</label>
    <input type="text"  class="form-control" name="jumlah" id="jumlah" size="4" maxlength="6" value="<?php echo $rowambil["jumlah"]; ?>">
</div>
<button type="submit" name="submitedit" id="submitedit" class ="btn btn-sm btn-primary">Simpan</button>
<a href="data_penjualan.php" class="btn btn-sm btn-danger">Kembali</a>
<br>
<br>
</form>    
<?php } ?>

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