<?php

error_reporting(0);
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Penjualan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Texturina:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
    <link rel="stylesheet" type ="text/css" href="fontawesome-free/css/all.min.css">
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
    <br><br>
    <div class="container mt-5">
    <div class="judul">
        <h2>DATA PENJUALAN SUATU PABRIK </h2>

    <div class="container-show-data">

        <div class="tombolll">
            <a href="input.php">+ Tambah Data</a>
        <a href="index.php" class="ml-4">Kembali ke Halaman Utama</a>
        </div>
        <br>
        <!--Div Awal tabel;-->
        <div class="tabel">

            <table border="1" cellspacing="0" cellpadding="10">

                <thead>

                    <tr>
                        <td align="center">No</td>
                        <td align="center">Time Series</td>
                        <td align="center">Penjualan</td>
                        <td align="center">X</td>
                        <td align="center"> Y</td>
                        <td align="center">XX</td>
                        <td align="center">XY</td>
                        <td align="center">Aksi</td>
                    </tr>

                </thead>






                <?php

                //Penjumlahan 
                $total_x = 0;
                $total_y = 0;
                $total_xx = 0;
                $total_xy = 0;
                $x = -1;

                //end penjumlahan


                //Start Query Ambil Data
                $query = " SELECT * FROM penjualan ORDER BY id_jual ASC  ";

                $result = mysqli_query($koneksi, $query);



                while ($row = mysqli_fetch_array($result)) {
                    //operasi matematic utuk perhitungan data

                    $nomor++;
                    $x++;
                    $minggu = $row[1];
                    $bulan = $row[2];
                    $tahun = $row[3];
                    $jumlah = $row[4];
                    $xx = $x * $x;
                    $xy = $x * $jumlah;
                    $total_x = $total_x + $x;
                    $total_y = $total_y + $jumlah;
                    $total_xx = $total_xx + $xx;
                    $total_xy = $total_xy + $xy;

                ?>

                    <!--End Pembuka Kurung Kurawal Php-->

                    <tbody>

                        <tr>
                            <!--Awal Body Untuk data -->

                            <td align="center"> <?php echo $nomor; ?> </td>
                            <td align="center"> <?php echo "Minggu Ke- $minggu Bulan Ke- $bulan $tahun"; ?> </td>
                            <td align="center"> <?php echo $jumlah; ?> </td>
                            <td align="center"> <?php echo $x; ?> </td>
                            <td align="center"> <?php echo $jumlah; ?> </td>
                            <td align="center"> <?php echo $xx; ?> </td>
                            <td align="center"> <?php echo $xy; ?> </td>
                            <td align="center">

                                <a class="edit" href="edit.php?id=<?php echo $row['id_jual']; ?>"><div class="btn btn-primary btn-sm" 
                                data-toggle="tooltip" title="edit"><i class ="fas fa-edit btn-btn-primary"></i></div></a> |

                                <a class="hapus" href="hapus.php?id=<?php echo $row['id_jual']; ?>"><div class="btn btn-danger btn-sm" data-toggle="tooltip" title="hapus"><i class ="fas fa-trash btn-btn-primary"></i></div></a>
                            </td>

                        </tr>






                    <?php
                    // end query
                }
                    ?>

                    <tr>

                        <!--Awal Body Untuk Jumlah Data-->

                        <td colspan="3" align="center">Jumlah</td>
                        <td align="center"><?php echo "$total_x"; ?></td>
                        <td align="center"><?php echo "$total_y"; ?></td>
                        <td align="center"><?php echo "$total_xx"; ?></td>
                        <td align="center"><?php echo "$total_xy"; ?></td>
                        <td align="center"></td>

                    </tr>
                    <?php

                    //Operasi Matematic Untuk Menghitung Rata rata dari total x dan y
                    $ratarata_x = $total_x / $nomor;
                    $ratarata_y = $total_y / $nomor;

                    ?>

                    <tr>

                        <!--Awal Body Untuk Rata - rata Data-->

                        <td colspan="3" align="center">Rata - rata</td>
                        <td align="center"><?php echo "$ratarata_x"; ?></td>
                        <td align="center"><?php echo "$ratarata_y"; ?></td>
                        <td colspan="3"></td>
                    </tr>


                    </tbody>




            </table>

            <!--Rumus Regresi Linear-->

            <?php

            $b1 = ($total_xy - (($total_x * $total_y) / $nomor)) / ($total_xx - (($total_x * $total_x) / $nomor));
            $bO  = ($total_y / $nomor) - $b1 * ($total_x / $nomor);

            ?>


        </div>
        <!--Div Akhir Dari Tabel-->

        <div class="rumus">
            <br>
            <tr>
                <td class="tdd">Rumus Regresi Linear :</td> <br>
                <td class="tdd" colspan="7"><?php echo "y = $bO + $b1 X"; ?></td>
            </tr>
        </div>

        <br>

        <?php 
        if (isset($_POST["prediksi"])) {

            $list_pilihan = $_POST["list_pilihan"];

            $x = $x + $list_pilihan;
            $y = $bO + $b1 * $x;

            echo "<script>alert('Prediksi Penjualan untuk $list_pilihan minggu berikutnya adalah $y')</script>";
            echo "<b>Prediksi Penjualan untuk $list_pilihan minggu berikutnya adalah $y<b>";
        } 
    ?>
    </div>
    </div>

    <footer>
    <div class="copyright text-center bg-light font-weight-bold p-2" >
  <p>Developed by WahyuOzora copyright <i class="far fa-copyright"></i> 2020</p>
   </div>
   </footer>



    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>

</html>