 <?php
 
 $kode_transaksi_masuk= $_GET['kode_transaksi_masuk'];
 $sql = $koneksi->query("delete from transaksi_masuk where kode_transaksi_masuk = '$kode_transaksi_masuk'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=barangmasuk";
	</script>
	
 <?php
 
 }
 
 ?>