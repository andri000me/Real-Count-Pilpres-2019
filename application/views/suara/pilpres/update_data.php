<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            EDIT SUARA PILPRES
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Pilpres/edit'); ?>
              <div class="form-group">
            <label>id suara* </label>
            <input type="number" name="id_suara" value="<?php echo $record['id_suara']?>" class="form-control" readonly>
            </div> 
            <div class="form-group">  
              <label>id tps* </label>
            <input type="number" name="id_tps" value="<?php echo $record['id_tps']?>" class="form-control" readonly>
            </div>
           
            <div class="form-group">
            <label>Suara 1* </label>
            <input type="number" name="suara1" value="<?php echo $record['suara1']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 2* </label>
            <input type="number" name="suara2" value="<?php echo $record['suara2']?>" class="form-control" required="">
            </div>
            
                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Pilpres','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
