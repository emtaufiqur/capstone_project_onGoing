<?php 
include '../koneksi.php';
$id  = $_GET['id'];

mysqli_query($koneksi, "delete from p2d where p2d_id='$id'");
header("location:p2d.php");