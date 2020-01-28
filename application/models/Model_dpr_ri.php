<?php 
class Model_dpr_ri extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_suara_dpr_ri');
    }
    function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
  
    function post($data){
        $this->db->insert('tb_suara_dpr_ri',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_suara'=>$id);
        return $this->db->get_where('tb_suara_dpr_ri',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_suara',$id);
        $this->db->update('tb_suara_dpr_ri',$data);
    }
    function delete($id)
    {
        $this->db->where('id_suara',$id);
        $this->db->delete('tb_suara_dpr_ri');
    }

    function getPartai($id){
    $param  =   array('id_partai'=>$id);
    return $this->db->get_where('tb_partai',$param);
   }
   function get_tps(){
        /*return $this->db->get('tb_kecamatan');*/
        $this->db->from('tb_tps');
        $this->db->order_by("id_tps", "asc");
        return $this->db->get(); 
    }

    function get_partai(){
        /*return $this->db->get('tb_kecamatan');*/
        $this->db->from('tb_partai');
        $this->db->order_by("nama", "asc");
        return $this->db->get(); 
    }



}



 ?>