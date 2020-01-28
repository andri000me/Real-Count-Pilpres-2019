<?php
class Dpr_ri extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_dpr_ri');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_dpr_ri->tampil_data();
        $this->template->load('template','suara/dpr/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id_partai  	 = $this->input->post('id_partai');
        	$suara1  	 = $this->input->post('suara1');
            $suara2  	 = $this->input->post('suara2');
            $suara3  	 = $this->input->post('suara3');
            $suara4  	 = $this->input->post('suara4');
            $suara5  	 = $this->input->post('suara5');
            $suara6  	 = $this->input->post('suara6');
            $suara7  	 = $this->input->post('suara7');
            $suara8  	 = $this->input->post('suara8');
            $suara9  	 = $this->input->post('suara9');
            $suara10  	 = $this->input->post('suara10');
            $id_tps    = $this->input->post('id_tps');
         	$waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array('id_tps'=>$id_tps,
            						'caleg_1'=>$suara1,
                                    'caleg_3'=>$suara3,
                                    'caleg_4'=>$suara4,
                                    'caleg_5'=>$suara5,
                                    'caleg_6'=>$suara6,
                                    'caleg_7'=>$suara7,
                                    'caleg_8'=>$suara8,
                                    'caleg_9'=>$suara9,
                                    'caleg_10'=>$suara10,
                                    'caleg_2'=>$suara2,        
                                    'id_partai'=>$id_partai,
                                    'waktu'=>$waktu
                                    
            );
            
            
            $this->model_dpr_ri->post($data);
            redirect('dpr_ri');
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
        	$suara1  	 = $this->input->post('suara1');
            $suara2  	 = $this->input->post('suara2');
            $suara3  	 = $this->input->post('suara3');
            $suara4  	 = $this->input->post('suara4');
            $suara5  	 = $this->input->post('suara5');
            $suara6  	 = $this->input->post('suara6');
            $suara7  	 = $this->input->post('suara7');
            $suara8  	 = $this->input->post('suara8');
            $suara9  	 = $this->input->post('suara9');
            $suara10  	 = $this->input->post('suara10');
            $id_tps    = $this->input->post('id_tps');
         	$waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array('id_tps'=>$id_tps,
            						'caleg_1'=>$suara1,
                                    'caleg_3'=>$suara3,
                                    'caleg_4'=>$suara4,
                                    'caleg_5'=>$suara5,
                                    'caleg_6'=>$suara6,
                                    'caleg_7'=>$suara7,
                                    'caleg_8'=>$suara8,
                                    'caleg_9'=>$suara9,
                                    'caleg_10'=>$suara10,
                                    'caleg_2'=>$suara2,
                                    
                                    'id_partai'=>$id_partai,
                                    'waktu'=>$waktu
                                    
            );
            $this->model_dpr_ri->edit($data,$id_suara);
            redirect('dpr_ri');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_dpr_ri');
            $data['record']     =  $this->model_dpr_ri->get_one($id)->row_array();
            //$this->load->view('siswa/form_edit',$data);
            $this->template->load('template','suara/dpr/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_dpr_ri->delete($id);
        redirect('dpr_ri');
    }




}

  ?>
