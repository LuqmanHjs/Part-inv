
<?php
if (isset($_POST['submit']))
{?>

 <?php



	$koneksi = new mysqli("localhost","root","","part2");

	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Barang_Keluar (".date('d-m-Y').").xls");
	
	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;

?>	

<body>
<center>
<h2>Laporan Barang Keluar Bulan <?php echo $bln;?> Tahun <?php echo $thn;?></h2>
</center>
<table border="1">
   <tr>
                                            <th>No</th>
                                            <th>Kode Transaksi keluar</th>
                                            <th>Tanggal keluar</th>
                                            <th>Kode pelanggan</th>
                                                <th>Kode karyawan</th>
                                            <th>Kode part</th>
                                            <th>Nama part</th>
                                            <th>Jumlah keluar</th>
                                            <th>Satuan Barang</th>
                                          
                                         
                    </tr>
	

                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from transaksi_keluar where MONTH(tgl_transaksi_keluar) = '$bln' and YEAR(tgl_transaksi_keluar) = '$thn'");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									  <tr>
                     <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode_transaksi_keluar'] ?></td>
                                            <td><?php echo $data['tgl_transaksi_keluar'] ?></td>
                                            <td><?php echo $data['kode_pelanggan'] ?></td>
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
                                            <th>Kode Transaksi keluar</th>
                                            <th>Tanggal keluar</th>
                                            <th>Kode pelanggan</th>
                                                <th>Kode karyawan</th>
                                            <th>Kode part</th>
                                            <th>Nama part</th>
                                            <th>Jumlah keluar</th>
                                            <th>Satuan Barang</th>
                                          
                                         
                    </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from transaksi_keluar where YEAR(tgl_transaksi_keluar) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
	
						
				   <tr>
                     <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode_transaksi_keluar'] ?></td>
                                            <td><?php echo $data['tgl_transaksi_keluar'] ?></td>
                                            <td><?php echo $data['kode_pelanggan'] ?></td>
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
                                            <th>Kode Transaksi keluar</th>
                                            <th>Tanggal keluar</th>
                                            <th>Kode pelanggan</th>
                                                <th>Kode karyawan</th>
                                            <th>Kode part</th>
                                            <th>Nama part</th>
                                            <th>Jumlah keluar</th>
                                            <th>Satuan Barang</th>
                                          
                                         
                    </tr>
                                    </thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from transaksi_keluar where MONTH(tgl_transaksi_keluar) = '$bln' and YEAR(tgl_transaksi_keluar) = '$thn'");
			while ($data = $sql->fetch_assoc()) {
									
		?>
	
				  <tr>
                     <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode_transaksi_keluar'] ?></td>
                                            <td><?php echo $data['tgl_transaksi_keluar'] ?></td>
                                            <td><?php echo $data['kode_pelanggan'] ?></td>
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