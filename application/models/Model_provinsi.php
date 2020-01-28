<?php 
class Model_provinsi extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_provinsi');
    }

  
    function post($data){
        $this->db->insert('tb_provinsi',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_provinsi'=>$id);
        return $this->db->get_where('tb_provinsi',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_provinsi',$id);
        $this->db->update('tb_provinsi',$data);
    }
    function delete($id)
    {
        $this->db->where('id_provinsi',$id);
        $this->db->delete('tb_provinsi');
    }




}



 ?>