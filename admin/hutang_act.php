<?php 
include '../koneksi.php';
$tanggal  = $_POST['tanggal'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];
$kategori = $_POST['kategori_id'];

mysqli_query($koneksi, "insert into hutang value (NULL,'$tanggal','$nominal','$keterangan','$kategori')")or die(mysqli_error($koneksi));
header("location:hutang.php");