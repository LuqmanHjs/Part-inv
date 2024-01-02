 <?php
 
 $kode_pelanggan = $_GET['kode_pelanggan'];
 $sql = $koneksi->query("delete from pelanggan where kode_pelanggan = '$kode_pelanggan'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=pelanggan";
	</script>
	
 <?php
 
 }
 
 ?>