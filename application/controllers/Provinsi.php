<?php
class Provinsi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_provinsi');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_provinsi->tampil_data();
        $this->template->load('template','provinsi/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id');
            $nama    = $this->input->post('nama');
            $lat    = $this->input->post('lat');
            $lng    = $this->input->post('lng');
            
           
            
            $data           = array('id_provinsi'=>$id,
            						'nama'=>$nama,
                                    'lat'=>$lat,
                                    'lng'=>$lng
                                    
            );
            
            ;
            $this->model_provinsi->post($data);
            redirect('provinsi');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id     =  $this->input->post('id_provinsi');
            $nama    = $this->input->post('nama');
            $lat    = $this->input->post('lat');
            $lng    = $this->input->post('lng');
            $data           = array(
                                    'nama'=>$nama,
                                    'lat'=>$lat,
                                    'lng'=>$lng
                                    
            );
            $this->model_provinsi->edit($data,$id);
            redirect('provinsi');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_provinsi');
            $data['record']     =  $this->model_provinsi->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','provinsi/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_provinsi->delete($id);
        redirect('provinsi');
    }




}

  ?>
