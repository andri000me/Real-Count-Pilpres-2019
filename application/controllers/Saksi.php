<?php
class Saksi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_saksi');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_saksi->tampil_data();
        $this->template->load('template','saksi/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id_saksi  	 = $this->input->post('id_saksi');
            $id_tps      = $this->input->post('id_tps');
            $no_hp      = $this->input->post('no_hp');
            $nama    = $this->input->post('nama');
         
            
           
            
            $data           = array('id_saksi'=>$id_saksi,
            						'id_tps'=>$id_tps,
                                    'no_hp'=>$no_hp,
                                    'nama'=>$nama
                                    
            );
            
            $this->model_saksi->post($data);
            redirect('saksi');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id_saksi    = $this->input->post('id_saksi');
            $id_tps      = $this->input->post('id_tps');
            $no_hp      = $this->input->post('no_hp');
            $nama    = $this->input->post('nama');
         
            
           
            
            $data           = array('id_saksi'=>$id_saksi,
                                    'id_tps'=>$id_tps,
                                    'no_hp'=>$no_hp,
                                    'nama'=>$nama
                                    
            );
            $this->model_saksi->edit($data,$id);
            redirect('saksi');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_saksi');
            $data['record']     =  $this->model_saksi->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','saksi/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_saksi->delete($id);
        redirect('saksi');
    }




}

  ?>
