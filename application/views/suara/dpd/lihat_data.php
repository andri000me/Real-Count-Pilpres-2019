<div class="row">
    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Suara</li>
		<li class="active">DPD</li>
	</ol>
	<div class="col-md-12">
		<h2 class="page-header">
			Suara DPD
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

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Suara DPD</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="Dpd_ri/post" method="POST">

									<!-- 
            <div class="form-group">
            <label>id tps* </label>
            <input type="text" name="id_tps" class="form-control" required="">
            </div> -->

									<div class="form-group">
										<label>id tps* </label>
										<select class="form-control" name="id_tps">
											<option disabled selected>Pilih TPS</option>
											<?php $provinsi=$this->model_dpd_ri->get_tps();

											foreach ($provinsi->result() as $row_jenis) {
												echo "<option value='".$row_jenis->id_tps."'>".$row_jenis->id_tps."</option>";
											}

											?>
										</select>
									</div>



									<div class="form-group">
										<label>suara 1* </label>
										<input type="text" name="suara1" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 2* </label>
										<input type="text" name="suara2" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 3* </label>
										<input type="text" name="suara3" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 4* </label>
										<input type="text" name="suara4" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 5* </label>
										<input type="text" name="suara5" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 6* </label>
										<input type="text" name="suara6" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 7* </label>
										<input type="text" name="suara7" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 8* </label>
										<input type="text" name="suara8" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 9* </label>
										<input type="text" name="suara9" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 10* </label>
										<input type="text" name="suara10" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 11* </label>
										<input type="text" name="suara11" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 12* </label>
										<input type="text" name="suara12" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 13* </label>
										<input type="text" name="suara13" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 14* </label>
										<input type="text" name="suara14" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 15* </label>
										<input type="text" name="suara15" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 16* </label>
										<input type="text" name="suara16" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 17* </label>
										<input type="text" name="suara17" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 18* </label>
										<input type="text" name="suara18" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 19* </label>
										<input type="text" name="suara19" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 20* </label>
										<input type="text" name="suara20" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 21* </label>
										<input type="text" name="suara21" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 22* </label>
										<input type="text" name="suara22" class="form-control" required="">
									</div>

									<div class="form-group">
										<label>suara 23* </label>
										<input type="text" name="suara23" class="form-control" required="">
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
								<th>Tps</th>
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
								<th>Suara 11</th>
								<th>Suara 12</th>
								<th>Suara 13</th>
								<th>Suara 14</th>
								<th>Suara 15</th>
								<th>Suara 16</th>
								<th>Suara 17</th>
								<th>Suara 18</th>
								<th>Suara 19</th>
								<th>Suara 20</th>
								<th>Suara 21</th>
								<th>Suara 22</th>
								<th>Suara 23</th>
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
								<td>
									<?php echo $r->suara1?>
								</td>
								<td>
									<?php echo $r->suara2?>
								</td>
                                <td>
									<?php echo $r->suara3?>
								</td>
                                <td>
									<?php echo $r->suara4?>
								</td>
                                <td>
									<?php echo $r->suara5?>
								</td>
                                <td>
									<?php echo $r->suara6?>
								</td>
                                <td>
									<?php echo $r->suara7?>
								</td>
                                <td>
									<?php echo $r->suara8?>
								</td>
                                <td>
									<?php echo $r->suara9?>
								</td>
                                <td>
									<?php echo $r->suara10?>
								</td>
                                <td>
									<?php echo $r->suara11?>
								</td>
                                <td>
									<?php echo $r->suara12?>
								</td>
                                <td>
									<?php echo $r->suara13?>
								</td>
                                <td>
									<?php echo $r->suara14?>
								</td>
                                <td>
									<?php echo $r->suara15?>
								</td>
                                <td>
									<?php echo $r->suara16?>
								</td>
                                <td>
									<?php echo $r->suara17?>
								</td>
                                <td>
									<?php echo $r->suara18?>
								</td>
                                <td>
									<?php echo $r->suara19?>
								</td>
                                <td>
									<?php echo $r->suara20?>
								</td>
                                <td>
									<?php echo $r->suara21?>
								</td>
                                <td>
									<?php echo $r->suara22?>
								</td>
                                <td>
									<?php echo $r->suara23?>
								</td>
								<td>
									<?php echo $r->waktu?>
								</td>

								<td class="center">

									<a title="Edit" class="btn btn-default" href="<?php echo site_url('dpd_ri/edit/'.$r->id_suara);?>"><span
										 class="glyphicon glyphicon-pencil"></span></a>

									<a title="Hapus" class="btn btn-default" href="<?php echo site_url('dpd_ri/delete/'.$r->id_suara);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span
										 class="glyphicon glyphicon-remove"></a>
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
