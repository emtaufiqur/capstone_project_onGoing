<?php 
include '../koneksi.php';
$id  = $_GET['id'];

$transaksi = mysqli_query($koneksi,"select * from transaksi_pjum where transaksi_id='$id'");
$t = mysqli_fetch_assoc($transaksi);

mysqli_query($koneksi, "delete from transaksi_pjum where transaksi_id='$id'");
header("location:transaksi_pjum.php");