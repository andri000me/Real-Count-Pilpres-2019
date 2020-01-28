<?php 
class Model_kabkota extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_kabkota');
    }

  
    function post($data){
        $this->db->insert('tb_kabkota',$data);
    }

    function getProvinsi($id){
    $param  =   array('id_provinsi'=>$id);
    return $this->db->get_where('tb_provinsi',$param);
   }
    function get_one($id)
    {
        $param  =   array('id_kabkota'=>$id);
        return $this->db->get_where('tb_kabkota',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_kabkota',$id);
        $this->db->update('tb_kabkota',$data);
    }
    function delete($id)
    {
        $this->db->where('id_kabkota',$id);
        $this->db->delete('tb_kabkota');
    }

    function get_prov(){
        return $this->db->get('tb_provinsi');
    }




}



 ?>