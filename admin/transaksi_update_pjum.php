<?php 
include '../koneksi.php';
// $id  = $_POST['id'];
$tanggal  = $_POST['transaksi_tanggal'];
// $jenis  = $_POST['jenis'];
// $kategori  = $_POST['kategori'];
$nominal_pjum  = $_POST['nominal'];
// $keterangan  = $_POST['keterangan'];
// $tanggal_kebutuhan  = $_POST['tanggal_kebutuhan'];
// $bank  = $_POST['bank'];

$rand = rand();
$allowed =  array('jpg','jpeg','pdf');
$filename = $_FILES['trnfoto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$transaksi = mysqli_query($koneksi,"select * from transaksi_pjum where transaksi_id='$id'");
$t = mysqli_fetch_assoc($transaksi);

if($filename == ""){
	mysqli_query($koneksi, "update transaksi set tanggal_pjum='$tanggal_pjum', transaksi_jenis='$jenis', transaksi_kategori='$kategori', transaksi_nominal='$nominal', transaksi_keterangan='$keterangan' where transaksi_id='$id'") or die(mysqli_error($koneksi));
	header("location:transaksi_pjum.php?alert=berhasilupdate");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:transaksi_pjum.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['trnfoto']['tmp_name'], '../gambar/bukti/'.$rand.'_'.$filename);
		$xgambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "update transaksi_pjum set transaksi_tanggal='$tanggal', transaksi_foto='$xgambar' where transaksi_id='$id'");
		header("location:transaksi_pjum.php?alert=berhasilupdate");
	}
}
