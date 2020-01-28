<?php
class Partai extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_partai');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_partai->tampil_data();
        $this->template->load('template','partai/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id');
            $nama    = $this->input->post('nama');
   
            $data           = array('no_urut'=>$id,
            						'nama'=>$nama
                                   
                                    
            );
            
            
            $this->model_partai->post($data);
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
            $id      = $this->input->post('id_partai');
            $nama    = $this->input->post('nama');
            $no_urut = $this->input->post('no_urut');
   
            $data           = array('no_urut'=>$no_urut,
                                    'nama'=>$nama,
                                    'id_partai'=>$id
                                   
                                    
            );
            $this->model_partai->edit($data,$id);
            redirect('partai');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_partai');
            $data['record']     =  $this->model_partai->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','partai/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_partai->delete($id);
        redirect('partai');
    }




}

  ?>
