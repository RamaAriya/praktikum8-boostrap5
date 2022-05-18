<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_formulirsiswa");

if(!$koneksi){
    die("connection failed : " . mysqli_connect_error()); //msg eror
}

?>