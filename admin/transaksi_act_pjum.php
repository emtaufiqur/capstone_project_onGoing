<?php 
include '../koneksi.php';
// $id = $_POST['id'];
$tanggal  = $_POST['transaksi_tanggal'];
$jenis  = $_POST['jenis'];
$kategori  = $_POST['kategori'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];
// $tanggal_pjum  = $_POST['tanggal_pjum'];
// $bank  = $_POST['bank'];

$rand = rand();
$allowed =  array('jpg','jpeg','pdf');
$filename = $_FILES['trnfoto']['name'];


if($filename == ""){
	mysqli_query($koneksi, "insert into transaksi_pjum values (NULL,'$tanggal','$jenis','$kategori','$nominal','$keterangan')")or die(mysqli_error($koneksi));
	header("location:transaksi_pjum.php?alert=berhasil");
	mysqli_query($koneksi, "insert into pjum values (NULL)")or die(mysqli_error($koneksi));
	header("location:transaksi_pjum.php?alert=berhasil");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:transaksi_pjum.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['trnfoto']['tmp_name'], '../gambar/bukti/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into transaksi_pjum values (NULL,'$tanggal','$jenis','$kategori','$nominal','$keterangan','$file_gambar')");
		header("location:transaksi_pjum.php?alert=berhasil");
	}
}

// mysqli_query($koneksi, "insert into transaksi values (NULL,'$tanggal','$jenis','$kategori','$nominal','$keterangan','$bank')")or die(mysqli_error($koneksi));
// header("location:transaksi.php");