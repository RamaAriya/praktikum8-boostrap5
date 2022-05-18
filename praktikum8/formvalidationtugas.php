<!doctype html>
<html lang="en">
  <head>
    <title>FORM VALIDATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		.warning {color:#FF0000;}
	</style>
  </head>
  <body>
      <?php
      // Deklarasi Variabel
$error_jenis_pendaftaran="";
$error_tanggal_masuk="";
$error_nis="";
$error_nomor_peserta="";
$error_paud="";
$error_tk="";
$error_no_seriskhun="";
$error_no_seriijazah="";
$error_hobi="";
$error_cita="";
$error_nama="";
$error_jenis_kelamin="";
$error_nisn="";
$error_nik="";
$error_tempat_lahir="";
$error_tanggal_lahir="";
$error_agama="";
$error_berkebutuhan_khusus="";
$error_alamat_jalan="";
$error_rt="";
$error_rw="";
$error_nama_dusun="";
$error_nama_desa="";
$error_kecamatan="";
$error_kode_pos="";
$error_tempat_tinggal="";
$error_moda_transportasi="";
$error_no_hp="";
$error_no_telepon="";
$error_email_pribadi="";
$error_penerima_bantuan="";
$error_no_bantuan="";
$error_kewarganegaraan="";
$error_nama_ayah="";
$error_tahun_ayah="";
$error_pendidikan_ayah="";
$error_pekerjaan_ayah="";
$error_penghasilan_ayah="";
$error_berkebutuhan_khusus_ayah="";
$error_nama_ibu="";
$error_tahun_ibu="";
$error_pendidikan_ibu="";
$error_pekerjaan_ibu="";
$error_penghasilan_ibu="";
$error_berkebutuhan_khusus_ibu="";
$error_alasan="";

$jenis_pendaftaran="";
$tanggal_masuk="";
$nis="";
$nomor_peserta="";
$paud="";
$tk="";
$no_seriskhun="";
$no_seriijazah="";
$hobi="";
$cita="";
$nama="";
$jenis_kelamin="";
$nisn="";
$nik="";
$tempat_lahir="";
$tanggal_lahir="";
$agama="";
$berkebutuhan_khusus="";
$alamat_jalan="";
$rt="";
$rw="";
$nama_dusun="";
$nama_desa="";
$kecamatan="";
$kode_pos="";
$tempat_tinggal="";
$moda_transportasi="";
$no_hp="";
$no_telepon="";
$email_pribadi="";
$penerima_bantuan="";
$no_bantuan="";
$kewarganegaraan="";
$nama_ayah="";
$tahun_ayah="";
$pendidikan_ayah="";
$pekerjaan_ayah="";
$penghasilan_ayah="";
$berkebutuhan_khusus_ayah="";
$nama_ibu="";
$tahun_ibu="";
$pendidikan_ibu="";
$pekerjaan_ibu="";
$penghasilan_ibu="";
$berkebutuhan_khusus_ibu="";

$pesan_sukses="";

// Jika method POST dijalankan
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//Jenis Pendaftaran
	if(empty($_POST["jenis_pendaftaran"])){
		$error_jenis_pendaftaran="Jenis Pendaftaran tidak boleh kosong";
	}
	else{
		$jenis_pendaftaran=cek_input($_POST["jenis_pendaftaran"]);
		if($jenis_pendaftaran == "01"){
			$jenis_pendaftaran="Siswa Baru";	
		}
		elseif($jenis_pendaftaran == "02"){
			$jenis_pendaftaran="Pindahan";	
		}
		else{
			$error_jenis_pendaftaran="Masukkan pilihan jenis pendaftaran dengan benar";
		}
	}

	// Tanggal Masuk Sekolah
	if(empty($_POST["tanggal_masuk"])){
		$error_tanggal_masuk="Tanggal Masuk Sekolah tidak boleh kosong";
	}
	else{
		$tanggal_masuk=cek_input($_POST["tanggal_masuk"]);
		$tanggal_masuk=date('Y-m-d', strtotime($tanggal_masuk));
	}

	// NIS
	if(empty($_POST["nis"])){
		$error_nis="NIS tidak boleh kosong";
	}
	else{
		$nis=cek_input($_POST["nis"]);
		if(!is_numeric($nis)){
			$error_nis="NIS hanya boleh berisi angka";
		}
		elseif (strlen($nis) != 10) {
			$error_nis="Panjang NIK harus 10 digit";
		}
	}

	// Nomer Peserta Ujian
	if(empty($_POST["nomor_peserta"])){
		$error_nomor_peserta="Nomor Peserta Ujian tidak boleh kosong";
	}
	else{
		$nomor_peserta=cek_input($_POST["nomor_peserta"]);
		if(!is_numeric($nomor_peserta)){
			$error_nomor_peserta="Nomor Peserta Ujian hanya boleh berisi angka";
		}
		elseif (strlen($nomor_peserta) != 8) {
			$error_nomor_peserta="Panjang Nomer Peserta Ujian harus 8 digit";
		}
	}

	// Pernah PAUD
	if(empty($_POST["paud"])){
		$error_paud="Pilihan tidak boleh kosong";
	}
	else{
		$paud=cek_input($_POST["paud"]);
	}

	// Pernah TK
	if(empty($_POST["tk"])){
		$error_tk="Pilihan tidak boleh kosong";
	}
	else{
		$tk=cek_input($_POST["tk"]);
	}

	// SKHUN
	if(empty($_POST["no_seriskhun"])){
		$error_no_seriskhun="Nomor Seri SKHUN tidak boleh kosong";
	}
	else{
		$skhun=cek_input($_POST["no_seriskhun"]);
		if(!is_numeric($no_seriskhun)){
			$error_no_seriskhun="Nomor Seri SKHUN hanya boleh berisi angka";
		}
		elseif (strlen($no_seriskhun) != 7) {
			$error_no_seriskhun="Panjang Nomor Seri SKHUN harus 7 digit";
		}
	}

	// Ijazah
	if(empty($_POST["no_seriijazah"])){
		$error_no_seriijazah="Nomer Seri Ijazah tidak boleh kosong";
	}
	else{
		$ijazah=cek_input($_POST["no_seriijazah"]);
		if(!is_numeric($no_seriijazah)){
			$error_no_seriijazah="Nomer Seri Ijazah hanya boleh berisi angka";
		}
		elseif (strlen($no_seriijazah) != 7) {
			$error_no_seriijazah="Panjang Nomer Seri Ijazah harus 7 digit";
		}
	}

	// Hobi
	if(empty($_POST["hobi"])){
		$error_hobi="Hobi tidak boleh kosong";
	}
	else{
		$hobi=cek_input($_POST["hobi"]);
		if($hobi == "A"){
			$hobi="Olah Raga";	
		}
		elseif($hobi == "B"){
			$hobi="Kesenian";	
		}
		elseif($hobi == "C"){
			$hobi="Membaca";	
		}
		elseif($hobi == "D"){
			$hobi="Menulis";	
		}
		elseif($hobi == "E"){
			$hobi="Travelling";	
		}
		elseif($hobi == "F"){
			$hobi="Lainnya";	
		}
		else{
			$error_hobi="Masukkan pilihan hobi dengan benar";
		}
	}

	// Cita-cita
	if(empty($_POST["cita"])){
		$error_cita="Cita-cita tidak boleh kosong";
	}
	else{
		$citacita=cek_input($_POST["cita"]);
		if($cita == "A"){
			$cita="PNS";	
		}
		elseif($cita == "B"){
			$cita="TNI/POLRI";	
		}
		elseif($cita == "C"){
			$cita="Guru/Dosen";	
		}
		elseif($cita == "D"){
			$cita="Dokter";	
		}
		elseif($cita == "E"){
			$cita="Politikus";	
		}
		elseif($cita == "F"){
			$cita="Wiraswasta";	
		}
		elseif($cita == "G"){
			$cita="Seni/Lukis/Artis/Sejenis";	
		}
		elseif($cita == "H"){
			$cita="Lainnya";	
		}
		else{
			$error_cita="Masukkan pilihan cita-cita dengan benar";
		}
	}

	// Nama Lengkap
	if(empty($_POST["nama"])){
		$error_nama="Nama tidak boleh kosong";
	}
	else{
		$nama=cek_input($_POST["nama"]);
		if(!preg_match("/^[a-zA-z ]*$/", $nama)){
			$error_nama="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	// Jenis Kelamin
	if(empty($_POST["jenis_kelamin"])){
		$error_jenis_kelamin="Pilihan tidak boleh kosong";
	}
	else{
		$jenis_kelamin=cek_input($_POST["jenis_kelamin"]);
	}

	// NISN
	if(empty($_POST["nisn"])){
		$error_nisn="NISN tidak boleh kosong";
	}
	else{
		$nisn=cek_input($_POST["nisn"]);
		if(!is_numeric($nisn)){
			$error_nisn="NISN hanya boleh berisi angka";
		}
		elseif (strlen($nisn) != 8) {
			$error_nisn="Panjang NISN harus 8 digit";
		}
	}

	// NIK
	if(empty($_POST["nik"])){
		$error_nik="NIK tidak boleh kosong";
	}
	else{
		$nik=cek_input($_POST["nik"]);
		if(!is_numeric($nik)){
			$error_nik="NIK hanya boleh berisi angka";
		}
		elseif (strlen($nik) != 16) {
			$error_nik="Panjang NIK harus 16 digit";
		}
	}

	// Tempat Lahir
	if(empty($_POST["tempat_lahir"])){
		$error_tempat_lahir="Tempat lahir tidak boleh kosong";
	}
	else{
		$tempat_lahir=cek_input($_POST["tempat_lahir"]);
		if(!preg_match("/^[a-zA-z ]*$/", $tempat_lahir)){
			$error_tempat_lahir="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	// Tanggal Lahir
	if(empty($_POST["tanggal_lahir"])){
		$error_tanggal_lahir="Tanggal Lahir tidak boleh kosong";
	}
	else{
		$tanggal_lahir=cek_input($_POST["tanggal_lahir"]);
		$tanggal_lahir=date('Y-m-d', strtotime($tanggal_lahir));
	}

	// Agama
	if(empty($_POST["agama"])){
		$error_agama="Agama tidak boleh kosong";
	}
	else{
		$agama=cek_input($_POST["agama"]);
		if($agama == "01"){
			$agama="Islam";	
		}
		elseif($agama == "02"){
			$agama="Kristen/Protestan";	
		}
		elseif($agama == "03"){
			$agama="Katholik";	
		}
		elseif($agama == "04"){
			$agama="Hindu";	
		}
		elseif($agama == "05"){
			$agama="Buddha";	
		}
		elseif($agama == "06"){
			$agama="Khong Hu Chu";	
		}
		elseif($agama == "09"){
			$agama="Lainnya";	
		}
		else{
			$error_agama="Masukkan pilihan agama dengan benar";
		}
	}

	// Berkebutuhan Khusus
	if(empty($_POST["berkebutuhan_khusus"])){
		$error_berkebutuhan_khusus="Berkebutuhan Khusus tidak boleh kosong";
	}
	else{
		$berkebutuhan_khusus=cek_input($_POST["berkebutuhan_khusus"]);
		if($berkebutuhan_khusus == "01"){
			$berkebutuhan_khusus="Tidak";	
		}
		elseif($berkebutuhan_khusus == "02"){
			$berkebutuhan_khusus="Netra (A)";	
		}
		elseif($berkebutuhan_khusus == "03"){
			$berkebutuhan_khusus="Rungu (B)";	
		}
		elseif($berkebutuhan_khusus == "04"){
			$berkebutuhan_khusus="Grahita Ringan (C)";	
		}
		elseif($berkebutuhan_khusus == "05"){
			$berkebutuhan_khusus="Grahita Sedang (C1)";	
		}
		elseif($berkebutuhan_khusus == "06"){
			$berkebutuhan_khusus="Daksa Ringan (D)";	
		}
		elseif($berkebutuhan_khusus == "07"){
			$berkebutuhan_khusus="Daksa Sedang (D1)";	
		}
		elseif($berkebutuhan_khusus == "08"){
			$berkebutuhan_khusus="Laras (E)";	
		}
		elseif($berkebutuhan_khusus == "09"){
			$berkebutuhan_khusus="Wicara (F)";	
		}
		elseif($berkebutuhan_khusus == "10"){
			$berkebutuhan_khusus="Tuna Ganda (B)";	
		}
		elseif($berkebutuhan_khusus == "11"){
			$berkebutuhan_khusus="Hiper Aktif (H)";	
		}
		elseif($berkebutuhan_khusus == "12"){
			$berkebutuhan_khusus="Cerdas Istimewa (i)";	
		}
		elseif($berkebutuhan_khusus == "13"){
			$berkebutuhan_khusus="Bakat Istimewa (J)";	
		}
		elseif($berkebutuhan_khusus == "14"){
			$berkebutuhan_khusus="Kesulitan Belajar (K)";	
		}
		elseif($berkebutuhan_khusus == "15"){
			$berkebutuhan_khusus="Narkoba (N)";	
		}
		elseif($berkebutuhan_khusus == "16"){
			$berkebutuhan_khusus="Indigo (O)";	
		}
		elseif($berkebutuhan_khusus == "17"){
			$berkebutuhan_khusus="Down Sindrome (P)";	
		}
		elseif($berkebutuhan_khusus == "18"){
			$berkebutuhan_khusus="Autis (Q)";	
		}
		else{
			$error_berkebutuhan_khusus="Masukkan pilihan berkebutuhan khusus dengan benar";
		}
	}

	// Alamat Jalan
	if(empty($_POST["alamat_jalan"])){
		$error_alamat_jalan="Alamat Jalan tidak boleh kosong";
	}
	else{
		$alamat_jalan=cek_input($_POST["alamat_jalan"]);
	}

	// RT
	if(empty($_POST["rt"])){
		$error_rt="RT tidak boleh kosong";
	}
	else{
		$rt=cek_input($_POST["rt"]);
		if(!is_numeric($rt)){
			$error_rt="RT hanya boleh berisi angka";
		}
	}

	// RW
	if(empty($_POST["rw"])){
		$error_rw="RW tidak boleh kosong";
	}
	else{
		$rw=cek_input($_POST["rw"]);
		if(!is_numeric($rw)){
			$error_rw="RW hanya boleh berisi angka";
		}
	}

	// Dusun
	if(empty($_POST["nama_dusun"])){
		$error_nama_dusun="Dusun tidak boleh kosong";
	}
	else{
		$nama_dusun=cek_input($_POST["nama_dusun"]);
		if(!preg_match("/^[a-zA-z ]*$/", $nama_dusun)){
			$error_nama_dusun="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}	

	// Desa/Kelurahan
	if(empty($_POST["nama_desa"])){
		$error_nama_desa="Desa/Kelurahan tidak boleh kosong";
	}
	else{
		$nama_desa=cek_input($_POST["nama_desa"]);
		if(!preg_match("/^[a-zA-z ]*$/", $nama_desa)){
			$error_nama_desa="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	// Kecamatan
	if(empty($_POST["kecamatan"])){
		$error_kecamatan="Kecamatan tidak boleh kosong";
	}
	else{
		$kecamatan=cek_input($_POST["kecamatan"]);
		if(!preg_match("/^[a-zA-z ]*$/", $kecamatan)){
			$error_kecamatan="Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	// Kode Pos
	if(empty($_POST["kode_pos"])){
		$error_kode_pos="Kode Pos tidak boleh kosong";
	}
	else{
		$kode_pos=cek_input($_POST["kode_pos"]);
		if(!is_numeric($kode_pos)){
			$error_kode_pos="Kode Pos hanya boleh berisi angka";
		}
	}

	// Tempat Tinggal
	if(empty($_POST["tempat_tinggal"])){
		$error_tempat_tinggal="Tempat Tinggal tidak boleh kosong";
	}
	else{
		$tempat_tinggal=cek_input($_POST["tempat_tinggal"]);
		if($tempat_tinggal == "1"){
			$tempat_tinggal="Bersama Orang Tua";	
		}
		elseif($tempat_tinggal == "2"){
			$tempat_tinggal="Wali";	
		}
		elseif($tempat_tinggal == "3"){
			$tempat_tinggal="Kos";	
		}
		elseif($tempat_tinggal == "4"){
			$tempat_tinggal="Asrama";	
		}
		elseif($tempat_tinggal == "5"){
			$tempat_tinggal="Panti Asuhan";	
		}
		elseif($tempat_tinggal == "9"){
			$tempat_tinggal="Lainnya";	
		}
		else{
			$error_tempat_tinggal="Masukkan pilihan tempat tinggal dengan benar";
		}
	}

	// Moda Transportasi
	if(empty($_POST["moda_transportasi"])){
		$error_moda_transportasi="Moda Transportasi tidak boleh kosong";
	}
	else{
		$moda_transportasi=cek_input($_POST["moda_transportasi"]);
		if($moda_transportasi == "01"){
			$moda_transportasi="Jalan Kaki";	
		}
		elseif($moda_transportasi == "02"){
			$moda_transportasi="Kendaraan Pribadi";	
		}
		elseif($moda_transportasi == "03"){
			$moda_transportasi="Kendaraan Umum/Angkot/Pete-pete";	
		}
		elseif($moda_transportasi == "04"){
			$moda_transportasi="Jemputan Sekolah";	
		}
		elseif($moda_transportasi == "05"){
			$moda_transportasi="Kereta Api";	
		}
		elseif($moda_transportasi == "06"){
			$moda_transportasi="Ojek";	
		}
		elseif($moda_transportasi == "07"){
			$moda_transportasi="Andong/Bendi/Sado/Dokar/Delman/Becak";	
		}
		elseif($moda_transportasi == "08"){
			$moda_transportasi="Perahu Penyeberangan/Rakit/Getek";	
		}
		elseif($moda_transportasi == "09"){
			$moda_transportasi="Lainnya";	
		}
		else{
			$error_moda_transportasi="Masukkan pilihan kendaraan dengan benar";
		}
	}

	// No. HP
	if(empty($_POST["no_hp"])){
		$error_no_hp="No. HP tidak boleh kosong";
	}
	else{
		$no_hp=cek_input($_POST["no_hp"]);
		if(!is_numeric($no_hp)){
			$error_no_hp="Nomor HP hanya boleh angka";
		}
	}

	// Email
	if(empty($_POST["email_pribadi"])){
		$error_email_pribadi="Email tidak boleh kosong";
	}
	else{
		$email_pribadi=cek_input($_POST["email_pribadi"]);
		if(!filter_var($email_pribadi, FILTER_VALIDATE_EMAIL)){
			$error_email_pribadi="Format Email Invalid";
		}
	}

	// No. Telepon
	if(empty($_POST["no_telepon"])){
		$error_no_telepon="Telp tidak boleh kosong";
	}
	else{
		$telp=cek_input($_POST["no_telepon"]);
		if(!is_numeric($no_telepon)){
			$error_no_telepon="Nomor Telepon hanya boleh angka";
		}
	}

	// Penerima KPS/PKH/KIP
	if(empty($_POST["penerima_bantuan"])){
		$error_penerima_bantuan="Pilihan tidak boleh kosong";
	}
	else{
		$penerima_bantuan=cek_input($_POST["penerima_bantuan"]);
	}

	// Nomor KPS/KKS/PKH/KIP
	$no_bantuan=cek_input($_POST["no_bantuan"]);
	if(!is_numeric($no_bantuan)){
		$error_no_bantuan="Nomor KPS/KKS/PKH/KIP hanya boleh angka";
	}

	// Kewarganegaraan
	if(empty($_POST["kewarganegaraan"])){
		$error_kewarganegaraan="Pilihan tidak boleh kosong";
	}
	else{
		$kewarganegaraan=cek_input($_POST["kewarganegaraan"]);
	}	




	// Jika tidak ada error maka data akan disimpan
	if ($error_jenis_pendaftaran =="" && $error_tanggal_masuk=="" && $error_nis =="" && $error_nomer_peserta=="" && $error_paud=="" && $error_tk=="" && $error_no_seriskhun=="" && $error_no_seriijazah=="" && $error_hobi=="" && $error_cita=="" && $error_nama=="" && $error_jenis_kelamin=="" && $error_nisn=="" && $error_nik=="" && $error_tempat_lahir=="" && $error_tanggal_lahir=="" && $error_agama=="" && $error_berkebutuhan_khusus=="" && $error_alamat_jalan=="" && $error_rt=="" && $error_rw=="" && $error_nama_dusun=="" && $error_nama_desa=="" && $error_kecamatan=="" && $error_kode_pos=="" && $error_tempat_tinggal=="" && $error_moda_transportasi=="" && $error_no_hp=="" && $error_email_pribadi=="" && $error_no_telepon=="" && $error_penerima_bantuan=="" && $error_no_bantuan=="" && $error_kewarganegaraan=="" && $error_alasan=="") {
	
		include 'koneksi.php';

		// Memasukkan data ke tabel daftar
		$sql="INSERT INTO daftar VALUES ('$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomer_peserta', '$paud', '$tk', '$no_seriskhun', '$no_seriijazah', '$hobi', '$cita', '$nama', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$nama_dusun', '$nama_desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$moda_transportasi', '$no_hp', '$no_telepon', '$email_pribadi', '$penerima_bantuan', '$no_bantuan', '$kewarganegaraan', '$alasan')";
		mysqli_query($koneksi, $sql);

		$pesan_sukses="Berhasil simpan data";
	}
	else{
		$pesan_sukses="Gagal simpan data";
	}
}
	
function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

      ?>
   <!-- class untuk menampilkan isi formulir -->
   <div class="container">
   <div class="col-md-9">
		<div class="card">
			<h2 class="alert alert-primary text-center mt-3">
				FORMULIR PENDAFTARAN PESERTA DIDIK BARU
			</h2>
			<div class="card-body">
				<!-- Mengarahkan action ke halaman itu sendiri -->
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group row">
						<label for="jenis_pendaftaran" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
						<div class="col-sm-9">
							<input name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran !="" ? "is_invalid" : ""); ?>" id="jenis_pendaftaran" placeholder="Pilih jenis pendaftaran" value="<?php echo $jenis_pendaftaran; ?>"><small>01=Siswa Baru, 02=Pindahan</small><span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="tanggal_masuk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
						<div class="col-sm-9">
							<input type="date" name="tanggal_masuk" class="form-control <?php echo ($error_tanggal_masuk !="" ? "is_invalid" : ""); ?>" id="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>"><span class="warning"><?php echo $error_tanggal_masuk; ?></span>
						</div>
					</div><br>									

					<div class="form-group row">
						<label for="nis" class="col-sm-3 col-form-label">NIS</label>
						<div class="col-sm-9">
							<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is_invalid" : ""); ?>" id="nis" placeholder="NIS" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="nomor_peserta" class="col-sm-3 col-form-label">Nomer Peserta Ujian</label>
						<div class="col-sm-9">
							<input type="text" name="nomor_peserta" class="form-control <?php echo ($error_nomor_peserta !="" ? "is_invalid" : ""); ?>" id="nomor_peserta" placeholder="Nomer Peserta Ujian" value="<?php echo $nomor_peserta; ?>"><span class="warning"><?php echo $error_nomor_peserta; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="paud" class="col-sm-3 col-form-label">Apakah Pernah PAUD?</label>
						<div class="col-sm-9">
							<input type="radio" name="paud" value="Ya">Ya
							<input type="radio" name="paud" value="Tidak">Tidak
							<span class="warning"><?php echo $error_paud; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="tk" class="col-sm-3 col-form-label">Apakah Pernah TK?</label>
						<div class="col-sm-9">
							<input type="radio" name="tk" value="Ya">Ya
							<input type="radio" name="tk" value="Tidak">Tidak
							<span class="warning"><?php echo $error_tk; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="no_seriskhun" class="col-sm-3 col-form-label">No. Seri SKHUN Sebelumnya</label>
						<div class="col-sm-9">
							<input type="text" name="no_seriskhun" class="form-control <?php echo ($no_seriskhun !="" ? "is_invalid" : ""); ?>" id="no_seriskhun" placeholder="No. Seri SKHUN Sebelumnya" value="<?php echo $no_seriskhun; ?>"><span class="warning"><?php echo $error_no_seriskhun; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="no_seriijazah" class="col-sm-3 col-form-label">No. Seri Ijazah Sebelumnya</label>
						<div class="col-sm-9">
							<input type="text" name="no_seriijazah" class="form-control <?php echo ($no_seriijazah !="" ? "is_invalid" : ""); ?>" id="no_seriijazah" placeholder="No. Seri Ijazah Sebelumnya" value="<?php echo $no_seriijazah; ?>"><span class="warning"><?php echo $error_no_seriijazah; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
						<div class="col-sm-9">
							<input type="text" name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is_invalid" : ""); ?>" id="hobi" placeholder="Hobi" value="<?php echo $hobi; ?>"><small>A=Olah Raga, B=Kesenian, C=Membaca, D=Menulis, E=Travelling, F=Lainnya</small><span class="warning"><?php echo $error_hobi; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="cita" class="col-sm-3 col-form-label">Cita-cita</label>
						<div class="col-sm-9">
							<input type="text" name="cita" class="form-control <?php echo ($error_cita !="" ? "is_invalid" : ""); ?>" id="cita" placeholder="Cita-cita" value="<?php echo $cita; ?>"><small>A=PNS, B=TNI/POLRI, C=Guru/Dosen, D=Dokter, E=Politikus, F=Wiraswasta, G=Seni/Lukis/Artis/Sejenis, H=Lainnya</small><span class="warning"><?php echo $error_cita; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is_invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
							<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
							<span class="warning"><?php echo $error_jenis_kelamin; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="nisn" class="col-sm-3 col-form-label">NISN</label>
						<div class="col-sm-9">
							<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is_invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="nik" class="col-sm-3 col-form-label">NIK</label>
						<div class="col-sm-9">
							<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is_invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is_invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="date" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir !="" ? "is_invalid" : ""); ?>" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"><span class="warning"><?php echo $error_tanggal_lahir; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="agama" class="col-sm-3 col-form-label">Agama</label>
						<div class="col-sm-9">
							<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is_invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>"><small>01=Islam, 02=Kristen/Protestan, 03=Katholik, 04=Hindu, 05=Buddha, 06=Khong Hu Chu, 09=Lainnya</small><span class="warning"><?php echo $error_agama; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="berkebutuhan_khusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
						<div class="col-sm-9">
							<input type="text" name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus !="" ? "is_invalid" : ""); ?>" id="berkebutuhan_khusus" placeholder="Berkebutuhan Khusus" value="<?php echo $berkebutuhan_khusus; ?>"><small>01=Tidak, 02=Netra (A), 03=Rungu (B), 04=Grahita Ringan (C), 05=Grahita Sedang (C1), 06=Daksa Ringan (D), 07=Daksa Ringan (D1), 08=Laras (E), 09=Wicara (F), 10=Tuna Ganda (G), 11=Hiper Aktif (H), 12=Cerdas Istimewa (i), 13=Bakat Istimewa (J), 14=Kesulitan Belajar (K), 15=Narkoba (N), 16=Indigo (O), 17=Down Sindrome (P), 18=Autis (Q)</small><span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
						</div>
					</div> <br>

					<div class="form-group row">
						<label for="alamat_jalan" class="col-sm-3 col-form-label">Alamat Jalan</label>
						<div class="col-sm-9">
							<input type="text" name="alamat_jalan" class="form-control <?php echo ($error_alamat_jalan !="" ? "is_invalid" : ""); ?>" id="alamat_jalan" placeholder="Alamat Jalan" value="<?php echo $alamat_jalan; ?>"><span class="warning"><?php echo $error_alamat_jalan; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="rt" class="col-sm-3 col-form-label">RT</label>
						<div class="col-sm-9">
							<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is_invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="rw" class="col-sm-3 col-form-label">RW</label>
						<div class="col-sm-9">
							<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is_invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="nama_dusun" class="col-sm-3 col-form-label">Dusun</label>
						<div class="col-sm-9">
							<input type="text" name="nama_dusun" class="form-control <?php echo ($error_nama_dusun !="" ? "is_invalid" : ""); ?>" id="nama_dusun" placeholder="Dusun" value="<?php echo $nama_dusun; ?>"><span class="warning"><?php echo $error_nama_dusun; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="nama_desa" class="col-sm-3 col-form-label">Desa/Kelurahan</label>
						<div class="col-sm-9">
							<input type="text" name="nama_desa" class="form-control <?php echo ($error_nama_desa !="" ? "is_invalid" : ""); ?>" id="nama_desa" placeholder="Desa/Kelurahan" value="<?php echo $nama_desa; ?>"><span class="warning"><?php echo $error_nama_desa; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
						<div class="col-sm-9">
							<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is_invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos</label>
						<div class="col-sm-9">
							<input type="text" name="kode_pos" class="form-control <?php echo ($error_kode_pos !="" ? "is_invalid" : ""); ?>" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="tempat_tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
						<div class="col-sm-9">
							<input type="text" name="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal !="" ? "is_invalid" : ""); ?>" id="tempat_tinggal" placeholder="Tempat Tinggal" value="<?php echo $tempat_tinggal; ?>"><small>1=Bersama Orang Tua, 2=Wali, 3=Kos, 4=Asrama, 5=Panti Asuhan, 9=Lainnya</small><span class="warning"><?php echo $error_tempat_tinggal; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="moda_transportasi" class="col-sm-3 col-form-label">Transportasi</label>
						<div class="col-sm-9">
							<input type="text" name="moda_transportasi" class="form-control <?php echo ($error_moda_transportasi !="" ? "is_invalid" : ""); ?>" id="moda_transportasi" placeholder="Transportasi" value="<?php echo $moda_transportasi; ?>"><small>01=Jalan Kaki, 02=Kendaraan Pribadi, 03=Kendaraan Umum/Angkot/Pete-pete, 04=Jemputan Sekolah, 05=Kereta Api, 06=Ojek, 07=Andong/Bendi/Sado/Dokar/Delman/Becak, 08=Perahu Penyeberangan/Rakit/Getek, 09=Lainnya</small><span class="warning"><?php echo $error_moda_transportasi; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="no_hp" class="col-sm-3 col-form-label">No. HP</label>
						<div class="col-sm-9">
							<input type="text" name="no_hp" class="form-control <?php echo ($error_no_hp !="" ? "is_invalid" : ""); ?>" id="no_hp" placeholder="No. HP" value="<?php echo $no_hp; ?>"><span class="warning"><?php echo $error_no_hp; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="no_telepon" class="col-sm-3 col-form-label">No. Telepon</label>
						<div class="col-sm-9">
							<input type="text" name="no_telepon" class="form-control <?php echo ($error_no_telepon !="" ? "is_invalid" : ""); ?>" id="no_telepon" placeholder="No. Telp" value="<?php echo $no_telepon; ?>"><span class="warning"><?php echo $error_no_telepon; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="email_pribadi" class="col-sm-3 col-form-label">E-mail Pribadi</label>
						<div class="col-sm-9">
							<input type="text" name="email_pribadi" class="form-control <?php echo ($error_email_pribadi!="" ? "is_invalid" : ""); ?>" id="email_pribadi" placeholder="email_pribadi" value="<?php echo $email_pribadi; ?>"><span class="warning"><?php echo $error_email_pribadi; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="penerima_bantuan" class="col-sm-3 col-form-label">Penerima KPS/PKH/KIP</label>
						<div class="col-sm-9">
							<input type="radio" name="penerima_bantuan" value="Ya">Ya
							<input type="radio" name="penerima_bantuan" value="Tidak">Tidak
							<span class="warning"><?php echo $error_penerima_bantuan; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="no_bantuan" class="col-sm-3 col-form-label">Nomor KPS/KKS/PKH/KIP</label>
						<div class="col-sm-9">
							<input type="text" name="no_bantuan" class="form-control <?php echo ($error_no_bantuan !="" ? "is_invalid" : ""); ?>" id="no_bantuan" placeholder="Nomor KPS/KKS/PKH/KIP" value="<?php echo $no_bantuan; ?>"><small>* Apabila Menerima (Ketikkan 0 jika tidak menerima)</small><span class="warning"><?php echo $error_no_bantuan; ?></span>
						</div>
					</div><br>

					<div class="form-group row">
						<label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
						<div class="col-sm-9">
							<input type="radio" name="kewarganegaraan" value="WNI">WNI
							<input type="radio" name="kewarganegaraan" value="WNA">WNA
							<span class="warning"><?php echo $error_kewarganegaraan; ?></span>
						</div>
					</div><br>

					<!--Tombol Submit atau Reset-->
					<button type="submit" class="btn btn-primary">SIMPAN</button>
					<button type="reset" class="btn btn-danger">RESET</button>
						
				</form>
			</div>
		</div>
	</div>
    </div>

    
  </body>
</html>