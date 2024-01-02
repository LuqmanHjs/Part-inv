  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Karyawan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="kode_karyawan" class="form-control" />	 
							</div>
                            </div>
							
						
							
							<label for="">Nama</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_karyawan" class="form-control" />	 
							</div>
                            </div>
							
							<label for="">Email</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="email" class="form-control" />	 
							</div>
                            </div>

                            <label for="">Alamat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="alamat" class="form-control" />	 
							</div>
                            </div>
							
							
							<label for="">Telepon</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="no_tlp" class="form-control" />	 
							</div>
                            </div>
							
							
							
									 
							</div>
                            </div>
							
							<label for="">Level</label>
							 <div class="form-group">
                               <div class="form-line">
                                    <select name="level" class="form-control show-tick">
                                        <option value="">-- Pilih Level --</option>
													 <option value="kabeng">Kepala Bengkel</option>
                                        <option value="outlet">Staff Outlet</option>
                                        <option value="sparepart">Staff Spare-part</option>
                     
                                    </select>
                            </div>
							</div>
							
							<label for="">Username</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="username" class="form-control" />
                          	 
								</div>
                            </div>
					
							<label for="">Password</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="password" name="password" class="form-control" />
                                
                                </div>
                            </div>

                            <label for="">Tanggal Masuk</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="datetime-local" name="tgl_karyawan" class="form-control" required/>

									</div>
                            </div>
                                     
                            <label for="">Foto</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="file" name="foto" class="form-control" />
									 
							</div>
                            </div>
												
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								$kode_karyawan= $_POST['kode_karyawan'];
								$nama_karyawan= $_POST['nama_karyawan'];
								$email= $_POST['email'];
								$alamat= $_POST['alamat'];
								$no_tlp= $_POST['no_tlp'];
								$level= $_POST['level'];
								$username= $_POST['username'];
								$password= md5($_POST['password']);
								$tgl_karyawan= $_POST['tgl_karyawan'];
								
								$foto= $_FILES['foto']['name'];
								$lokasi= $_FILES['foto']['tmp_name'];
								$upload= move_uploaded_file($lokasi, "img/".$foto);
								
								if ($upload) {
								
								$sql = $koneksi->query("insert into karyawan (kode_karyawan, nama_karyawan, email, alamat, no_tlp, level, username, password, tgl_karyawan,foto) 
                                values('$kode_karyawan','$nama_karyawan','$email','$alamat ','$no_tlp','$level','$username','$password','$tgl_karyawan','$foto')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=pengguna";
										</script>
										
										<?php
								}
								}
							
							}
							?>
										
										
										
								
								
								
								
								
