<?php 
include 'koneksi.php';
$id = $_POST['id_obat'];
$nama_obat = $_POST['nama_obat'];
$harga_obat = $_POST['harga_obat'];
$keterangan = $_POST['keterangan'];

if($nama_obat == "" || $harga_obat == "" || $keterangan == ""){
	echo '<script language="javascript">alert("Isi Semua Data"); document.location="edit_obat.php?id_obat='.$id.'";</script>';
}else{
mysqli_query($koneksi, "update data_obat set 
						nama_obat='$nama_obat',
						harga_obat='$harga_obat',
						keterangan='$keterangan'
						where id_obat='$id'");
header("location:obat.php");
}
 ?>