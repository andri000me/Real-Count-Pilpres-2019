<?php
class Dprd_kabkota extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_dprdkabkota');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_dprdkabkota->tampil_data();
        $this->template->load('template','suara/dprd_kabkota/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
            $id  	 = $this->input->post('id');
            $id_partai  	 = $this->input->post('id_partai');
        	$caleg_1  	 = $this->input->post('caleg_1');
            $caleg_2  	 = $this->input->post('caleg_2');
            $caleg_3  	 = $this->input->post('caleg_3');
            $caleg_4  	 = $this->input->post('caleg_4');
            $caleg_5  	 = $this->input->post('caleg_5');
            $caleg_6  	 = $this->input->post('caleg_6');
            $caleg_7  	 = $this->input->post('caleg_7');
            $caleg_8  	 = $this->input->post('caleg_8');
            $caleg_9  	 = $this->input->post('caleg_9');
            $caleg_10  	 = $this->input->post('caleg_10');
            $id_tps    = $this->input->post('id_tps');
         	$waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array('id_suara'=>$id,
            						'caleg_1'=>$caleg_1,
                                    'caleg_2'=>$caleg_2,
                                    'caleg_3'=>$caleg_3,
                                    'caleg_4'=>$caleg_4,
                                    'caleg_5'=>$caleg_5,
                                    'caleg_6'=>$caleg_6,
                                    'caleg_7'=>$caleg_7,
                                    'caleg_8'=>$caleg_8,
                                    'caleg_9'=>$caleg_9,
                                    'caleg_10'=>$caleg_10,
                                    'id_partai'=>$id_partai,
                                    'id_tps'=>$id_tps,
                                    'waktu'=>$waktu
                                    
            );
            
            
            $this->model_dprdkabkota->post($data);
            redirect('Dprd_kabkota');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
                // proses siswa
            $id      = $this->input->post('id');
            $id_partai  	 = $this->input->post('id_partai');
            $caleg_1  	 = $this->input->post('caleg_1');
            $caleg_2  	 = $this->input->post('caleg_2');
            $caleg_3  	 = $this->input->post('caleg_3');
            $caleg_4  	 = $this->input->post('caleg_4');
            $caleg_5  	 = $this->input->post('caleg_5');
            $caleg_6  	 = $this->input->post('caleg_6');
            $caleg_7  	 = $this->input->post('caleg_7');
            $caleg_8  	 = $this->input->post('caleg_8');
            $caleg_9  	 = $this->input->post('caleg_9');
            $caleg_10  	 = $this->input->post('caleg_10');
            $id_tps    = $this->input->post('id_tps');
            $waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array('id_suara'=>$id,
                                    'caleg_1'=>$caleg_1,
                                    'caleg_2'=>$caleg_2,
                                    'caleg_3'=>$caleg_3,
                                    'caleg_4'=>$caleg_4,
                                    'caleg_5'=>$caleg_5,
                                    'caleg_6'=>$caleg_6,
                                    'caleg_7'=>$caleg_7,
                                    'caleg_8'=>$caleg_8,
                                    'caleg_9'=>$caleg_9,
                                    'caleg_10'=>$caleg_10,
                                    'id_partai'=>$id_partai,
                                    'id_tps'=>$id_tps,
                                    'waktu'=>$waktu
                                    
            );
            $this->model_dprdkabkota->edit($data,$id);
            redirect('Dprd_kabkota');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_dprdkabkota');
            $data['record']     =  $this->model_dprdkabkota->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','dprd_kabkota/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_dprdkabkota->delete($id);
        redirect('Dprd_kabkota');
    }




}

  ?>
