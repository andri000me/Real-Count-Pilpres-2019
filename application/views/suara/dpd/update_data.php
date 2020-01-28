<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            EDIT SUARA DPD RI
        </h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('Dpd_ri/edit'); ?>
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
            <div class="form-group">
            <label>Suara 3* </label>
            <input type="number" name="suara3" value="<?php echo $record['suara3']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 4 </label>
            <input type="number" name="suara4" value="<?php echo $record['suara4']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 5* </label>
            <input type="number" name="suara5" value="<?php echo $record['suara5']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 6* </label>
            <input type="number" name="suara6" value="<?php echo $record['suara6']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 7* </label>
            <input type="number" name="suara7" value="<?php echo $record['suara7']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 8* </label>
            <input type="number" name="suara8" value="<?php echo $record['suara8']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 9* </label>
            <input type="number" name="suara9" value="<?php echo $record['suara9']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 10* </label>
            <input type="number" name="suara10" value="<?php echo $record['suara10']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 11* </label>
            <input type="number" name="suara11" value="<?php echo $record['suara11']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 12* </label>
            <input type="number" name="suara12" value="<?php echo $record['suara12']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 13* </label>
            <input type="number" name="suara13" value="<?php echo $record['suara13']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 14* </label>
            <input type="number" name="suara14" value="<?php echo $record['suara14']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 15* </label>
            <input type="number" name="suara15" value="<?php echo $record['suara15']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 16* </label>
            <input type="number" name="suara16" value="<?php echo $record['suara16']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 17* </label>
            <input type="number" name="suara17" value="<?php echo $record['suara17']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 18* </label>
            <input type="number" name="suara18" value="<?php echo $record['suara18']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 19* </label>
            <input type="number" name="suara19" value="<?php echo $record['suara19']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 20* </label>
            <input type="number" name="suara20" value="<?php echo $record['suara20']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 21* </label>
            <input type="number" name="suara21" value="<?php echo $record['suara21']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 22* </label>
            <input type="number" name="suara22" value="<?php echo $record['suara22']?>" class="form-control" required="">
            </div>
            <div class="form-group">
            <label>Suara 23* </label>
            <input type="number" name="suara23" value="<?php echo $record['suara23']?>" class="form-control" required="">
            </div>

            
                               
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> |
                <?php echo anchor('Dpd_ri','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>
</div>
<!-- /. ROW  -->
