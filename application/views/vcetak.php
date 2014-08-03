<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=LAPORAN.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
	
 
 <table border="1" class="table multimedia table-striped table-hover">
<center><h4>LAPORAN DAERAH TERKENA BANJIR KAB/KOTA BEKASI TAHUN <?php echo date('Y'); ?></h4>
<h5>PEMERINTAH KAB/KOTA BEKASI</h5>
<p>Tanggal :</p><?php echo date('d-m-Y'); ?><br><br></center>
                                    <thead>
                                        <tr>	
											                      <th>Nama Daerah</th>
                                            <th>Ketinggian</th>
                                            <th>Jumlah Posko</th>
                                            <th>Jumlah Pengungsi</th>
                                            
                                         </tr>
                                    </thead>
                                    <tbody>
									 	<?php  $total=0;$totalkorban=0;if(!empty($query)) { foreach($query as $row) { ?> 
                                        <tr>
                                             <td style="text-align:left;font-weight:bold">
											<span class="label label-warning"><?php echo $row->nama_daerah ?></span>
											</td>
                                            <td style="text-align:left;font-weight:bold">
											<span class="label label-warning"><?php echo $row->ketinggian_air ?></span>
											</td>
                                            <td><?php echo $row->jmlposko ?></td>
                                            <td><?php echo $row->jmlkorban ?></td>
                                            
                                  
                                       
										</tr>
										<?php $total=$total+$row->jmlposko;$totalkorban=$totalkorban+$row->jmlkorban;} } ?>
										                      <tr>
                                            <td colspan="2"> <b>Total Posko</b></td>
                                            <td><?php echo  number_format($total) ?></td>
                                            <td></td>
                      										</tr>
                                          <tr>
                                            <td colspan="3"> <b>Total Korban</b></td>
                                            <td><?php echo  number_format($totalkorban) ?></td>
                                          </tr>
                                    </tbody>
                                </table><br>
								 
								 