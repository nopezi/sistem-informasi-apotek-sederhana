<?php 
include 'koneksi.php';
session_start();
if (isset($_POST['masuk'])) {
$user = mysqli_real_escape_string($koneksi, htmlentities($_POST['username']));
$pass = mysqli_real_escape_string($koneksi, htmlentities($_POST['password']));

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$user' AND password='$pass'")or die(mysqli_error());
if (mysqli_num_rows($sql) == 0) {
	echo '<script language="javascript">alert("isi yang bener !!"); document.location="index.php";</script>';
}else {
$row = mysqli_fetch_assoc($sql);
if ($row['level'] == 'admin') {
	$_SESSION['admin'] = $row['id'];

	echo '<script language="javascript">alert("berhasil login !!"); document.location="home.php";</script>';	
}
// else {
// 	if ($row['level'] == 'pelanggan') {
// 		$_SESSION['user'] =$row['id'];
// 		echo '<script language="javascript">alert("anda berhasil login sebagai user !!"); document.location="home.php";</script>';
// 	}
// }
}

}
 ?>