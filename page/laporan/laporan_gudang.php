
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
              <h6 class="m-0 font-weight-bold text-primary">Laporan Data Spare-Part</h6>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
											<th>No</th>
											<th>Kode Part</th>
											<th>Nama Part</th>		
                      <th>Harga Beli</th>						
                      <th>Harga Jual</th>	
											<th>Jumlah </th>
											<th>Satuan</th>
											<th>Tanggal</th>
                     
                   </tr>
										</thead>
										
               
                  <tbody>
                  <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from part ORDER BY tgl DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                        <tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_part'] ?></td>
											<td><?php echo $data['nama_part'] ?></td>
                      <td><?php echo $data['harga_beli'] ?></td>
                      <td><?php echo $data['harga'] ?></td>
											<td><?php echo $data['qty'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['tgl'] ?></td>
										 
									</td>
                </tr>
									<?php }?>

									</tbody>
                                </table>
								<a href="page/laporan/export_laporan_gudang_excel.php"  class="btn btn-primary" style="margin-top:8 px"><i class="fa fa-print"></i>ExportToExcel</a>
								
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












