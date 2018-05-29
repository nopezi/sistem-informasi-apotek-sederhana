<?php 
include 'koneksi.php';
$id = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$harga_obat = $_POST['harga_obat'];
$keterangan = $_POST['keterangan'];

if($nama_obat == "" || $harga_obat == "" || $keterangan == ""){
	echo '<script language="javascript">alert("Isi Semua Data"); document.location="obat.php"</script>';
}else{
mysqli_query($koneksi, "insert into data_obat values('$id', '$nama_obat', '$harga_obat', '$keterangan')");
header("location:obat.php");
}
 ?>