<?php
    //koneksi ke databse mysqli

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "dbforecasting";

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if (!$koneksi) 
    {

        die("Koneksi Terputus");

    } 

?>