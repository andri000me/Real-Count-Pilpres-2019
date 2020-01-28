<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit Kabupaten Kota
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Kabkota/edit'); ?>
               
               <div class="form-group">
                                    <label>Id Kabkota</label>
                                    <input type="text" readonly name="id_kabkota" class="form-control" required value="<?php echo $record['id_kabkota']?>" readonly>
                                </div> 
               
                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $record['nama']?>">
                                    
                                </div>
                                <div class="form-group">
            <label>kode_provinsi* </label>
             <select class="form-control" name="id_provinsi">
                        <option disabled selected>Pilih Provinsi</option>
                        <?php 
                            $provinsi = $this->model_kabkota->get_prov();
                            foreach ($provinsi->result() as $row_jenis) {  
                                echo "<option value='".$row_jenis->id_provinsi."' selected>".$row_jenis->nama."</option>";
                            }

                         ?>
                    </select>
            </div>

                               

                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Kabkota','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
