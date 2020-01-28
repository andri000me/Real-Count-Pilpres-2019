<?php
class Kelurahan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kelurahan');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_kelurahan->tampil_data();
        $this->template->load('template','kelurahan/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id');
            $nama    = $this->input->post('nama');
            $id_kec    = $this->input->post('id_kec');
         
            
           
            
            $data           = array('id_kelurahan'=>$id,
            						'nama'=>$nama,
                                    'id_kecamatan'=>$id_kec
                                    
            );
            
            ;
            $this->model_kelurahan->post($data);
            redirect('kelurahan');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id      = $this->input->post('id_kelurahan');
            $nama    = $this->input->post('nama');
            $id_kec    = $this->input->post('id_kec');
         
            
           
            
            $data           = array(
                                    'nama'=>$nama,
                                    'id_kec'=>$id_kec
                                    
            );
            $this->model_kelurahan->edit($data,$id);
            redirect('kelurahan');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_kelurahan');
            $data['record']     =  $this->model_kelurahan->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','kelurahan/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kelurahan->delete($id);
        redirect('kelurahan');
    }




}

  ?>
