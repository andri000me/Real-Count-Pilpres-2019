<?php 
class Model_dprdkabkota extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_suara_dprd_kabkota');
    }
    function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
  
    function post($data){
        $this->db->insert('tb_suara_dprd_kabkota',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_suara'=>$id);
        return $this->db->get_where('tb_suara_dprd_kabkota',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_suara',$id);
        $this->db->update('tb_suara_dprd_kabkota',$data);
    }
    function delete($id)
    {
        $this->db->where('id_suara',$id);
        $this->db->delete('tb_suara_dprd_kabkota');
    }
    function get_tps(){
        return $this->db->get('tb_tps');
    }
    function get_partai(){
        return $this->db->get('tb_partai');
    }

    function getPartai($id){
    $param  =   array('id_partai'=>$id);
    return $this->db->get_where('tb_partai',$param);
   }


}



 ?>