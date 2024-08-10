<?php
$servername = "localhost";
$database = "db_quiziz";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if($koneksi){
    echo 'Berhasil Terkoneksi';
}else{
    echo 'gagal terkoneksi';
}

?>