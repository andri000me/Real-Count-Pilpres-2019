<?php
class Kabkota extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kabkota');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_kabkota->tampil_data();
        $this->template->load('template','kabkota/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
            $nama    = $this->input->post('nama');
            $id    = $this->input->post('id');
            $kode_provinsi    = $this->input->post('kode_provinsi');
            
           
            
            $data           = array('id_kabkota'=>$id,
                                    'nama'=>$nama,
                                    'id_provinsi'=>$kode_provinsi
                                    
            );
            
            ;
            $this->model_kabkota->post($data);
            redirect('Kabkota');
        }
        else{
            echo "Data Gagal";
        }
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id     =  $this->input->post('id_kabkota');
            $nama    = $this->input->post('nama');
            $id_provinsi = $this->input->post('id_provinsi');
            $data           = array(
                                    'nama'=>$nama,
                                    'id_provinsi'=>$id_provinsi,
                                    
                                    
            );
            $this->model_kabkota->edit($data,$id);
            redirect('Kabkota');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_kabkota');
            $data['record']     =  $this->model_kabkota->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','kabkota/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kabkota->delete($id);
        redirect('Kabkota');
    }




}

  ?>
