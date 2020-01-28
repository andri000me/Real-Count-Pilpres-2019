<?php
class Caleg extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_caleg');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_caleg->tampil_data();
        $this->template->load('template','caleg/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id_partai  	 = $this->input->post('id_partai');
            $nama    = $this->input->post('nama');
            $no_urut = $this->input->post('no_urut');
            $kategori = $this->input->post('kategori');
	   		$dapil = $this->input->post('dapil');

            $data           = array('nama'=>$nama,
            						'kategori'=>$kategori,
            						'id_partai'=>$id_partai,
            						'dapil'=>$dapil,
            						'no_urut'=>$no_urut
                                   
                                    
            );
            
            
            $this->model_caleg->post($data);
            redirect('Caleg');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
           $id_partai  	 = $this->input->post('id_partai');
            $nama    = $this->input->post('nama');
            $no_urut = $this->input->post('no_urut');
            $kategori = $this->input->post('kategori');
	   		$dapil = $this->input->post('dapil');

            $data           = array('nama'=>$nama,
            						'kategori'=>$kategori,
            						'id_partai'=>$id_partai,
            						'dapil'=>$dapil,
            						'no_urut'=>$no_urut
                                   
                                    
            );
            $this->model_caleg->edit($data,$id);
            redirect('caleg');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_caleg');
            $data['record']     =  $this->model_caleg->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','caleg/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_caleg->delete($id);
        redirect('caleg');
    }




}

  ?>
