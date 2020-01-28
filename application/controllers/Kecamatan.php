<?php
class Kecamatan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kecamatan');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_kecamatan->tampil_data();
        $this->template->load('template','kecamatan/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id      = $this->input->post('id_kecamatan');
            $nama    = $this->input->post('nama');
            $id_kab    = $this->input->post('id_kab');
            $dapil  = $this->input->post('dapil');
            
           
            
            $data           = array('id_kecamatan'=>$id,
                                    'nama'=>$nama,
                                    'dapil'=>$dapil,
                                    'id_kabkota'=>$id_kab
                                    
            );
            
            
            $this->model_kecamatan->post($data);
            redirect('kecamatan');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id      = $this->input->post('id_kecamatan');
            $nama    = $this->input->post('nama');
            $id_kab    = $this->input->post('id_kab');
            $dapil  = $this->input->post('dapil');
            
           
            
            $data           = array('id_kecamatan'=>$id,
                                    'nama'=>$nama,
                                    'dapil'=>$dapil,
                                    'id_kabkota'=>$id_kab
                                    
            );
            $this->model_kecamatan->edit($data,$id);
            redirect('kecamatan');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_kecamatan');
            $data['record']     =  $this->model_kecamatan->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','kecamatan/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kecamatan->delete($id);
        redirect('kecamatan');
    }




}

  ?>
