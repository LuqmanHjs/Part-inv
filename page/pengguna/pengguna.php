




 <!-- Begin Page Content -->
        <div class="">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                 <tr>     
					<th>No</th>
					<th>Kode Karyawan</th>
					<th>Nama</th>
					<th>email</th>
					<th>Alamat</th>
					<th>Telepon</th>
                    <th>Level</th>
                    <th>username <center>(X)</center></th>
                    <th>password <center>(X)</center></th>
					<th>Tanggal Masuk</th>
                    <th>foto</th>
									

                </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from karyawan order by kode_karyawan desc");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                    <tr>
                    	<td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_karyawan'] ?></td>
											<td><?php echo $data['nama_karyawan'] ?></td>
											<td><?php echo $data['email'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<td><?php echo $data['no_tlp'] ?></td>
											<td><?php echo $data['level'] ?></td>
											<td><?php echo $data[''] ?></td>
											<td><?php echo $data['assword'] ?></td>
											<td><?php echo $data ['tgl_karyawan'] ?></td>
											<td><img src="img/<?php echo $data['foto'] ?>"width="50" height="50" alt=""> </td>
										
										
										
									</tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=pengguna&aksi=tambahpengguna" class="btn btn-primary" >Tambah</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












