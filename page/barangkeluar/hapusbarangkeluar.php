 <?php
 
 $kode_transaksi_keluar = $_GET['kode_transaksi_keluar'];
 $sql = $koneksi->query("delete from transaksi_keluar where kode_transaksi_keluar = '$kode_transaksi_keluar'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=barangkeluar";
	</script>
	
 <?php
 
 }
 
 ?>