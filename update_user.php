<?php 
include 'koneksi.php';
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$level = $_POST['level'];
if($username == "" || $password == "" || $level == ""){
	echo '<script language="javascript">alert("Isi Semua Data"); document.location="edit_user.php?id='.$id.'";</script>';
}else{
mysqli_query($koneksi, "update admin set username='$username', password='$password', level='$level' where id='$id'");
header("location:home.php");
}
?>