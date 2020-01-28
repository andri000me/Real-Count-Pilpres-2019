<div class="row">
    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Suara</li>
		<li class="active">DPRD Kabupaten/Kota</li>
	</ol>
	<div class="col-md-12">
		<h2 class="page-header">
			Suara DPRD Kabkota
		</h2>
	</div>
</div>
<!-- /. ROW  -->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Tambah Suara
				</button>

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Suara DPRD Kab/kota</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="Dprd_kabkota/post" method="POST">

                                <div class="form-group">
										<label>Id Tps* </label>
										<select class="form-control" name="id_tps">
											<option disabled selected>Pilih Tps</option>
											<?php $tps=$this->model_dprdkabkota->get_tps();

											foreach ($tps->result() as $row_jenis) {
												echo "<option value='".$row_jenis->id_tps."'>".$row_jenis->id_tps."</option>";
											}

											?>
										</select>
									</div>

									<div class="form-group">
										<label>Partai* </label>
										<select class="form-control" name="id_partai">
											<option disabled selected>Pilih Partai</option>
											<?php $partai=$this->model_dprdkabkota->get_partai();

											foreach ($partai->result() as $row_jenis) {
												echo "<option value='".$row_jenis->id_partai."'>".$row_jenis->nama."</option>";
											}

											?>
										</select>
									</div>

									<div class="form-group">
										<label>suara 1* </label>
										<input type="text" name="caleg_1" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 2* </label>
										<input type="text" name="caleg_2" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 3* </label>
										<input type="text" name="caleg_3" class="form-control" required="">
									</div>
                                    
                                    <div class="form-group">
										<label>suara 4* </label>
										<input type="text" name="caleg_4" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 5* </label>
										<input type="text" name="caleg_5" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 6* </label>
										<input type="text" name="caleg_6" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 7* </label>
										<input type="text" name="caleg_7" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 8* </label>
										<input type="text" name="caleg_8" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 9* </label>
										<input type="text" name="caleg_9" class="form-control" required="">
									</div>

                                    <div class="form-group">
										<label>suara 10* </label>
										<input type="text" name="caleg_10" class="form-control" required="">
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
								<th>id tps</th>
								<th>Partai</th>
								<th>Suara 1</th>
								<th>Suara 2</th>
								<th>Suara 3</th>
								<th>Suara 4</th>
								<th>Suara 5</th>
								<th>Suara 6</th>
								<th>Suara 7</th>
								<th>Suara 8</th>
								<th>Suara 9</th>
								<th>Suara 10</th>
								<th>Waktu</th>
								<th>Aksi</th>

							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($record->result() as $r) { ?>
							<tr class="gradeU">
								<td>
									<?php echo $no?>
								</td>
								<td>
									<?php echo $r->id_tps?>
								</td>
								<?php  $partai = $this->model_dprdkabkota->getPartai($r->id_partai)->row_array();
      ?>
								<td>
									<?php echo $partai['nama']?>
								</td>

								<td>
									<?php echo $r->caleg_1?>
								</td>
								<td>
									<?php echo $r->caleg_2?>
								</td>
								<td>
									<?php echo $r->caleg_3?>
								</td>
								<td>
									<?php echo $r->caleg_4?>
								</td>
								<td>
									<?php echo $r->caleg_5?>
								</td>
								<td>
									<?php echo $r->caleg_6?>
								</td>
								<td>
									<?php echo $r->caleg_7?>
								</td>
								<td>
									<?php echo $r->caleg_8?>
								</td>
								<td>
									<?php echo $r->caleg_9?>
								</td>
								<td>
									<?php echo $r->caleg_10?>
								</td>
								<td>
									<?php echo $r->waktu?>
								</td>

								<td class="center">

									<a title="Edit" class="btn btn-default" href="<?php echo site_url('Dprd_kabkota/edit/'.$r->id_suara);?>"><span class="glyphicon glyphicon-pencil"></span></a>

									<a title="Hapus" class="btn btn-default" href="<?php echo site_url('Dprd_kabkota/delete/'.$r->id_suara);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
										<span class="glyphicon glyphicon-remove"></span></a>
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
