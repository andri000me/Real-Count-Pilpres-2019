<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Real Count App</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
<script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
 
  <link href="<?php echo base_url(); ?>assets/css/jquery.autocomplete.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/images/favicon.jpeg" rel="shortcut icon">
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>
</head>
<style type="text/css">
  .row{
    margin-left: 0;
    margin-right: 0;
  }
  .pagination{
    float: right;
  }
  .dataTables_filter{
    float: right;
  }
</style>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span>REAL</span>COUNT</a>
        <ul class="nav navbar-top-links navbar-right">
          
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <!-- <em class="fa fa-bell"></em> --><span class="glyphicon glyphicon-option-vertical"></span>
          </a>
            <ul class="dropdown-menu dropdown-alerts">
              <li><a href="#">
                <div><em class="fa fa-envelope"></em> Profil
                  <span class="pull-right text-muted small"></span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-heart"></em> Settings
                  <span class="pull-right text-muted small"></span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url() ?>Auth/logout" onclick="return confirm('Apakah anda yakin ingin keluar?')">
                <div><em class="fa fa-user"></em> Logout
                  <span class="pull-right text-muted small">keluar</span></div>
              </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
        <img src="<?php echo base_url() ?>/assets/images/favicon.jpeg" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">Admin</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li><a <?php if($this->uri->segment(1)=="Dashboard"){echo 'class="active"';}?> href="<?php echo base_url() ?>Dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
      
      <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
        <em class="fa fa-navicon">&nbsp;</em> Suara <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul 
        <?php if($this->uri->segment(1)=="Pilpres"|
          $this->uri->segment(1)=="Dpd_ri"|
          $this->uri->segment(1)=="Dpr_ri"|
          $this->uri->segment(1)=="Dprd_prov"|
          $this->uri->segment(1)=="Dprd_kabkota")
        {
          echo 'class="children collapse in"';
        }else{
          echo 'class="children collapse"';
        }?>
        id="sub-item-3">
          <li><a <?php if($this->uri->segment(1)=="Pilpres"){echo 'class="active"';}?> href="<?php echo base_url() ?>Pilpres">
            <span class="fa fa-arrow-right">&nbsp;</span> PILPRES
          </a></li>
          <li><a <?php if($this->uri->segment(1)=="Dpd_ri"){echo 'class="active"';}?> href="<?php echo base_url() ?>Dpd_ri">
            <span class="fa fa-arrow-right">&nbsp;</span> DPD RI
          </a></li>
          <li><a <?php if($this->uri->segment(1)=="Dpr_ri"){echo 'class="active"';}?> href="<?php echo base_url() ?>Dpr_ri">
            <span class="fa fa-arrow-right">&nbsp;</span> DPR RI
          </a></li>
          
          <li><a <?php if($this->uri->segment(1)=="Dprd_prov"){echo 'class="active"';}?> href="<?php echo base_url() ?>Dprd_prov">
            <span class="fa fa-arrow-right">&nbsp;</span> DPRD Provinsi
          </a></li>
          <li><a <?php if($this->uri->segment(1)=="Dprd_kabkota"){echo 'class="active"';}?> href="<?php echo base_url() ?>Dprd_kabkota">
            <span class="fa fa-arrow-right">&nbsp;</span> DPRD Kab/Kota
          </a></li>
        </ul>
      </li>
      
      
      <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
        <em class="fa fa-navicon">&nbsp;</em> Grafik <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul <?php if($this->uri->segment(1)=="Grafik_tes"|
          $this->uri->segment(1)=="Grafik_kabupaten"|
          $this->uri->segment(1)=="Grafik_kecamatan"|
          $this->uri->segment(1)=="Grafik_kelurahan")
        {
          echo 'class="children collapse in"';
        }else{
          echo 'class="children collapse"';
        }?> id="sub-item-2">
          <li><a <?php if($this->uri->segment(2)=="grafik_prov"){echo 'class="active"';}?> href="<?php echo base_url() ?>Grafik_tes/grafik_prov">
            <span class="fa fa-arrow-right">&nbsp;</span> Provinsi
          </a></li>
          <li><a <?php if($this->uri->segment(2)=="grafik_kab"){echo 'class="active"';}?> href="<?php echo base_url() ?>Grafik_kabupaten/grafik_kab">
            <span class="fa fa-arrow-right">&nbsp;</span> Kabupaten
          </a></li>
          <li><a <?php if($this->uri->segment(2)=="grafik_kec"){echo 'class="active"';}?> href="<?php echo base_url() ?>Grafik_tes/grafik_kec">
            <span class="fa fa-arrow-right">&nbsp;</span> Kecamatan
          </a></li>
          <li><a <?php if($this->uri->segment(2)=="grafik_kel"){echo 'class="active"';}?> href="<?php echo base_url() ?>Grafik_tes/grafik_kel">
            <span class="fa fa-arrow-right">&nbsp;</span> Kelurahan
          </a></li>
          <li><a <?php if($this->uri->segment(2)=="grafik_tps"){echo 'class="active"';}?> href="<?php echo base_url() ?>Grafik_tes/grafik_tps">
            <span class="fa fa-arrow-right">&nbsp;</span> TPS
          </a></li>
        </ul>
      </li>

      <li class="parent "><a data-toggle="collapse" href="#sub-item-1" >
        <em class="fa fa-navicon">&nbsp;</em> Data Master <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul 
        <?php if($this->uri->segment(1)=="Tps"|
          $this->uri->segment(1)=="Partai"|
          $this->uri->segment(1)=="Provinsi"|
          $this->uri->segment(1)=="Kabkota"|
          $this->uri->segment(1)=="Kecamatan"|
          $this->uri->segment(1)=="Kelurahan"|
          $this->uri->segment(1)=="Caleg"|
          $this->uri->segment(1)=="Daftar_dpd")
        {
          echo 'class="children collapse in"';
        }else{
          echo 'class="children collapse"';
        }?> id="sub-item-1">

          <li ><a <?php if($this->uri->segment(1)=="Partai"){echo 'class="active"';}?> href="<?php echo base_url() ?>Partai">
            <span class="fa fa-arrow-right">&nbsp;</span> Partai
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Caleg"){echo 'class="active"';}?> href="<?php echo base_url() ?>Caleg">
            <span class="fa fa-arrow-right">&nbsp;</span> Caleg
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Daftar_dpd"){echo 'class="active"';}?> href="<?php echo base_url() ?>Daftar_dpd">
            <span class="fa fa-arrow-right">&nbsp;</span> Daftar dpd
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Provinsi"){echo 'class="active"';}?> href="<?php echo base_url() ?>Provinsi">
            <span class="fa fa-arrow-right">&nbsp;</span> Provinsi
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Kabkota"){echo 'class="active"';}?> href="<?php echo base_url() ?>Kabkota">
            <span class="fa fa-arrow-right">&nbsp;</span> Kabupaten
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Kecamatan"){echo 'class="active"';}?> href="<?php echo base_url() ?>Kecamatan">
            <span class="fa fa-arrow-right">&nbsp;</span> Kecamatan
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Kelurahan"){echo 'class="active"';}?> href="<?php echo base_url() ?>Kelurahan">
            <span class="fa fa-arrow-right">&nbsp;</span> Kelurahan
          </a></li>
          <li ><a <?php if($this->uri->segment(1)=="Tps"){echo 'class="active"';}?> href="<?php echo base_url() ?>Tps">
            <span class="fa fa-arrow-right">&nbsp;</span> TPS
          </a></li>
        </ul>
      </li>
      <li <?php if($this->uri->segment(1)=="lp.blmmasuk"){echo 'class="active"';}?>><a href="#"><em class="fa fa-calendar">&nbsp;</em> Lp. Belum Masuk</a></li>
      <li><a <?php if($this->uri->segment(1)=="Saksi"){echo 'class="active"';}?> href="<?php echo base_url() ?>Saksi"><em class="fa fa-toggle-off">&nbsp;</em> Saksi</a></li>
      <li><a href="Auth/logout" onclick="return confirm('Apakah anda yakin ingin keluar?')"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div style="width: 100%">
    <?php echo $contents; ?>
    
</div>
  </div>  <!--/.main-->
  
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.autocomplete.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>


  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
  <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js">
  
    </script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
</body>
</html>