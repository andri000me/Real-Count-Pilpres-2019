<?php 
class Model_grafik extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }
    function get_tps()
    {
    	$this->db->from('tb_tps');
        $this->db->order_by("id", "asc");
        return $this->db->get(); 
    }
	   





}



 ?>