<?php 
class Model_tps extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_tps');
    }
    function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
  
    function post($data){
        $this->db->insert('tb_tps',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_tps'=>$id);
        return $this->db->get_where('tb_tps',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_tps',$id);
        $this->db->update('tb_tps',$data);
    }
    function delete($id)
    {
        $this->db->where('id_tps',$id);
        $this->db->delete('tb_tps');
    }

    function get_kel(){
        /*return $this->db->get('tb_kelurahan');
        $this->db->order_by("nama", "asc");*/
        $this->db->from('tb_kelurahan');
        $this->db->order_by("nama", "asc");
        return $this->db->get(); 
    
    }


}



 ?>