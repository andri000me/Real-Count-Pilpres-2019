                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Kelurahan</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           kecamatan
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah kecamatan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah kecamatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="kecamatan/post" method="POST">
            <div class="form-group">
            <label>Kode kecamatan* </label>
            <input type="text" name="id" class="form-control" required="">
            </div>

            <div class="form-group">
            <label>Nama* </label>
            <input type="text" name="nama" class="form-control" required="">
            </div>

            <div class="form-group">
            <label>Kode Kabupaten* </label>
             <select class="form-control" name="id_kab">
                        <option disabled selected>Pilih Kabupaten</option>
                        <?php 
                            $provinsi = $this->model_kecamatan->get_kab();
                            foreach ($provinsi->result() as $row_jenis) {  
                                echo "<option value='".$row_jenis->id_kabkota."'>".$row_jenis->nama."</option>";
                            }

                         ?>
                    </select>
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
                                                <th>Kode kecamatan</th>
                                                <th>Nama</th>
                                                <th>Kabupaten</th>
                                                <th>Kordapil</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                               <td><?php echo $no?></td>
                                                <td><?php echo $r->id_kecamatan?></td>
                                               <td><?php echo $r->nama?></td>
<?php  $kabupaten = $this->model_kecamatan->getKabupaten($r->id_kabkota)->row_array();
      ?>   
                                               <td><?php echo $kabupaten['nama']?></td>
                                               <td><?php echo $r->dapil?></td>
                                               
                                               
                                                <td class="center">
                                                    
                                                    <a title="Edit" class="btn btn-default" href="<?php echo site_url('kecamatan/edit/'.$r->id_kecamatan);?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    
                                                    <a title="Hapus" class="btn btn-default" href="<?php echo site_url('kecamatan/delete/'.$r->id_kecamatan);?>"
                                                       onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span class="glyphicon glyphicon-remove"></span></a>
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

