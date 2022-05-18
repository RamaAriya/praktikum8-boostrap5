<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username= "root";
$password = "";


// Membuat database
//create koneksi
$conn = mysqli_connect($servername, $username, $password);

//check koneksi
if(!$conn){
    die("Connection failed : " . mysqli_connect_error()); //akan menampilkan eror jika tidak konek

}
//create db
$sql = "CREATE DATABASE db_formulirsiswa";
//cek keberhasilan pembuatan db
if(mysqli_query($conn, $sql)){
    echo "database berhasil dibuat"; //msg success
}else {
    echo "error creating database : " . mysqli_error($conn); //msg eror
}
//menutup koneksi
mysqli_close($conn);

?>