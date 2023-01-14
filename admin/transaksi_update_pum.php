<?php 
include '../koneksi.php';
$id = $_POST['id'];
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
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($filename == ""){
	mysqli_query($koneksi, "update transaksi_pjum set transaksi_id='$id', transaksi_id_pjum='$id_pjum', transaksi_tanggal='$tanggal', transaksi_tanggal_pjum='$tanggal_pjum', transaksi_kategori='$kategori', transaksi_nominal='$nominal', nominal_pjum='$nominal_pjum', transaksi_keterangan='$keterangan', transaksi_tanggal_kebutuhan='$tanggal_kebutuhan' where transaksi_id='$id'") or die(mysqli_error($koneksi));
	header("location:transaksi_pum.php?alert=berhasilupdate");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:transaksi_pum.php?alert=gagal");
	}
	
	else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/bukti/'.$rand.'_'.$filename);
		$xgambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "update transaksi_pjum set transaksi_id='$id', transaksi_id_pjum='$id_pjum', transaksi_tanggal='$tanggal', transaksi_tanggal_pjum='$tanggal_pjum', transaksi_kategori='$kategori', transaksi_nominal='$nominal', nominal_pjum='$nominal_pjum', transaksi_keterangan='$keterangan', transaksi_tanggal_kebutuhan='$tanggal_kebutuhan', transaksi_foto='$xgambar' where transaksi_id='$id'");
		// echo("update transaksi_pjum set transaksi_id='$id', transaksi_id_pjum='$id_pjum', transaksi_tanggal='$tanggal', transaksi_tanggal_pjum='$tanggal_pjum', transaksi_kategori='$kategori', transaksi_nominal='$nominal', nominal_pjum='$nominal_pjum', transaksi_keterangan='$keterangan', transaksi_tanggal_kebutuhan='$tanggal_kebutuhan', transaksi_foto='$xgambar' where transaksi_id='$id'");
		header("location:transaksi_pum.php?alert=berhasilupdate");
	}
}
