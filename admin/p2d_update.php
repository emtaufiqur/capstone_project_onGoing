<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];

mysqli_query($koneksi, "update p2d set p2d_tanggal='$tanggal', p2d_nominal='$nominal', p2d_keterangan='$keterangan' where p2d_id='$id'") or die(mysqli_error($koneksi));
header("location:p2d.php");