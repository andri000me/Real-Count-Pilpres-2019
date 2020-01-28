<div class="row">
	<div class="col-md-12">
		<h2 class="page-header">
			Edit DPD
		</h2>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo form_open('Daftar_dpd/edit'); ?>

				<div class="form-group">
					<label>Id DPD</label>
					<input type="text" readonly name="id_daftar_dpd" class="form-control" required value="<?php echo $record['id_daftar_dpd']?>"
					 readonly>
				</div>

				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" required value="<?php echo $record['nama']?>">
				</div>


				<div class="form-group">
					<label>Kab/Kota</label>
					<input type="text" name="kabkota" class="form-control" required value="<?php echo $record['kabkota']?>">

				</div>

				<div class="form-group">
					<label>Provinsi</label>

					<select class="form-control" name="provinsi">
						<option value="ACEH">ACEH</option>
						<option value="SUMATERA UTARA">SUMATERA UTARA</option>
						<option value="SUMATERA BARAT">SUMATERA BARAT</option>
						<option value="RIAU">RIAU</option>
						<option value="JAMBI">JAMBI</option>
						<option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
						<option value="BENGKULU">BENGKULU</option>
						<option value="LAMPUNG">LAMPUNG</option>
						<option value="KEP. BANGKA BELITUNG">KEP. BANGKA BELITUNG</option>
					</select>

				</div>

				<div class="form-group">
					<label>No Urut</label>
					<input type="number" name="no_urut" class="form-control" required value="<?php echo $record['no_urut']?>">

				</div>




				<button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
				<?php echo anchor('Daftar_dpd','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
				</form>
			</div>
		</div>
		<!-- /. PANEL  -->
	</div>
</div>
<!-- /. ROW  -->
