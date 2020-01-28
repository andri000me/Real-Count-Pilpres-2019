<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit Kecamatan
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Kecamatan/edit'); ?>
               
               <div class="form-group">
                                    <label>Id Kecamatan</label>
                                    <input type="text" readonly name="id_kecamatan" class="form-control" required value="<?php echo $record['id_kecamatan']?>" readonly>
                                </div> 
               
                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $record['nama']?>">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Kode Kabupaten</label>
                                    <input type="text" name="id_kab" class="form-control" required value="<?php echo $record['id_kabkota']?>"readonly>
                                    
                                </div>
            <div class="form-group">
                                    <label>Kordapil</label>
                                    <input type="text" name="dapil" class="form-control" required value="<?php echo $record['dapil']?>">
                                    
                                </div>

                                
                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Kecamatan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
