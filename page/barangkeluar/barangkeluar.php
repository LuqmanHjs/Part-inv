
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
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Barang Keluar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                     <tr>
											<th>No</th>
											<th>Kode Transaksi keluar</th>
											<th>Tanggal keluar</th>
											<th>Kode pelanggan</th>
											<th>Kode karyawan</th>
											<th>Kode part</th>
											<th >Nama part</th>
											<th>Jumlah keluar</th>
											<th>Satuan Barang</th>
											<th>Catatan</th>
                                         
                     </tr>
				</thead>
										
               
                <tbody>
                    <?php 	
									$no = 1;
									$sql = $koneksi->query("select * from transaksi_keluar ORDER BY kode_transaksi_keluar DESC");
									while ($data = $sql->fetch_assoc()) {	
					?>
									
                                              <tr>
                     						<td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_transaksi_keluar'] ?></td>
											<td><?php echo $data['tgl_transaksi_keluar'] ?></td>
											<td><?php echo $data['kode_pelanggan'] ?></td>
											<td><?php echo $data['kode_karyawan'] ?></td>
											
											<td><?php echo $data['kode_part'] ?></td>
											<td ><?php echo $data['nama_part'] ?></td>
											<td><?php echo $data['qty'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['catatan'] ?></td>

											<!--<td style="column-width: 70px;">
										<div id="button">
											<a href="?page=barangkeluar&aksi=ubahbarangkeluar&kode_transaksi_keluar=<?php echo $data['kode_transaksi_keluar'] ?>" class="btn btn-success u" ><i class="fa fa-edit"></i></a>
											<hr style="padding: 0px;">
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=barangkeluar&aksi=hapusbarangkeluar&kode_transaksi_keluar=<?php echo $data['kode_transaksi_keluar'] ?>" class="btn btn-danger u" ><i class="fa fa-trash"></i></a>
										</div>
											</td>-->
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=barangkeluar&aksi=tambahbarangkeluar" class="btn btn-primary" >Tambah</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












