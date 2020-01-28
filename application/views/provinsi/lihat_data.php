                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Provinsi</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Provinsi
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Provinsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Provinsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Provinsi/post" method="POST">
            <div class="form-group">
            <label>Kode Provinsi* </label>
            <input type="text" name="id" class="form-control" required="">
            </div>

            <div class="form-group">
            <label>Nama* </label>
            <input type="text" name="nama" class="form-control" required="">
            </div>

            <div class="form-group">
            <label>Latitude* </label>
            <input type="text" name="lat" class="form-control" required="">
            </div>

            <div class="form-group">
            <label>Longitude* </label>
            <input type="text" name="lng" class="form-control" required="">
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
                                                <th>Kode Provinsi</th>
                                                <th>Nama</th>
                                                <th>Lat</th>
                                                <th>Lng</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                               <td><?php echo $no?></td>
                                                <td><?php echo $r->id_provinsi?></td>
                                               <td><?php echo $r->nama?></td>
                                               <td><?php echo $r->lat?></td>
                                               <td><?php echo $r->lng?></td>
                                               
                                                <td class="center">
                                                    
                                                    <a title="Edit" class="btn btn-default" href="<?php echo site_url('Provinsi/edit/'.$r->id_provinsi);?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    
                                                    <a title="Hapus" class="btn btn-default" href="<?php echo site_url('Provinsi/delete/'.$r->id_provinsi);?>"
                                                       onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="glyphicon glyphicon-remove"></a>
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

