  <script>
  function sum() {
	  var stok = document.getElementById('stok').value;
	  var jumlahkeluar = document.getElementById('jumlahkeluar').value;
	  var result = parseInt(stok) + parseInt(jumlahkeluar);
	  if (!isNaN(result)) {
		  document.getElementById('qty').value = result;
	  }
  }
  </script>
   
   <?php 
   $kode_transaksi_keluar= $_GET['kode_transaksi_keluar'];
   $sql2 = $koneksi->query("select * from transaksi_keluar where kode_transaksi_keluar = '$kode_transaksi_keluar'");
   $tampil = $sql2->fetch_assoc();
   
 $koneksi = new mysqli("localhost","root","","part2");
 $no = mysqli_query($koneksi, "select kode_transaksi_keluar from transaksi_keluar order by kode_transaksi_keluar desc");
 $idtran = mysqli_fetch_array($no);
 $kode = $idtran['kode_transaksi_keluar'];
 
 $urut = substr($kode, 8, 3);
 $tambah = (int) $urut + 1;
 $bulan = date("m");
 $tahun = date("y");
 
 if(strlen($tambah) == 1){
	 $format = "TRK-".$bulan.$tahun."00".$tambah;
 } else if(strlen($tambah) == 2){
	 $format = "TRK-".$bulan.$tahun."0".$tambah;
	 
 } else{
	 $format = "TRK-".$bulan.$tahun.$tambah;
 
 }


$tgl_transaksi_keluar = date("Y-m-d");






   $sql =$koneksi->query("select * from karyawan where kode_karyawan='$user'");
   $da = $sql->fetch_assoc();
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Barang Keluar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
			  <div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">KODE TRANSAKSI KELUAR</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="text" name="kode_transaksi_keluar" class="form-control" id="kode_transaksi_keluar" value="<?php echo $tampil['kode_transaksi_keluar']; ?>" readonly /> 
														</div>
                            </div>
							
						
							
							<label for="">Tanggal Keluar</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="datetime-local" name="tgl_transaksi_keluar" class="form-control" id="tgl_transaksi_keluar" value="<?php echo $tgl_transaksi_keluar; ?>" required/>
														</div>
                            </div>
							
					
							<label for="">Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                            <select name="barang" id="cmb_barang" class="form-control" required />
														<option value="">-- Pilih Barang  --</option>
														<?php
								
														$sql = $koneksi -> query("select * from part order by kode_part");
														while ($data=$sql->fetch_assoc()) {
														echo "<option value='$data[kode_part].$data[nama_part]'>$data[kode_part] | $data[nama_part]</option>";
															}
														?>
								
														</select>		 
														</div>
                            </div>
							
							<div class="tampung"></div>
					
							<label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlahkeluar" id="jumlahkeluar" onkeyup="sum()" class="form-control" required />

														</div>
                            </div>
							
							<label for="qty">Total Stok</label>
                            <div class="form-group">
                               <div class="form-line">
                               <input readonly="readonly" name="qty" id="qty" type="number" class="form-control">
              							</div>
                            </div>
							
							<div class="tampung1"></div>
							
								<label for="">Kode Pelanggan</label>
                            <div class="form-group">
                               <div class="form-line">
                          
			  	  						<input type="text" name="kode_pelanggan" class="form-control" id="kode_pelanggan" value="<?php echo $tampil['kode_pelanggan'];?>" readonly />
							</div>
                          </div>

              <label for="">Kode Karyawan</label>
                            <div class="form-group">
                               <div class="form-line">
                          <input type="text" name="kode_karyawan" class="form-control" id="kode_karyawan" value="<?php echo $tampil['kode_karyawan'];?>" readonly />
			  	 </div>
                          </div>  

                          
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								$kode_transaksi_keluar= $_POST['kode_transaksi_keluar'];
								$tgl_transaksi_keluar= $_POST['tgl_transaksi_keluar'];

								$barang= $_POST['barang'];
								$pecah_barang = explode(".", $barang);
								$kode_part = $pecah_barang[0];
								$nama_part = $pecah_barang[1];
								
								
								
								$qty = $_POST['jumlahkeluar'];

								
								$kode_pelanggan = $_POST['kode_pelanggan'];
							
								
								$satuan = $_POST['satuan'];
								
								
								$kar = $_POST['kode_karyawan'];
								
								
								
								
							
								
								$sql = $koneksi->query("update transaksi_keluar set kode_transaksi_keluar='$kode_transaksi_keluar', tgl_transaksi_keluar='$tgl_transaksi_keluar', kode_pelanggan='$kode_pelanggan', kode_karyawan='$kar',kode_part='$kode_part', nama_part='$nama_part', qty='$qty', satuan='$satuan' where kode_transaksi_keluar='$kode_transaksi_keluar'");
								
								


									
									if ($sql2) {
									?>
									<script type="text/javascript">
										alert("Simpan Data Berhasil");
										window.location.href="?page=barangkeluar";
										
										</script>
										<?php
								}
							}
							
							
							?>
										
								
								
								
								
								
