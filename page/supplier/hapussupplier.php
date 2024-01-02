 <?php
 
 $kode_supplier = $_GET['kode_supplier'];
 $sql = $koneksi->query("delete from supplier where kode_supplier = '$kode_supplier'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=supplier";
	</script>
	
 <?php
 
 }
 
 ?>