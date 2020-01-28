<?php 
class Model_partai extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function tampil_data(){
        return $this->db->get('tb_partai');
    }
    function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
  
    function post($data){
        $this->db->insert('tb_partai',$data);
    }

    function get_one($id)
    {
        $param  =   array('no_urut'=>$id);
        return $this->db->get_where('tb_partai',$param);
    }

    function edit($data,$id)
    {

        $this->db->where('id_partai',$id);
        $this->db->update('tb_partai',$data);
    }
    function delete($id)
    {
        $this->db->where('no_urut',$id);
        $this->db->delete('tb_partai');
    }
    function get_nourut($id){
        $this->db->where('nama',$id);
        $this->db->get('tb_partai');
    }


    function tess()
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('suara1');
        $this->db->select_sum('suara2');
        $this->db->from('tb_suara_pilpres');
        return $this->db->get();
    }
    function getPersenPilpres1(){
        $data = $this->db->query('SELECT (SUM(suara1)/SUM(suara1+suara2)*100) AS total FROM tb_suara_pilpres;');
        return $data->result_array();
    }
    function getPersenPilpres2(){
        $data = $this->db->query('SELECT (SUM(suara2)/SUM(suara1+suara2)*100) AS total FROM tb_suara_pilpres;');
        return $data->result_array();
    }

}



 ?>