<?php 
@session_start();
include 'koneksi.php';
if (@$_SESSION['admin']) {
    require_once 'header.php';

?>

<div class="container">
	<h2>Daftar Obat</h2>
	<button style="margin-bottom: 10px" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Tambah Data</button>

	<table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Harga Obat</th>
                <th>Keterangan</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $obat=mysqli_query($koneksi, "select * from data_obat");
        $no = 1;
        while ($obt=mysqli_fetch_array($obat)) {
            
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $obt['nama_obat'] ?></td>
                <td>Rp.<?php echo number_format($obt['harga_obat']) ?></td>
                <td><?=$obt['keterangan']?></td>
                <td>
                	<a href="edit_obat.php?id_obat=<?php echo $obt['id_obat']; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                	<a onclick="if(confirm('Yakin Mau Hapus Data Ini ?')){location.href='hapus_obat.php?id_obat=<?php echo $obt['id_obat'];?>'}" class="btn btn-danger">
                		<span class="glyphicon glyphicon-trash"></span>
                	</a>
                </td>
                
            </tr>
        <?php } ?>    
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Harga Obat</th>
                <th>Keterangan</th>
                <th>Setting</th>
            </tr>
        </tfoot>
    </table>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<!-- MODAL KOLOM -->

<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Data Obat</h4>
			</div>
			<div class="modal-body">
				<form action="tambah_obat.php" method="post">
					<div class="form-group">
						<label>Nama Obat</label>
						<input type="text" name="nama_obat" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Harga Obat</label>
						<input type="text" name="harga_obat" class="form-control" autocomplete="off">
					</div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="keterangan"></textarea>    
                    </div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<input type="reset" class="btn btn-danger" value="reset">
				<input type="submit" class="btn btn-primary" value="Simpan">
			</div>
				</form>
		</div>
	</div>
</div>




</div>
<?php 
require_once 'footer.php'; 
}else {
    header("location:index.php");
}
?>
