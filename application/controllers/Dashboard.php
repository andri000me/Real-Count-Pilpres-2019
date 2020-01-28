<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_suara');
        chek_session();
    }

	public function index()
	{
        $data['title']='Dashboard';
        $data['jumlahPartai'] = $this->model_suara->countPartai();
        $data['jumlahSaksi'] = $this->model_suara->countSaksi();
        $data['jumlahTps'] = $this->model_suara->countTps();
        $data['record'] = $this->model_suara->tess();
		$this->template->load('template','dashboard',$data);
    }

    function getpaslon(){
        
        $data['record'] = $this->model_suara->getHasilPaslon1();
        $this->template->load('template','dashboard',$data);
    }

    function post()
    {
        if(isset($_POST['submit'])){
        	$id  	 = $this->input->post('id');
            $nama    = $this->input->post('nama');
   
            $data           = array('no_urut'=>$id,
            						'nama'=>$nama
                                   
                                    
            );
            
            
            $this->model_suara->post($data);
            redirect('partai');
        }
        else{
            echo "Data Gagal";
        }	
    }
    
}
