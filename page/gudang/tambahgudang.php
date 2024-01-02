<?php 

$koneksi = new mysqli("localhost","root","","part2");


?>

 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Sparepart</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							<div class="body">						
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Part</label>
                            <div class="form-group">
                               <div class="form-line">
           						 <input type="text" name="kode_part" class="form-control"  required />	 
							</div>
                            </div>
							
													
							<label for="">Nama Part</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_part" class="form-control" required/>	 
							</div>
                            </div>
							
							<label for="">Tanggal Masuk</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="datetime-local" name="tgl" class="form-control" required/>

									</div>
                            </div>
							
								
							<label for="">Harga Beli</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="harga_beli" class="form-control" required />	 
							</div>
                            </div>

								
							<label for="">Harga Jual</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="harga" class="form-control" required/>	 
							</div>
                            </div>
							
							
                            <label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="qty" class="form-control"  required/>                                    									 
							</div>
                            </div>

							<label for="">Satuan</label>
							 <div class="form-group">
                               <div class="form-line">
                                    <select name="satuan" class="form-control show-tick">
                                        <option value="">-- Pilih satuan --</option>
													 <option value="PCS">PCS</option>
                                        <option value="Unit">Unit</option>
                                        <option value="Butir">Butir</option>
                                    </select>
                            </div>
							</div>
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
		
							<?php
							
							if (isset($_POST['simpan'])) {
		
								$kode_part= $_POST['kode_part'];
								$nama_part= $_POST['nama_part'];
								$harga_beli= $_POST['harga_beli'];
								$harga= $_POST['harga'];
								$qty= $_POST['qty'];	
								$satuan = $_POST['satuan'];		
								$tgl= $_POST['tgl'];	
																							
								
								$sql = $koneksi->query("insert into part (kode_part, nama_part , satuan, harga , qty, harga_beli, tgl) values('$kode_part','$nama_part','$satuan','$harga','$qty','$harga_beli','$tgl')");
								
								if ($sql) {
									?>									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=gudang";
										</script>										
									<?php
								}
								}
							
							
							?>
										
										
										
								
								
								
								
								
