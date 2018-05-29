<?php 
include 'koneksi.php';
$id = $_GET['id_transaksi'];
mysqli_query($koneksi, "delete from data_transaksi where id_transaksi='$id'");
header("location:transaksi.php");
 ?>