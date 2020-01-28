<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit Kelurahan
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Kelurahan/edit'); ?>
               
               <div class="form-group">
                                    <label>Id Kelurahan</label>
                                    <input type="text" readonly name="id_kelurahan" class="form-control" required value="<?php echo $record['id_kelurahan']?>" readonly>
                                </div> 
               
                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $record['nama']?>">
                                    
                                </div>

                <div class="form-group">
            <label>Kode Kecamatan* </label>
            <select class="form-control" name="id_kec">
                        <option disabled selected>Pilih Kecamatan</option>
                        <?php 
                            $provinsi = $this->model_kelurahan->get_kec();
                            foreach ($provinsi->result() as $row_jenis) {  
                                echo "<option value='".$row_jenis->id_kecamatan."'>".$row_jenis->nama."</option>";
                            }

                         ?>
                    </select>
            </div>

                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Kelurahan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
