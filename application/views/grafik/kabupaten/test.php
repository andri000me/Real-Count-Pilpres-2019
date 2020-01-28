<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <style>
 .box
 {
  width:100%;
  max-width: 650px;
  margin:0 auto;
 }
 </style>
 </head>            
                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Grafik</li>
		<li class="active">Suara Kabupaten</li>
	</ol>

                    <div class="col-md-12">
                        <h2 class="page-header">
                           Suara kabupaten

                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           Pilih kabupaten
                            </div>
                            <div class="panel-body">

 
<form action="<?php echo base_url() ?>Grafik_kabupaten" method="POST">
 <div class="col-md-2" > 
  <div class="form-group">
   <select name="country" id="country" class="form-control input-sm">
    <option value="">Select Provinsi</option>
    <?php
    foreach($country as $row)
    {
     echo '<option value="'.$row->id_provinsi.'">'.$row->nama.'</option>';
    }
    ?>
   </select>
  </div>
</div>
  
 <div class="col-md-2" > 
  <div class="form-group">
   <select name="kabkota" id="state" class="form-control input-sm">
    <option value="">Select Kabupaten</option>
   </select>
  </div>
  </div>

  




<button class="btn btn-success" type="submit" name="submit">Lihat</button>



</form>





                            	
                                

                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->



                
<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Grafik_tes/fetch_kabupaten",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#kabupaten').html('<option value="">Select kabupaten</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select Kabupaten</option>');
   $('#kabupaten').html('<option value="">Select kabupaten</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Grafik_tes/fetch_kabupaten",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#kabupaten').html(data);
    }
   });
  }
  else
  {
   $('#kabupaten').html('<option value="">Select kabupaten</option>');
  }
 });

 $('#kabupaten').change(function(){
  var kabupaten_id = $('#kabupaten').val();
  if(kabupaten_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Grafik_tes/fetch_kelurahan",
    method:"POST",
    data:{kabupaten_id:kabupaten_id},
    success:function(data)
    {
     $('#kelurahan').html(data);
    }
   });
  }
  else
  {
   $('#kelurahan').html('<option value="">Select Kelurahan</option>');
  }
 });

 $('#kelurahan').change(function(){
  var kelurahan_id = $('#kelurahan').val();
  if(kelurahan_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Grafik_tes/fetch_tps",
    method:"POST",
    data:{kelurahan_id:kelurahan_id},
    success:function(data)
    {
     $('#tps').html(data);
    }
   });
  }
  else
  {
   $('#tps').html('<option value="">Select TPS</option>');
  }
 });
 
});
</script>


                <!-- Button trigger modal -->













