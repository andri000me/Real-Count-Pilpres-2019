<?php
class Daftar_dpd extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_daftar_dpd');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_daftar_dpd->tampil_data();
        $this->template->load('template','dpd/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
            $nama    = $this->input->post('nama');
            $no_urut = $this->input->post('no_urut');
            $kabkota = $this->input->post('kabkota');
	   		$provinsi = $this->input->post('provinsi');

            $data           = array('nama'=>$nama,
                                    'no_urut'=>$no_urut,
            						'kabkota'=>$kabkota,
            						'provinsi'=>$provinsi
            						
                                   
                                    
            );
            
            
            $this->model_daftar_dpd->post($data);
            redirect('Daftar_dpd');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
            $nama    = $this->input->post('nama');
            $no_urut = $this->input->post('no_urut');
            $kabkota = $this->input->post('kabkota');
	   		$provinsi = $this->input->post('provinsi');

            $data           = array('nama'=>$nama,
                                    'no_urut'=>$no_urut,
            						'kabkota'=>$kabkota,
            						'provinsi'=>$provinsi
                                   
                                    
            );
            $this->model_daftar_dpd->edit($data,$id);
            redirect('Daftar_dpd');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_daftar_dpd');
            $data['record']     =  $this->model_daftar_dpd->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','dpd/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_daftar_dpd->delete($id);
        redirect('Daftar_dpd');
    }




}

  ?>
