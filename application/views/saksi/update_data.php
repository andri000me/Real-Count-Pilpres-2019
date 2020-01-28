<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit Provinsi
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Provinsi/edit'); ?>
               
               <div class="form-group">
                                    <label>Id Provinsi</label>
                                    <input type="text" readonly name="id_provinsi" class="form-control" required value="<?php echo $record['id_provinsi']?>" readonly>
                                </div> 
               
                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $record['nama']?>">
                                    
                                </div>

                                <div class="form-group">
                                    <label>Lat</label>
                                    <input type="number" name="lat" class="form-control" required value="<?php echo $record['lat']?>">
                                </div>
                                <div class="form-group">
                                    <label>Lat</label>
                                    <input type="number" name="lng" class="form-control" required value="<?php echo $record['lng']?>">
                                </div>

                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Provinsi','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
