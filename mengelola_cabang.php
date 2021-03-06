<?php include 'layout.php'; ?>
				<div class="col-sm-9">
					<div class="panel panel-primary">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><span class="glyphicon glyphicon-duplicate"></span> Mengelola Cabang</h3>
					  	</div>
					  	<div class="panel-body">
						  	<div class="col-sm-11 col-sm-offset-1">
						  		<legend>Daftar Cabang</legend>
						  		<?php
						  			if (ISSET($_GET['balasan']) AND ($_GET['balasan']==1)) {
						  			  	echo '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><span class="glyphicon glyphicon-ok"></span> Data berhasil ditambahkan</div>';
						  			} elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==2)) {
						  			  	echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><span class="glyphicon glyphicon-exclamation-sign"></span> Kesalahan telah terjadi</div>';
						  			} elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==3)) {
						  			  	echo '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><span class="glyphicon glyphicon-ok"></span> Data berhasil dihapus</div>';
						  			} elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==4)) {
						  			  	echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><span class="glyphicon glyphicon-exclamation-sign"></span> Gagal menghapus data</div>';
						  			} elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==5)) {
						  			  	echo '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><span class="glyphicon glyphicon-ok"></span> Data berhasil diubah</div>';
						  			} elseif (ISSET($_GET['balasan']) AND ($_GET['balasan']==6)) {
						  			  	echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><span class="glyphicon glyphicon-exclamation-sign"></span> Gagal mengubah data</div>';
						  			}

						  			# Menampilkan Data Tabel
									$i=1;
									$query = mysqli_query($conn, "SELECT * FROM klinik ORDER BY id_klinik DESC");
									if (mysqli_num_rows($query) > 0) {
										echo '
										        <table class="table table-bordered table-hover">
													<thead>
														<tr>
															<th>No</th>
															<th>Cabang Klinik</th>
															<th>Alamat</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody>';
										while($cabang = mysqli_fetch_assoc($query)) {
											echo '		<tr>
															<td>'.$i.'</td>
															<td>'.$cabang['cabang_klinik'].'</td>
															<td>'.$cabang['alamat'].'</td>
															<td>
																<a href="ubah_cabang.php?id='.$cabang['id_klinik'].'" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
																<a href="process/hapus_cabang.php?id='.$cabang['id_klinik'].'" onclick="return hapus()" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-remove"></span></a>
											        		</td>
														</tr>
												';
												$i++;
										}
										echo '
													</tbody>
												</table>
										';
									} else {
										echo '
										  	<div class="alert alert-dismissible alert-warning">
  												<button type="button" class="close" data-dismiss="alert">&times;</button>
  												<Strong>Data masih kosong</strong>. Silahkan tambah data cabang.
											</div>
										';
									}
								?>
						  	</div>
					  	</div>
					</div>
				</div> <!-- End of Main Content (Second col-sm-9) -->
<?php include 'layout2.php' ?>