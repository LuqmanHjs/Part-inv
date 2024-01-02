 
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
              <h6 class="m-0 font-weight-bold text-primary">Data Sparepart</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                <?php
                $ambilnama = mysqli_query($koneksi,"select * from part where qty < 10");
                while($fetch=mysqli_fetch_array($ambilnama)){
                  $barang = $fetch['nama_part'];
                ?>
                <div class="alert alert-danger" role="alert">
                  <strong>Perhatian!!!</strong> Stok <?=$barang;?> kurang dari 10 
                </div>
                <?php
                }
                ?>


                <thead>
                  <tr>
											<th>No</th>
											<th>Kode Part</th>
											<th>Nama Part</th>		
											<th>Tanggal</th>
                      <th>Harga Beli</th>						
                      <th>Harga Jual</th>	
											<th>Jumlah </th>
											<th>Satuan</th>
                      <th>	<center>Aksi</center>	</th>
                   </tr>
										</thead>
										
               
                  <tbody>
                  <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from part ORDER BY tgl desc");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                 <tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_part'] ?></td>
											<td><?php echo $data['nama_part'] ?></td>
											 <td><?php echo $data['tgl'] ?></td>
                      <td><?php echo $data['harga_beli'] ?></td>
                      <td><?php echo $data['harga'] ?></td>
											<td><?php echo $data['qty'] ?></td>
											<td><?php echo $data['satuan'] ?></td>

											<td>
												<div id="button">
											<center><a href="?page=gudang&aksi=ubahgudang&kode_part=<?php echo $data['kode_part'] ?>"  class="btn btn-success u" ><i class="fa fa-edit"></i>  </a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=gudang&aksi=hapusgudang&kode_part=<?php echo $data['kode_part'] ?>" class="btn btn-danger u" ><i class="fa fa-trash"></i></a></center>
										</div>
                    
									</td>
                </tr>
									<?php }?>

									</tbody>
                                </table>
								<a href="?page=gudang&aksi=tambahgudang" class="btn btn-primary" >Tambah Data Part</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>












