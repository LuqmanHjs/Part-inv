
<?php
if (isset($_POST['submit']))
{?>

 <?php



	$koneksi = new mysqli("localhost","root","","part2");

	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Barang_Masuk (".date('d-m-Y').").xls");
	
	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;

?>	

<body>
<center>
<h2>Laporan Barang Masuk Bulan <?php echo $bln;?> Tahun <?php echo $thn;?></h2>
</center>
<table border="1">
  <tr>
											<th>No</th>
											<th>Kode Transaksi Masuk</th>
											<th>Tanggal Masuk</th>
											<th>Kode supplier</th>
											<th>Kode Karyawan</th>
											<th>Kode part</th>
											<th>Nama part</th>
											<th>Jumlah Masuk</th>
											<th>Satuan Barang</th>
											
                                         
                    </tr>
	

                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from transaksi_masuk where MONTH(tgl_transaksi_masuk) = '$bln' and YEAR(tgl_transaksi_masuk) = '$thn'");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                       <tr>
                     <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_transaksi_masuk'] ?></td>
											<td><?php echo $data['tgl_transaksi_masuk'] ?></td>
											<td><?php echo $data['kode_supplier'] ?></td>
											<td><?php echo $data['kode_karyawan'] ?></td>
											
											<td><?php echo $data['kode_part'] ?></td>
											<td><?php echo $data['nama_part'] ?></td>
											<td><?php echo $data['qty'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
										</tr>
									<?php }?>
					</table>	
					</body>
                                
	<?php 
	}
	?>
	
	<?php

	$koneksi = new mysqli("localhost","root","","part2");
	

	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;
	?>
	
	<?php
	if ($bln == 'all') {
		?>
	<div class="table-responsive">
							
                                <table  class="display table table-bordered" id="transaksi">
								
                                    <thead>
                                   <tr>
											<th>No</th>
											<th>Kode Transaksi Masuk</th>
											<th>Tanggal Masuk</th>
											<th>Kode supplier</th>
												<th>Kode Karyawan</th>
											<th>Kode part</th>
											<th>Nama part</th>
										
											<th>Jumlah Masuk</th>
											<th>Satuan Barang</th>
											
                                         
                    </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from transaksi_masuk where YEAR(tgl_transaksi_masuk) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
			
                                        <tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_transaksi_masuk'] ?></td>
											<td><?php echo $data['tgl_transaksi_masuk'] ?></td>
											<td><?php echo $data['kode_supplier'] ?></td>
											<td><?php echo $data['kode_karyawan'] ?></td>
											<td><?php echo $data['kode_part'] ?></td>
											<td><?php echo $data['nama_part'] ?></td>
											<td><?php echo $data['qty'] ?></td>
											<td><?php echo $data['satuan'] ?></td>

                                        </tr>
						<?php 
						}
						?>

					</tbody>
                    </table>
					</div>
					
					
					<?php
					}
					else{ ?>

						<div class="table-responsive">
							
                                <table  class="display table table-bordered" id="transaksi">
								
                                     <thead>
                                     <tr>
											<th>No</th>
											<th>Kode Transaksi Masuk</th>
											<th>Tanggal Masuk</th>
											<th>Kode supplier</th>
												<th>Kode Karyawan</th>
											<th>Kode part</th>
											<th>Nama part</th>
										
											<th>Jumlah Masuk</th>
											<th>Satuan Barang</th>
											
                                         
                    </tr>
                                    </thead>
		<tbody>
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from transaksi_masuk where MONTH(tgl_transaksi_masuk) = '$bln' and YEAR(tgl_transaksi_masuk) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
                                        <tr>
                     <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_transaksi_masuk'] ?></td>
											<td><?php echo $data['tgl_transaksi_masuk'] ?></td>
											<td><?php echo $data['kode_supplier'] ?></td>
											<td><?php echo $data['kode_karyawan'] ?></td>
											
											<td><?php echo $data['kode_part'] ?></td>
											<td><?php echo $data['nama_part'] ?></td>
											<td><?php echo $data['qty'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
								
								

                                        </tr>
						<?php 
		}
		?>
    </tbody>
	</table>
</div>
	
	<?php

}

?>