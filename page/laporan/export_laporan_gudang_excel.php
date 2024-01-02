 <?php
	
	$koneksi = new mysqli("localhost","root","","part2");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Stok_Gudang(".date('d-m-Y').").xls");

?>	
<center>
<h2>Laporan Stok Gudang</h2>
</center>
<table border="1">
	  <tr>
											<th>No</th>
											<th>Kode Part</th>
											<th>Nama Part</th>		
                      <th>Harga Beli</th>						
                      <th>Harga Jual</th>	
											<th>Jumlah </th>
											<th>Satuan</th>
                   </tr>
	
 <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from part");
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

								

										
                                        </tr>
									<?php }?>

                                </table>