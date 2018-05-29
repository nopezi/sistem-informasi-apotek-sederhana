<?php 
include 'koneksi.php';
$id = $_GET['id_obat'];
mysqli_query($koneksi, "delete from data_obat where id_obat='$id'");
header("location:obat.php");
 ?>