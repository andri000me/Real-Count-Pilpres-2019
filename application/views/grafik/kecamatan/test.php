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
		<li class="active">Suara Kecamatan</li>
	</ol>

                    <div class="col-md-12">
                        <h2 class="page-header">
                           Suara Kecamatan

                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           Pilih Kecamatan
                            </div>
                            <div class="panel-body">

 
<form action="<?php echo base_url() ?>Grafik_kecamatan" method="POST">
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

  <div class="col-md-2" >
  <div class="form-group">
   <select name="kecamatan" id="kecamatan" class="form-control input-sm">
    <option value="">Select Kecamatan</option>
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
     $('#kecamatan').html('<option value="">Select kecamatan</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select Kabupaten</option>');
   $('#kecamatan').html('<option value="">Select Kecamatan</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Grafik_tes/fetch_kecamatan",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#kecamatan').html(data);
    }
   });
  }
  else
  {
   $('#kecamatan').html('<option value="">Select Kecamatan</option>');
  }
 });

 $('#kecamatan').change(function(){
  var kecamatan_id = $('#kecamatan').val();
  if(kecamatan_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Grafik_tes/fetch_kelurahan",
    method:"POST",
    data:{kecamatan_id:kecamatan_id},
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













