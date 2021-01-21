<?php  

    include "koneksi.php";


    session_start();
    if (!isset($_SESSION["login"])) {

    echo "
        <script>
            document.location.href='login.php';
        </script>
    ";

    exit;
}




    extract($_GET);
    extract($_POST);



    if (isset ($_POST['submit'])) {

        $minggu = htmlspecialchars($_POST['minggu']);
        $bulan =  htmlspecialchars( $_POST['bulan']);
        $tahun =  htmlspecialchars( $_POST['tahun']);
        $jumlah =  htmlspecialchars($_POST['jumlah']);

        $query = " INSERT INTO penjualan (minggu, bulan, tahun, jumlah) 
                    VALUES
                    ('$minggu', '$bulan', '$tahun', '$jumlah' )  ";
        $result = mysqli_query($koneksi, $query);

        

        if(!$result) {

            echo "

                <script>
                alert('Data Gagal Ditambah');
                document.location.href='input.php';
                </script>

            ";

        } else {
        
            echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    document.location.href='data_penjualan.php';
                </script>
            
            ";

        }



    } 



?>