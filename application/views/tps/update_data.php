<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit TPS
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Tps/edit'); ?>
               
               <div class="form-group">
                                    <label>Id TPS</label>
                                    <input type="text" readonly name="id_tps" class="form-control" required value="<?php echo $record['id_tps']?>" readonly>
                                </div> 
               
                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $record['nomor_tps']?>">
                                    
                                </div>

                                
            <div class="form-group">
            <label>Kode Kelurahan* </label>
            <select class="form-control" name="id_kelurahan">
                        <option disabled selected>Pilih Kelurahan</option>
                        <?php 
                            $provinsi = $this->model_tps->get_kel();
                            foreach ($provinsi->result() as $row_jenis) {  
                                echo "<option value='".$row_jenis->id_kelurahan."'>".$row_jenis->nama."</option>";
                            }

                         ?>
                    </select>
            </div>

                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Tps','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
