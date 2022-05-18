<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "db_formulirsiswa";
//membuat tabel
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if(!$conn){
    die("connection failed : " . mysqli_connect_error()); //msg eror

}
//pembuatan tabel
$querysql = "CREATE TABLE db_formulirsiswa(
    jenis_pendaftaran VARCHAR(50) NOT NULL,
    tanggal_masuk DATE NOT NULL,
    nis VARCHAR(50) NOT NULL,
    nomor_peserta VARCHAR(200) NOT NULL,
    paud VARCHAR(50) NOT NULL,
    tk VARCHAR(50) NOT NULL,
    no_seriskhun VARCHAR(100) NOT NULL,
    no_seriijazah VARCHAR(100) NOT NULL,
    hobi VARCHAR(100) NOT NULL,
    cita VARCHAR(100) NOT NULL,
    nama  VARCHAR(200) NOT NULL,
    jenis_kelamin VARCHAR(50) NOT NULL,
    nisn VARCHAR(100) PRIMARY KEY,
    nik VARCHAR(100) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(20) NOT NULL,
    berkebutuhan_khusus VARCHAR(50),
    alamat_jalan VARCHAR(100),
    rt VARCHAR(50) NOT NULL,
    rw VARCHAR(50) NOT NULL,
    nama_dusun VARCHAR(100) NOT NULL,
    nama_desa VARCHAR(100) NOT NULL,
    kecamatan VARCHAR(50) NOT NULL,
    kode_pos VARCHAR(50) NOT NULL,
    tempat_tinggal VARCHAR(20) NOT NULL,
    moda_transportasi VARCHAR(50) NOT NULL,
    no_hp VARCHAR(50) NOT NULL,
    no_telepon VARCHAR(100) NOT NULL,
    email_pribadi VARCHAR(50) NOT NULL,
    penerima_bantuan VARCHAR(50) NOT NULL,
    no_bantuan VARCHAR(50) NOT NULL,
    kewarganegaraan VARCHAR(50) NOT NULL,
    nama_ayah VARCHAR (100) NOT NULL,
    tahun_ayah VARCHAR (50) NOT NULL,
    pendidikan_ayah VARCHAR (100) NOT NULL,
    pekerjaan_ayah VARCHAR (100) NOT NULL,
    penghasilan_ayah VARCHAR (100) NOT NULL,
    berkebutuhan_khusus_ayah VARCHAR (100) NOT NULL,
    nama_ibu VARCHAR (100) NOT NULL,
    tahun_ibu VARCHAR (50) NOT NULL,
    pendidikan_ibu VARCHAR (100) NOT NULL,
    pekerjaan_ibu VARCHAR (100) NOT NULL,
    penghasilan_ibu VARCHAR (100) NOT NULL,
    berkebutuhan_khusus_ibu VARCHAR (100) NOT NULL
    )";
//pengecekan
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>