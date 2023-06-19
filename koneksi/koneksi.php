<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "db_simperpus";

//membuat koneksi
$koneksi = mysqli_connect($server, $username, $password, $database);

//cek koneksi
if( !$koneksi ){
    die("Ada masalah koneksi ke database: " . mysqli_connect_error());
}


?>