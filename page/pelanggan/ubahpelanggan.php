<?php
 $kode_pelanggan = $_GET['kode_pelanggan'];
 $sql2 = $koneksi->query("select * from pelanggan where kode_pelanggan = '$kode_pelanggan'");
 $tampil = $sql2->fetch_assoc();
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Pelanggan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode pelanggan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="kode_pelanggan" value="<?php echo $tampil['kode_pelanggan']; ?>" class="form-control" readonly />
	 
							</div>
                            </div>
							
							<label for="">Nama pelanggan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_pelanggan" value="<?php echo $tampil['nama_pelanggan']; ?>" class="form-control" required/>
	 
							</div>
                            </div>
							
							<label for="">Alamat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="alamat_pelanggan" value="<?php echo $tampil['alamat_pelanggan']; ?>" class="form-control" required/>
	 
							</div>
                            </div>
							
							<label for="">Telepon</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="no_tlp" value="<?php echo $tampil['no_tlp']; ?>" class="form-control" required/>	 
							</div>
                            </div>		


                            <label for="">NO KTP</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="no_ktp" value="<?php echo $tampil['no_ktp']; ?>" class="form-control" required/>	 
							</div>
                            </div>		

                     <label for="">Tanggal</label>
                     <div class="form-group">
                     <div class="form-line">
                     <input type="datetime-local" name="tgl_pelanggan" class="form-control" required />	 
							</div>
                     </div>

							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">							
							</form>					
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$kode_pelanggan= $_POST['kode_pelanggan'];
								$nama_pelanggan= $_POST['nama_pelanggan'];
								$alamat_pelanggan= $_POST['alamat_pelanggan'];
								$no_tlp= $_POST['no_tlp'];
								$no_ktp= $_POST['no_ktp'];
								$tgl_pelanggan= $_POST['tgl_pelanggan'];

								$sql = $koneksi->query("update pelanggan set no_ktp='$no_ktp', nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', no_tlp='$no_tlp', tgl_pelanggan='$tgl_pelanggan' where kode_pelanggan='$kode_pelanggan'"); 
								
								if ($sql) {
									?>
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=pelanggan";
										</script>
										
										<?php
								}
							
								}
							
							
								
							?>
										
										
										
								
								
								
								
								
