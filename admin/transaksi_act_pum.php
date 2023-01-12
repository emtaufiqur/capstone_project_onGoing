<?php 
include '../koneksi.php';
$id_pjum = $_POST['id_pjum'];
$tanggal  = $_POST['tanggal'];
$tanggal_pjum  = $_POST['tanggal_pjum'];
$kategori  = $_POST['kategori'];
$nominal  = $_POST['nominal'];
$nominal_pjum = $_POST['nominal_pjum'];
$keterangan  = $_POST['keterangan'];
$tanggal_kebutuhan  = $_POST['tanggal_kebutuhan'];

$rand = rand();
$allowed =  array('jpg','jpeg','pdf');
$filename = $_FILES['trnfoto']['name'];


if($filename == ""){
	mysqli_query($koneksi, "insert into transaksi_pjum values (NULL,'$id_pjum','$tanggal','$tanggal_pjum','$kategori','$nominal','$nominal_pjum','$keterangan','$tanggal_kebutuhan','')")or die(mysqli_error($koneksi));
	header("location:transaksi_pum.php?alert=berhasil");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:transaksi_pum.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['trnfoto']['tmp_name'], '../gambar/bukti/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into transaksi_pjum values (NULL,'$id_pjum','$tanggal','$tanggal_pjum','$kategori','$nominal','$nominal_pjum','$keterangan','$tanggal_kebutuhan','$file_gambar')");
		header("location:transaksi_pum.php?alert=berhasil");
	}
}