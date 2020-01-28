<?php
class Grafik_kabupaten extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_suara');
        chek_session();
    }

 function index(){
  if (isset($_POST['submit'])) {
    $id = $this->input->post('kabkota');
    $data['idKabkota'] = $this->model_suara->Pilpres_kab($id);
    $data['idKabkotadpd'] = $this->model_suara->Dpd_kab($id);
    $data['idKabkotadprri'] = $this->model_suara->Dpr_ri($id);
    $data['idKabkotadprdkabkota'] = $this->model_suara->Dprd_kabkota($id);
    $data['idKabkotadprdprov'] = $this->model_suara->Dprd_prov($id);
    $data['country'] = $this->model_suara->fetch_partai();
    $this->template->load('template','grafik/kabupaten/tampil',$data);
    
  }
}

function grafik_kab(){
        
        $data['country'] = $this->model_suara->fetch_provinsi();
        $this->template->load('template','grafik/kabupaten/test',$data);
    }
}

  ?>
