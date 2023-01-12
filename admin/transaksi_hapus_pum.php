<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from transaksi_pjum where transaksi_id='$id'");
header("location:transaksi_pum.php");