                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Data Master</li>
		<li class="active">Caleg</li>
	</ol>
                    
                    <div class="col-md-12">
                        <h2 class="page-header">
                           Caleg
                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Caleg
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Caleg</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Caleg/post" method="POST">
            <div class="form-group">
            <label>Nama* </label>
            <input type="text" name="nama" class="form-control" required="">
            </div>


            <div class="form-group">
            <label>Kategori* </label>
            <select name="kategori" class="form-control" name="kategori">
                <option value="DPR RI">DPR RI</option>
                <option value="DPRD PROV">DPRD PROV</option>
                <option value="DPRD KAB/KOTA">DPRD KAB/KOTA</option>
            </select>
            </div>

            <div class="form-group">
            <label>Partai* </label>
            <select class="form-control" name="id_partai">
                        <option disabled selected>Pilih Partai</option>
                        <?php 
                            $partai = $this->model_caleg->get_partai();
                            foreach ($partai->result() as $row) {  
                                echo "<option value='".$row->id_partai."'>".$row->nama."</option>";
                            }

                         ?>
                    </select>
            </div>


            <div class="form-group">
            <label>Nomor Urut* </label>
            <input type="number" name="no_urut" class="form-control" required="">
            </div>

            <div class="form-group">
            <label>Dapil* </label>
            <input type="number" name="dapil" class="form-control" required="">
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
                                                <th>Id Caleg</th>
                                                <th>Nama Caleg</th>
                                                <th>Kategori</th>
                                                <th>Partai</th>
                                                <th>Dapil</th>
                                                <th>No Urut</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                               <td><?php echo $no ?></td>
                                                <td><?php echo $r->id_caleg?></td>
                                               <td><?php echo $r->nama?></td>
                                               <td><?php echo $r->kategori?></td>
<?php  $partai = $this->model_caleg->getPartai($r->id_partai)->row_array();
      ?>                                                
                                               <td><?php echo $partai['nama']?></td>
                                               <td><?php echo $r->dapil?></td>
                                               <td><?php echo $r->no_urut?></td>
                                               
                                               
                                                <td class="center">
                                                    
                                                    <a title="Edit" class="btn btn-default" href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    
                                                    <a title="Hapus" class="btn btn-default" href="#"
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

