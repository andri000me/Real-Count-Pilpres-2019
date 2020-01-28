<div class="row">
    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Daftar DPD</li>
	</ol>
    
	<div class="col-md-12">
		<h2 class="page-header">
			DPD
		</h2>
	</div>
</div>
<!-- /. ROW  -->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Tambah DPD
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah DPD</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="Daftar_dpd/post" method="POST">
									<div class="form-group">
										<label>Nama* </label>
										<input type="text" name="nama" class="form-control" required="">
									</div>


									<div class="form-group">
										<label>Provinsi* </label>
										<select name="provinsi" class="form-control" name="provinsi">
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
										<label>Nomor Urut* </label>
										<input type="number" name="no_urut" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>Kab/Kota* </label>
										<input type="text" name=" kabkota" class="form-control" required="">
									</div>




									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" name="submit" class="btn btn-primary">Tambah</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama DPD</th>
								<th>Kab/Kota</th>
								<th>Provinsi</th>
                                <th>No urut</th>
								<th>Aksi</th>

							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($record->result() as $r) { ?>
							<tr class="gradeU">
								<td>
									<?php echo $no ?>
								</td>
								<td>
									<?php echo $r->nama?>
								</td>
								<td>
									<?php echo $r->kabkota?>
								</td>

								<td>
									<?php echo $r->provinsi?>
								</td>
								<td>
									<?php echo $r->no_urut?>
								</td>


								<td class="center">

									<a title="Edit" class="btn btn-default" href="<?php echo site_url('Daftar_dpd/edit/'.$r->id_daftar_dpd);?>"><span class="glyphicon glyphicon-pencil"></span></a>

									<a title="Hapus" class="btn btn-default" href="<?php echo site_url('Daftar_dpd/delete/'.$r->id_daftar_dpd);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span
										 class="glyphicon glyphicon-remove"></span></a>
								</td>
							</tr>
							<?php $no++; } ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!-- /. PANEL  -->
	</div>
</div>
<!-- /. ROW  -->



<!-- Button trigger modal -->
