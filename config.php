<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'nilai2';
$con = mysqli_connect($host, $userdb, $passdb, $db );

if(mysqli_connect_error()){
    echo "kesalan koneksi;"  . mysqli_connect_error();
    exit();
}