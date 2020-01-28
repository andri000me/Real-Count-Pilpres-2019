<?php 
class Model_saksi extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_saksi');
    }
    function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
  
    function post($data){
        $this->db->insert('tb_saksi',$data);
    }

    function get_one($id)
    {
        $param  =   array('id_saksi'=>$id);
        return $this->db->get_where('tb_saksi',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_saksi',$id);
        $this->db->update('tb_saksi',$data);
    }
    function delete($id)
    {
        $this->db->where('id_saksi',$id);
        $this->db->delete('tb_saksi');
    }




}



 ?>