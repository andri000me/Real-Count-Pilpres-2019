<div class="row">
	<ol class="breadcrumb">
		<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
		<li class="active">Dashboard</li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Dashboard</h1>
	</div>
</div>

<div class="panel panel-container">
	<div class="row">
		<div class="col-xs-6 col-md-3 col-lg-4 no-padding">
			<div class="panel panel-teal panel-widget border-right">
				<div class="row no-padding"><a href = "<?php echo base_url() ?>Partai"><em class="fa fa-xl fa-shopping-cart color-blue"></em></a>
					<div class="large"><?php echo $jumlahPartai ?></div>
					<div class="text-muted">Jumlah Partai</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 col-lg-4 no-padding">
			<div class="panel panel-blue panel-widget border-right">
				<div class="row no-padding"><a href = "<?php echo base_url() ?>Saksi"><em class="fa fa-xl fa-comments color-orange"></em></a>
					<div class="large"><?php echo $jumlahSaksi ?></div>
					<div class="text-muted">Jumlah Saksi</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 col-lg-4 no-padding">
			<div class="panel panel-orange panel-widget border-right">
				<div class="row no-padding"><a href = "<?php echo base_url() ?>Tps"><em class="fa fa-xl fa-users color-teal"></em></a>
					<div class="large"><?php echo $jumlahTps ?></div>
					<div class="text-muted">Jumlah Tps</div>
				</div>
			</div>
		</div>

	</div>
	<!--/.row-->
</div>


<div class="panel panel-container">
	<div class="row">
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
					<span>
						<?php  foreach ($this->model_suara->getPersenPilpres1() as $r) {
                                        echo $r['total'] ;  }?>
						%
					</span>
				</div>
			</div>


			<div class="col-md-6">
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
					<span>
						<?php  foreach ($this->model_suara->getPersenPilpres2() as $r) {
                                        echo $r['total'] ;  }?>
						%
					</span>
				</div>
			</div>

		</div>




		<hr>
	</div>
</div>
