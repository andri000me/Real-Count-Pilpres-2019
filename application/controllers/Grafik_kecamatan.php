<?php
class Grafik_kecamatan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_suara');
        chek_session();
    }

 function index(){
  if (isset($_POST['submit'])) {
    $id = $this->input->post('kecamatan');
    $data['idKec'] = $this->model_suara->Pilpres_kec($id);
    $data['idKecdpd'] = $this->model_suara->Dpd_kec($id);
    $data['idKecdprri'] = $this->model_suara->Dpr_kec($id);
    $data['idKecdprdkabkota'] = $this->model_suara->Dprdkabkota_kec($id);
    $data['idKecdprdprov'] = $this->model_suara->Dprdprov_kec($id);
    $data['country'] = $this->model_suara->fetch_partai();
    $this->template->load('template','grafik/kecamatan/tampil',$data);
    
  }
  
  function grafik_kec(){
        
        $data['country'] = $this->model_suara->fetch_provinsi();
        $this->template->load('template','grafik/kecamatan/test',$data);
    }
  



 /*------------------------*/



}
}

  ?>
