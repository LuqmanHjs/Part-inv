

<?php 

$koneksi = new mysqli("localhost","root","","part2");
$no = mysqli_query($koneksi, "select kode_pelanggan from pelanggan order by kode_pelanggan desc");
$kdpelanggan = mysqli_fetch_array($no);
$kode = $kdpelanggan['kode_pelanggan'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "PLG-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "PLG-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "PLG-".$bulan.$tahun.$tambah;

}




?>
							


  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Pelanggan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode pelanggan</label>
                            <div class="form-group">
                               <div class="form-line">
                             <input type="text" name="kode_pelanggan" class="form-control" id="kode_pelanggan" value="<?php echo $format; ?>" readonly />
							</div>
                            </div>
							
						
							
							<label for="">Nama Pelanggan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_pelanggan" class="form-control" required />	 
							</div>
                            </div>
							
					
							<label for="">Alamat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="alamat_pelanggan" class="form-control" required/>
                          	 
								</div>
                            </div>
					
							
							<label for="">Telepon</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="no_tlp" class="form-control" required/>	 
							</div>
                            </div>


							<label for="">NO KTP</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="no_ktp" class="form-control" required/>	 
							</div>
                            </div>
							
							<label for="">Tanggal</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="datetime-local" name="tgl_pelanggan" class="form-control" required/>	 
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
			
								
								$sql = $koneksi->query("insert into pelanggan (kode_pelanggan, no_ktp, nama_pelanggan, alamat_pelanggan, no_tlp, tgl_pelanggan) values('$kode_pelanggan','$no_ktp','$nama_pelanggan','$alamat_pelanggan','$no_tlp','$tgl_pelanggan')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=pelanggan";
										</script>
										
										<?php
								}
								}
							
							
							?>
										

								
								
								
								
								
