<?php 
class Model_kecamatan extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_kecamatan');
    }

  
    function post($data){
        $this->db->insert('tb_kecamatan',$data);
    }
    function getKabupaten($id){
    $param  =   array('id_kabkota'=>$id);
    return $this->db->get_where('tb_kabkota',$param);
   }

    function get_one($id)
    {
        $param  =   array('id_kecamatan'=>$id);
        return $this->db->get_where('tb_kecamatan',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_kecamatan',$id);
        $this->db->update('tb_kecamatan',$data);
    }
    function delete($id)
    {
        $this->db->where('id_kecamatan',$id);
        $this->db->delete('tb_kecamatan');
    }
    function get_kab(){
        $this->db->from('tb_kabkota');
        $this->db->order_by("nama", "asc");
        return $this->db->get(); 
    }




}



 ?>