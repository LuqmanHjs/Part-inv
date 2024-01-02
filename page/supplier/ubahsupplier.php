<?php
 $kode_supplier = $_GET['kode_supplier'];
 $sql2 = $koneksi->query("select * from supplier where kode_supplier = '$kode_supplier'");
 $tampil = $sql2->fetch_assoc();
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Supplier</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="kode_supplier" value="<?php echo $tampil['kode_supplier']; ?>" class="form-control" readonly />
	 
							</div>
                            </div>
							
							<label for="">Nama Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_supplier" value="<?php echo $tampil['nama_supplier']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Alamat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="alamat_supplier" value="<?php echo $tampil['alamat_supplier']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Telepon</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="no_tlp" value="<?php echo $tampil['no_tlp']; ?>" class="form-control" />	 
							</div>
                            </div>		


                            <label for="">Email</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="email" value="<?php echo $tampil['email']; ?>" class="form-control" />	 
							</div>
                            </div>													
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">							
							</form>					
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$kode_supplier= $_POST['kode_supplier'];
								$nama_supplier= $_POST['nama_supplier'];
								$alamat_supplier= $_POST['alamat_supplier'];
								$no_tlp= $_POST['no_tlp'];
								$email= $_POST['email'];
								$sql = $koneksi->query("update supplier set kode_supplier='$kode_supplier', nama_supplier='$nama_supplier', alamat_supplier='$alamat_supplier', no_tlp='$no_tlp', email='$email' where kode_supplier='$kode_supplier'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=supplier";
										</script>
										
										<?php
								}
							
								}
							
							
								
							?>
										
										
										
								
								
								
								
								
