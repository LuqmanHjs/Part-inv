 <?php
 
 $kode_part= $_GET['kode_part'];
 $sql = $koneksi->query("delete from part where kode_part= '$kode_part'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=gudang";
	</script>
	
 <?php
 
 }
 
 ?>