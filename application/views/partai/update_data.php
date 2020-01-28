<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Edit Partai
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Partai/edit'); ?>
               
               <div class="form-group">
                                    <label>Id Partai</label>
                                    <input type="number" name="id_partai" class="form-control" required value="<?php echo $record['id_partai']?>" readonly>
                                    
                                </div>
               
                    <div class="form-group">
                                    <label>No Urut</label>
                                    <input type="number" name="no_urut" class="form-control" required value="<?php echo $record['no_urut']?>">
                                    
                                </div>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $record['nama']?>">
                                </div>
                                

                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Partai','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
