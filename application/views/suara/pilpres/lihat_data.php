<div class="row">
    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Suara</li>
		<li class="active">Pilpres</li>
	</ol>
	<div class="col-md-12">
		<h2 class="page-header">
			Suara Pilpres
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
								<h5 class="modal-title" id="exampleModalLabel">Tambah Suara Pilpres</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="pilpres/post" method="POST">


									<div class="form-group">
										<label>id tps* </label>
										<select class="form-control" name="id_tps">
											<option disabled selected>Pilih TPS</option>
											<?php 
                            $provinsi = $this->model_pilpres->get_tps();
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
									<?php echo $r->waktu?>
								</td>

								<td class="center">

									<a title="Edit" class="btn btn-default" href="<?php echo site_url('pilpres/edit/'.$r->id_suara);?>"><span
										 class="glyphicon glyphicon-pencil"></span></a>

									<a title="Hapus" class="btn btn-default" href="<?php echo site_url('pilpres/delete/'.$r->id_suara);?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span
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
