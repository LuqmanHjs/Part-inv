 
<style type="text/css">
	#button {
  background-color: #fffff;
  width: 100%;
  padding: 5px 0 0px 15;
}
.u{
	width: 40px;
	height: 38px;
}

</style>


 <!-- Begin Page Content -->
        <div class="">

          <!-- DataTales Example -->
          <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
											<th>No</th>
											<th>Kode Pelanggan</th>
											<center><th style="">Nama Pelanggan</th></center>
											<th>Alamat</th>
											<th>Telepon</th>
											<th>No KTP</th>
											<th>Tanggal</th>
											<th>Aksi</th>
                    </tr>
								</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from pelanggan ORDER BY tgl_pelanggan DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                <tr>
                      <td><?php echo $no++; ?></td>
											<td style="column-width: 110px;"><?php echo $data['kode_pelanggan'] ?></td>
											<td><?php echo $data['nama_pelanggan'] ?></td>
											<td><?php echo $data['alamat_pelanggan'] ?></td>
											<td><?php echo $data['no_tlp'] ?></td>
											<td><?php echo $data['no_ktp'] ?></td>
											<td><?php echo $data['tgl_pelanggan'] ?></td>
                                         

       								<td >
       									<div id="button">
											<center><a href="?page=pelanggan&aksi=ubahpelanggan&kode_pelanggan=<?php echo $data['kode_pelanggan'] ?>" class="btn btn-success u" ><i class="fa fa-edit"></i>  </a></center>

											</div>
											</td>

               </tr>
										<?php }?>


										   </tbody>
                                </table>
								<a href="?page=pelanggan&aksi=tambahpelanggan" class="btn btn-primary" >Tambah Data Pelanggan</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>