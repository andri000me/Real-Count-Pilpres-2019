<?php
class Dpd_ri extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_dpd_ri');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_dpd_ri->tampil_data();
        $this->template->load('template','suara/dpd/lihat_data',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	
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
            $suara11  	 = $this->input->post('suara11');
            $suara12  	 = $this->input->post('suara12');
            $suara13  	 = $this->input->post('suara13');
            $suara14  	 = $this->input->post('suara14');
            $suara15  	 = $this->input->post('suara15');
            $suara16  	 = $this->input->post('suara16');
            $suara17  	 = $this->input->post('suara17');
            $suara18  	 = $this->input->post('suara18');
            $suara19  	 = $this->input->post('suara19');
            $suara20  	 = $this->input->post('suara20');
            $suara21  	 = $this->input->post('suara21');
            $suara22  	 = $this->input->post('suara22');
            $suara23  	 = $this->input->post('suara23');

            $id_tps    = $this->input->post('id_tps');
         	$waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array(
            						'suara1'=>$suara1,
                                    'suara2'=>$suara2,
                                    'suara3'=>$suara3,
                                    'suara4'=>$suara4,
                                    'suara5'=>$suara5,
                                    'suara6'=>$suara6,
                                    'suara7'=>$suara7,
                                    'suara8'=>$suara8,
                                    'suara9'=>$suara9,
                                    'suara10'=>$suara10,
                                    'suara11'=>$suara11,
                                    'suara12'=>$suara12,
                                    'suara13'=>$suara13,
                                    'suara14'=>$suara14,
                                    'suara15'=>$suara15,
                                    'suara16'=>$suara16,
                                    'suara17'=>$suara17,
                                    'suara18'=>$suara18,
                                    'suara19'=>$suara19,
                                    'suara20'=>$suara20,
                                    'suara21'=>$suara21,
                                    'suara22'=>$suara22,
                                    'suara23'=>$suara23,
                                    'id_tps'=>$id_tps,
                                    'waktu'=>$waktu
                                    
            );
            
            
            $this->model_dpd_ri->post($data);
            redirect('dpd_ri');
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
            $suara3  	 = $this->input->post('suara3');
            $suara4  	 = $this->input->post('suara4');
            $suara5  	 = $this->input->post('suara5');
            $suara6  	 = $this->input->post('suara6');
            $suara7  	 = $this->input->post('suara7');
            $suara8  	 = $this->input->post('suara8');
            $suara9  	 = $this->input->post('suara9');
            $suara10  	 = $this->input->post('suara10');
            $suara11  	 = $this->input->post('suara11');
            $suara12  	 = $this->input->post('suara12');
            $suara13  	 = $this->input->post('suara13');
            $suara14  	 = $this->input->post('suara14');
            $suara15  	 = $this->input->post('suara15');
            $suara16  	 = $this->input->post('suara16');
            $suara17  	 = $this->input->post('suara17');
            $suara18  	 = $this->input->post('suara18');
            $suara19  	 = $this->input->post('suara19');
            $suara20  	 = $this->input->post('suara20');
            $suara21  	 = $this->input->post('suara21');
            $suara22  	 = $this->input->post('suara22');
            $suara23  	 = $this->input->post('suara23');
            $id_tps    = $this->input->post('id_tps');
            $waktu = date("Y/m/d h:i:sa");
            
           
            
            $data           = array(
                                    'suara1'=>$suara1,
                                    'suara2'=>$suara2,
                                    'suara3'=>$suara3,
                                    'suara4'=>$suara4,
                                    'suara5'=>$suara5,
                                    'suara6'=>$suara6,
                                    'suara7'=>$suara7,
                                    'suara8'=>$suara8,
                                    'suara9'=>$suara9,
                                    'suara10'=>$suara10,
                                    'suara11'=>$suara11,
                                    'suara12'=>$suara12,
                                    'suara13'=>$suara13,
                                    'suara14'=>$suara14,
                                    'suara15'=>$suara15,
                                    'suara16'=>$suara16,
                                    'suara17'=>$suara17,
                                    'suara18'=>$suara18,
                                    'suara19'=>$suara19,
                                    'suara20'=>$suara20,
                                    'suara21'=>$suara21,
                                    'suara22'=>$suara22,
                                    'suara23'=>$suara23,
                                    'waktu'=>$waktu
                                    
            );
            $this->model_dpd_ri->edit($data,$id);
            redirect('dpd_ri');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_dpd_ri');
            $data['record']     =  $this->model_dpd_ri->get_one($id)->row_array();
            $this->template->load('template','suara/dpd/update_data',$data);
        }
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_dpd_ri->delete($id);
        redirect('dpd_ri');
    }




}

  ?>
