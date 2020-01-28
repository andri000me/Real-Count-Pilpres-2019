<?php 
class Model_kelurahan extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_kelurahan');
    }

  
    function post($data){
        $this->db->insert('tb_kelurahan',$data);
    }
    function getKecamatan($id){
    $param  =   array('id_kecamatan'=>$id);
    return $this->db->get_where('tb_kecamatan',$param);
   }

    function get_one($id)
    {
        $param  =   array('id_kelurahan'=>$id);
        return $this->db->get_where('tb_kelurahan',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_kelurahan',$id);
        $this->db->update('tb_kelurahan',$data);
    }
    function delete($id)
    {
        $this->db->where('id_kelurahan',$id);
        $this->db->delete('tb_kelurahan');
    }
    function get_kec(){
        /*return $this->db->get('tb_kecamatan');*/
        $this->db->from('tb_kecamatan');
        $this->db->order_by("nama", "asc");
        return $this->db->get(); 
    }




}



 ?>