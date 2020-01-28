<style type="text/css">
  .in-search{
    border-radius: 5px;
    outline: none;
    border:0.5px grey solid;
    height: 30px; width: 150px;
    font-size: 15px;
    padding: 5px;
  }
</style>                
                <div class="row">
                    <ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Grafik</li>
		<li class="active">Suara Provinsi</li>
	</ol>

                    <div class="col-md-12">
                        <h2 class="page-header">
                           Suara Provinsi

                        </h2>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <form action="#" method="POST"> 
                              <!-- <input type="search" name="search" class="in-search" placeholder="Masukkan Kode TPS"> -->
                              <select class="in-search">
                                <option>Riau</option>

                              </select>
                              <button class="btn btn-success">Search</button>
                            </form>

                            </div>
                            <div class="panel-body">




 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Pilpres</a></li>
    <li><a data-toggle="tab" href="#menu2">DPD RI</a></li>
    <li><a data-toggle="tab" href="#menu3">DPR RI</a></li>
    <li><a data-toggle="tab" href="#menu4">DPRD Provinsi</a></li>
    <li><a data-toggle="tab" href="#menu5">DPRD Kab/Kota</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <h3>Pilpres</h3>
<div class="row" style="text-align: center;">
  

  <div class="col-md-6">
      <div class="nama-pasangan">
        <b>Joko Widodo - Ma'ruf Amin</b>
      </div><br>

      <div class="image">
        <img src="<?php echo base_url() ?>assets/images/foto/1.png" width="300" height="150">
      </div>
      <br>

      <div class="suara">
        <span>Jumlah Suara = <?php $no=1; foreach ($record->result() as $r) { ?>
                            <?php echo $r->suara1?>
                           <?php } ?></span>                  
      </div>
      
      <div class="persen">
        <span><?php  foreach ($this->model_suara->getPersenPilpres1() as $r) {
        echo $r['total'] ;  }?> %
               </span> 
      </div>
  </div>


   <div class="col-md-6" >
      <div class="nama-pasangan">
        <b>Prabowo Subianto - Sandiago Salahuddin Uno</b>
      </div><br>

      <div class="image">
        <img src="<?php echo base_url() ?>assets/images/foto/2.png" width="300" height="150">
      </div>
      <br>
      
      <div class="suara">
        <span>Jumlah Suara = <?php $no=1; foreach ($record->result() as $r) { ?>
                            <?php echo $r->suara2?>
                           <?php } ?></span>
      </div>
      
      <div class="persen">
        <span><?php  foreach ($this->model_suara->getPersenPilpres2() as $r) {
        echo $r['total'] ;  }?> %
               </span> 
      </div>
  </div>

</div>


      <canvas id="tes" width="600" height="400"></canvas>

<script>
var ctx = document.getElementById("tes").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Joko Widodo - Ma'ruf Amin", "Prabowo Subianto - Sandiago Salahuddin Uno"],
        datasets: [{
            label: '# jumlah suara',
            data: [<?php $no=1; foreach ($record->result() as $r) { ?>
                            <?php echo $r->suara1?>,
                            <?php echo $r->suara2?>
                           <?php } ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
 
<hr>
    </div>

<!-- <--------------> 

    <div id="menu2" class="tab-pane fade">
      <h3>GRAFIK DPD RI</h3>
     <canvas id="tes2" width="600" height="400"></canvas>

<script>
var ctx = document.getElementById("tes2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["Paslon 1","Paslon 2","Paslon 3","Paslon 4","Paslon 5","Paslon 6","Paslon 7","Paslon 8","Paslon 9","Paslon 10","Paslon 11","Paslon 12","Paslon 13","Paslon 14","Paslon 15","Paslon 16","Paslon 17","Paslon 18","Paslon 19","Paslon 20","Paslon 21","Paslon 22","Paslon 23"],
        datasets: [{
            label: '# jumlah suara',
            data: [<?php $no=1; foreach ($dpd->result() as $s) { ?>
                            <?php echo $s->suara1?>,
                            <?php echo $s->suara2?>,
                            <?php echo $s->suara3?>,
                            <?php echo $s->suara4?>,
                            <?php echo $s->suara5?>,
                            <?php echo $s->suara6?>,
                            <?php echo $s->suara7?>,
                            <?php echo $s->suara8?>,
                            <?php echo $s->suara9?>,
                            <?php echo $s->suara10?>,
                            <?php echo $s->suara11?>,
                            <?php echo $s->suara12?>,
                            <?php echo $s->suara13?>,
                            <?php echo $s->suara14?>,
                            <?php echo $s->suara15?>,
                            <?php echo $s->suara16?>,
                            <?php echo $s->suara17?>,
                            <?php echo $s->suara18?>,
                            <?php echo $s->suara19?>,
                            <?php echo $s->suara20?>,
                            <?php echo $s->suara21?>,
                            <?php echo $s->suara22?>,
                            <?php echo $s->suara23?>

                            
                           <?php } ?>


                           ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'red',
                'green',
                'blue',
                'lightblue',
                'pink',
                'brown',
                'yellow',
                'purple',
                '#4c576b',
                '#1a193d',
                '#a185b2',
                '#ab85b2',
                '#c98bc1',
                '#ef97d0',
                '#f28cab',
                '#99e27a',
                '#e0ef6e',
                '#efda62',
                '#e2994f',
                '#96330c'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

      
    </div>

<div id="menu3" class="tab-pane fade">
  <h3>GRAFIK DPR RI</h3>

  

     <canvas id="tes3" width="600" height="400"></canvas>

<script>
var ctx = document.getElementById("tes3").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["Caleg 1","Caleg 2","Caleg 3","Caleg 4","Caleg 5","Caleg 6","Caleg 7","Caleg 8","Caleg 9","Caleg 10"],
        datasets: [{
            label: '# jumlah suara',
            data: [<?php $no=1; foreach ($tps->result() as $s) { ?>
                            <?php echo $s->caleg_1?>,
                            <?php echo $s->caleg_2?>,
                            <?php echo $s->caleg_3?>,
                            <?php echo $s->caleg_4?>,
                            <?php echo $s->caleg_5?>,
                            <?php echo $s->caleg_6?>,
                            <?php echo $s->caleg_7?>,
                            <?php echo $s->caleg_8?>,
                            <?php echo $s->caleg_9?>,
                            <?php echo $s->caleg_10?>

                            
                           <?php } ?>


                           ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'red',
                'green',
                'blue',
                'lightblue',
                'pink',
                'brown',
                'yellow',
                'purple'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

      
    </div>



  </div>

<!-- tab -->








                            	
                                

                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->



                <!-- Button trigger modal -->













