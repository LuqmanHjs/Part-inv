

<?php
 $id = $_GET['kode_karyawan'];
 $sql2 = $koneksi->query("select * from karyawan where kode_karyawan= '$kode_karyawan'");
 $tampil = $sql2->fetch_assoc();
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Karyawan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="kode_karyawan" value="<?php echo $tampil['kode_karyawan']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Nama</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_karyawan" value="<?php echo $tampil['nama_karyawan']; ?>" class="form-control" />
	 
							</div>
                            </div>


                            <label for="">email</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="email" value="<?php echo $tampil['email']; ?>" class="form-control" />
	 
							</div>
                            </div>

						<label for="">alamat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Telepon</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="no_tlp" value="<?php echo $tampil['no_tlp']; ?>" class="form-control" />
	 
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
                                <input type="text" name="username" value="<?php echo $tampil['username']; ?>" class="form-control" />
                          	 
								</div>
                            </div>
							

							<label for="">Password</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="password" value="<?php echo $tampil['password']; ?>" class="form-control" />
                          	 
								</div>
                            </div>
							
							
						
							<label for="">Foto</label>
                            <div class="form-group">
                               <div class="form-line">
                                <img src="img/<?php echo $tampil['foto']; ?> "width="50" height="50"  alt="">
									 
							</div>
                            </div>
							
							
							<label for="">Ganti Foto</label>
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
								$password= $_POST['password'];
								
								$foto= $_FILES['foto']['name'];
								$lokasi= $_FILES['foto']['tmp_name'];
								
								if (!empty($lokasi)) {
								$upload= move_uploaded_file($lokasi, "img/".$foto);
								
								
								
								$sql = $koneksi->query("update karyawan set kode_karyawan='$kode_karyawan', nama_karyawan='$nama_karyawan',email='email', alamat='alamat', telepon='$telepon', level='$level', username='$username', password ='password' foto='$foto' where kode_karyawan='$kode_karyawan'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=pengguna";
										</script>
										
										<?php
								}
							
								}
								
								else {
									
								$sql = $koneksi->query("update karyawan set kode_karyawan='$kode_karyawan', nama_karyawan='$nama_karyawan',email='email', alamat='alamat', telepon='$telepon', level='$level', username='$username', password ='password' foto='$foto' where kode_karyawan='$kode_karyawan'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=pengguna";
										</script>
										
										<?php
								}
							
								}
							
							}
							?>
										
										
										
								
								
								
								
								
