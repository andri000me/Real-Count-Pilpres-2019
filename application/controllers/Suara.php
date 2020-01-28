<?php
class Suara extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_suara');
        chek_session();
    }

    function index(){
        
        $data['record'] = $this->model_suara->getHasilPaslon1();
        $this->template->load('template','suara/dashboard',$data);
    }
}

  ?>
