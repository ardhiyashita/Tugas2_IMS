<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_movie";
    
    $connect = new mysqli($servername, $username, $password, $dbname);

    if ($connect->connect_error){
        die("Koneksi gagal : " . $connect->connect_error);
    }
