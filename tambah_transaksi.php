<?php 
include 'koneksi.php';
$id = $_POST['id_transaksi'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nama_obat = $_POST['nama_obat'];
$harga_obat = $_POST['harga_obat'];
$jumlah_obat = $_POST['jumlah_obat'];
$alamat = $_POST['alamat'];


if($nama_pelanggan == "" || $nama_obat == "" || $harga_obat == "" || $jumlah_obat == "" || $alamat == ""){
	echo '<script language="javascript">alert("Isi Semua Data"); document.location="transaksi.php"</script>';
}else{
mysqli_query($koneksi, "insert into data_transaksi values('$id', '$nama_pelanggan', '$nama_obat', '$harga_obat', '$jumlah_obat', '$alamat')");
header("location:transaksi.php");
}
 ?>