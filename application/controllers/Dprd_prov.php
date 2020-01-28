<?php
class Dprd_prov extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_dprd_prov');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_dprd_prov->tampil_data();
        $this->template->load('template','suara/dprd-prov/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
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
            $caleg_10  	 = $this->input->post('suara10');
            $id_tps    = $this->input->post('id_tps');
         	$waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array('id_tps'=>$id_tps,
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
                                    'waktu'=>$waktu
                                    
            );
            
            
            $this->model_dprd_prov->post($data);
            redirect('dprd_prov');
        }
        else{
            echo "Data Gagal";
        }	
    }
   


    function edit()
    {
       if(isset($_POST['submit'])){
            $id_suara  	 = $this->input->post('id_suara');
                
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
            
           
            
            $data           = array('id_tps'=>$id_tps,
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
                                    'waktu'=>$waktu
                                    
            );
            $this->model_dprd_prov->edit($data,$id_suara);
            redirect('dprd_prov');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_dprd_prov');
            $data['record']     =  $this->model_dprd_prov->get_one($id)->row_array();
            $this->template->load('template','suara/dprd-prov/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_dprd_prov->delete($id);
        redirect('dprd_prov');
    }




}

  ?>
