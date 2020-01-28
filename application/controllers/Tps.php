<?php
class Tps extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_tps');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_tps->tampil_data();
        $this->template->load('template','tps/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id');
            $nama    = $this->input->post('nama');
            $id_kelurahan    = $this->input->post('id_kelurahan');
         
            
           
            
            $data           = array('id_tps'=>$id,
            						'nomor_tps'=>$nama,
                                    'id_kelurahan'=>$id_kelurahan
                                    
            );
            
            ;
            $this->model_tps->post($data);
            redirect('tps');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id      = $this->input->post('id_tps');
            $nama    = $this->input->post('nama');
            $id_kelurahan    = $this->input->post('id_kelurahan');
         
            
           
            
            $data           = array(
                                    'nomor_tps'=>$nama,
                                    'id_kelurahan'=>$id_kelurahan
                                    
            );
            $this->model_tps->edit($data,$id);
            redirect('tps');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_tps');
            $data['record']     =  $this->model_tps->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','tps/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_tps->delete($id);
        redirect('tps');
    }




}

  ?>
