<?php
class Grafik_kelurahan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_suara');
        chek_session();
    }

 function index(){
  if (isset($_POST['submit'])) {
    $id = $this->input->post('kelurahan');
    $data['idKel'] = $this->model_suara->Pilpres_kel($id);
    $data['idKeldpd'] = $this->model_suara->Dpd_kel($id);
    $data['idKeldprri'] = $this->model_suara->Dprri_kel($id);
    $data['idKeldprdkabkota'] = $this->model_suara->Dprdkabkota_kel($id);
    $data['idKeldprdprov'] = $this->model_suara->Dprdprov_kel($id);
    $data['country'] = $this->model_suara->fetch_partai();
    $this->template->load('template','grafik/kelurahan/tampil',$data);
    
  }
}

function grafik_kel(){
        
        $data['country'] = $this->model_suara->fetch_provinsi();
        $this->template->load('template','grafik/kelurahan/test',$data);
    }
}

  ?>
