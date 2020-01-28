<?php
class Grafik_tes extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_suara');
        chek_session();
    }

    function grafik_prov(){
        
        $data['record'] = $this->model_suara->tess();
        /*echo "<pre>";
        var_dump($data);
        exit();*/
        $data['tps'] = $this->model_suara->graf_tps_dprri();
        $data['dpd'] = $this->model_suara->graf_suara_dpd();
        $this->template->load('template','grafik/provinsi/test',$data);
    }

    function grafik_kec(){
        
        $data['country'] = $this->model_suara->fetch_provinsi();
        $this->template->load('template','grafik/kecamatan/test',$data);
    }
    
    function grafik_kel(){
        
        $data['country'] = $this->model_suara->fetch_provinsi();
        $this->template->load('template','grafik/kelurahan/test',$data);
    }
    
     function grafik_tps(){
        $data['country'] = $this->model_suara->fetch_provinsi();
        $this->template->load('template','grafik/tps/test',$data);
    }


   
    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id');
            $nama    = $this->input->post('nama');
   
            $data           = array('no_urut'=>$id,
            						'nama'=>$nama
                                   
                                    
            );
            
            
            $this->model_suara->post($data);
            redirect('partai');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id      = $this->input->post('id');
            $nama    = $this->input->post('nama');
   
            $data           = array('no_urut'=>$id,
                                    'nama'=>$nama
                                   
                                    
            );
            $this->model_suara->edit($data,$id);
            redirect('partai');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_suara');
            $data['record']     =  $this->model_suara->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','partai/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_suara->delete($id);
        redirect('partai');
    }

   
     

 function fetch_kabupaten(){
  if($this->input->post('country_id'))
  {
   echo $this->model_suara->fetch_kabupaten($this->input->post('country_id'));
  }
 }

 function fetch_kecamatan(){
  if($this->input->post('state_id'))
  {
   echo $this->model_suara->fetch_kecamatan($this->input->post('state_id'));
  }
 }
 function fetch_kelurahan(){
  if($this->input->post('kecamatan_id'))
  {
   echo $this->model_suara->fetch_kelurahan($this->input->post('kecamatan_id'));
  }
 }

 function fetch_tps(){
  if($this->input->post('kelurahan_id'))
  {
   echo $this->model_suara->fetch_tps($this->input->post('kelurahan_id'));
  }
 }

 function tampilGrafik(){
    $id_tps = $this->input->post('tps');
    $tps = $this->input->post('id_tps');
    $partai = $this->input->post('country_id');
    $data['idTps'] = $this->model_suara->getSuaraTps($id_tps);
    $data['dpd_tps'] = $this->model_suara->graf_suara_dpd_tps($id_tps);
    $data['dprri_tps'] = $this->model_suara->graf_suara_dprri_tps($id_tps);
    $data['dprri_tps_partai'] = $this->model_suara->graf_suara_dprri_tps_partai($tps,$partai);
    $data['country'] = $this->model_suara->fetch_partai();
    $this->template->load('template','grafik/tps/tampil',$data);
    
    // print_r($dat);exit;
  
 }

 function tampilGrafikKec(){
  if (isset($_POST['submit'])) {
    $id = $this->input->post('kecamatan');
    $data['idKec'] = $this->model_suara->Pilpres_kec($id);
    $data['country'] = $this->model_suara->fetch_partai();
    $this->template->load('template','grafik/kecamatan/tampil',$data);
    
  }
    
  
 }

 function Azzz(){
  $id_tps = $this->input->post('tps');
  $partai = $this->input->post('country_id');
  $data['dprri_tps'] = $this->model_complete->graf_suara_dprri_tps_partai($id_tps,$partai);
  $data['country'] = $this->model_complete->fetch_partai();
  $this->load->view('autocomplete', $data);
 }


 /*------------------------*/



}

  ?>
