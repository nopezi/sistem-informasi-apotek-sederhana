<?php 
@session_start();
include 'koneksi.php';
if (@$_SESSION['admin']) {
	require_once 'header.php';

?>


<div class="container">

<?php  
$id = mysqli_real_escape_string($koneksi, $_GET['id_transaksi']);
$transaksi = mysqli_query($koneksi, "select * from data_transaksi where id_transaksi='$id'")or die(mysql_error());
while($d=mysqli_fetch_array($transaksi)){
    

?>
	
	<form name="postform" action="aksi_edit_transaksi.php" method="post" accept-charset="utf-8">
	<table class="table table-hover" id="table">
	
		<tbody>
			<tr>
				<div class="form-group">
				<td>
					<input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi'] ?>">
					<label>Nama Pembeli</label>
				</td>

	 			<td>
	 				<input style="width: 20%" type="text" name="nama_pelanggan" class="form-control" value="<?=$d['nama_pelanggan'] ?>">
	 			</td>
				</div>
			</tr>

			<tr>
				<td>
				<?php // TAMPILKAN DATA BARANG DAN HARGA
                    $barang=mysqli_query($koneksi, "SELECT * FROM data_obat");
                    $jsArray = "var harga = new Array();\n"; 
                    ?>	
				<div class="form-group">
					<label>Nama Obat</label>	
				
				</td>

				<td>
					<select style="width: 40%" class="form-control" name="nama_obat" onchange="changeValue(this.value)">
						<option>- Pilih -</option>
                    <?php if(mysqli_num_rows($barang)) {?>
                        <?php while($row_brg= mysqli_fetch_array($barang)) {?>
                            <option value="<?php echo $row_brg["nama_obat"]?>"> <?php echo $row_brg["nama_obat"]?> </option>
                        <?php $jsArray .= "harga['" . $row_brg['nama_obat'] . "'] = {harga_obat:'" . addslashes($row_brg['harga_obat']) . "'};\n"; } ?>
                    <?php } ?>
					</select>
				</td>
				</div>
			</tr>

			<tr>
				<div class="form-group">
				<td>
					<label>Harga Obat (Rp)</label>			
				</td>
				<td>
				<input style="width: 30%" type="text" name="harga_obat" class="form-control" id="harga_obat" readonly="readonly" value="<?=$d['harga_obat'] ?>">
				<script type="text/javascript">
                    <?php echo $jsArray; ?>
                    function changeValue(nama_obat) {
                    document.getElementById("harga_obat").value = harga[nama_obat].harga_obat;
                    };
                    </script> <!-- Tampilkan Harga berdasarkan kode barang -->		
	 			</td>
				</div>
			</tr>

			<tr>
				<div class="form-group">
				<td>
					<label>Jumlah Obat</label>			
				</td>
				<td>
				<input style="width: 30%" type="text" name="jumlah_obat" class="form-control" value="<?=$d['jumlah_obat'] ?>">		
	 			</td>
				</div>
			</tr>
			
			<tr>
				<div class="form-group">
				<td>
					<label>alamat</label>			
				</td>
				<td>
				<input style="width: 70%" type="text" name="alamat" class="form-control" value="<?=$d['alamat'] ?>">		
	 			</td>
				</div>
			</tr>


			<tr>
				<div class="form-group">
				<td></td>
				<td>
					<input type="submit" name="simpan" value="ganti" class="btn btn-primary">
					<a href="transaksi.php" class="btn btn-danger">Batal</a>		
	 			</td>
				</div>
			</tr>
		
		</tbody>
	</table>
		
	</form>

<?php } ?>

</div>


<?php 
require_once 'footer.php'; 
}else {
	header("location:index.php");
}
?>