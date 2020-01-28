<?php
class pilpres extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_pilpres');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_pilpres->tampil_data();
        $this->template->load('template','suara/pilpres/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	
        	$suara1  	 = $this->input->post('suara1');
            $suara2  	 = $this->input->post('suara2');
            $id_tps    = $this->input->post('id_tps');
         	$waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array(
            						'suara1'=>$suara1,
                                    'suara2'=>$suara2,
                                    'id_tps'=>$id_tps,
                                    'waktu'=>$waktu
                                    
            );
            
            
            $this->model_pilpres->post($data);
            redirect('pilpres');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id      = $this->input->post('id_suara');
            $suara1      = $this->input->post('suara1');
            $suara2      = $this->input->post('suara2');
            $id_tps    = $this->input->post('id_tps');
            $waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array(
                                    'suara1'=>$suara1,
                                    'suara2'=>$suara2,
                                    'waktu'=>$waktu
                                    
            );
            $this->model_pilpres->edit($data,$id);
            redirect('pilpres');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_pilpres');
            $data['record']     =  $this->model_pilpres->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','suara/pilpres/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_pilpres->delete($id);
        redirect('pilpres');
    }




}

  ?>
