<?php 
	include 'layout.php'; 
	$id = $_GET['id'];
	$query = mysqli_query($conn, 'SELECT * FROM tb_klinik WHERE id_klinik='.$id.'');
	if (mysqli_num_rows($query) > 0) {
		// output data of each row
		while($cabang = mysqli_fetch_assoc($query)) {
			$cabang_target = $cabang['cabang_klinik'];
		}
	}
?>
				<div class="col-sm-9">
					<div class="panel panel-primary">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><span class="glyphicon glyphicon-duplicate"></span> Mengelola Cabang</h3>
					  	</div>
					  	<div class="panel-body">			
							<form class="form-horizontal" method="post" action="<?php echo "process/u_cabang.php?id=".$id.""; ?>">
								<fieldset>
								    <legend>Ubah Cabang</legend>
								    <div class="form-group">
								      	<label class="col-sm-3 control-label">Lokasi Cabang Klinik</label>
								      	<div class="col-sm-6">
								        	<input class="form-control" name="cabang_klinik" placeholder="Lokasi Cabang Klinik. Contoh: Tembalang" type="text" maxlength="30" value="<?php echo $cabang_target; ?>" required>
								      	</div>
								    </div>
								    <div class="form-group">
								      	<div class="col-sm-9 col-sm-offset-3">
								        	<button type="submit" class="btn btn-default">Simpan</button>
								      	</div>
								    </div>
								</fieldset>
							</form>
						</div>
					</div> <!-- End of Panel -->
				</div> <!-- End of Main Content (Second col-sm-9) -->
<?php include 'layout2.php' ?>