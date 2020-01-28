<?php 
class Model_daftar_dpd extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_dpd');
    }
  
    function post($data){
        $this->db->insert('tb_dpd',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_daftar_dpd'=>$id);
        return $this->db->get_where('tb_dpd',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_daftar_dpd',$id);
        $this->db->update('tb_dpd',$data);
    }
    function delete($id)
    {
        $this->db->where('id_daftar_dpd',$id);
        $this->db->delete('tb_dpd');
    }
    function get_nourut($id){
        $this->db->where('id_daftar_dpd',$id);
        $this->db->get('tb_dpd');
    }

    function getPartai($id){
        $this->db->where('id_partai',$id);
        $this->db->from('tb_partai');
        return $this->db->get();
    }

    function get_partai(){
        return $this->db->get('tb_partai');
    }
}



 ?>