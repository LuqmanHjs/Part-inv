 <?php
 
 $id = $_GET['id'];
 $sql = $koneksi->query("delete from karyawan where id = '$id'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=karyawan";
	</script>
	
 <?php
 
 }
 
 ?>