<?php 

class Model_suara extends CI_Model{
	function __construct(){
      parent::__construct();
        $this->load->database();
    }

    function lihatsemua(){
    	return $this->db->get('tb_suara');
    }
    
	function getHasilPaslon1(){
	 	// $sql = "SELECT sum(suara1) AS total FROM tb_suara;";
	 	$data = $this->db->query('SELECT sum(suara1) AS total FROM tb_suara');
    	return $data->result_array();	
	}

	function getHasilPaslon2(){
	 	// $sql = "SELECT sum(suara1) AS total FROM tb_suara;";
	 	$data = $this->db->query('SELECT sum(suara2) AS total FROM tb_suara');
    	return $data->result_array();	
	}

	function getHasilPaslon3(){
	 	// $sql = "SELECT sum(suara1) AS total FROM tb_suara;";
	 	$data = $this->db->query('SELECT sum(suara3) AS total FROM tb_suara');
    	return $data->result_array();	
	}

	function getHasilPaslon4(){
	 	// $sql = "SELECT sum(suara1) AS total FROM tb_suara;";
	 	$data = $this->db->query('SELECT sum(suara4) AS total FROM tb_suara');
    	return $data->result_array();	
	}

	function getPersenHasilPaslon1(){
		$data = $this->db->query('SELECT (SUM(suara1)/ SUM(suara1 + suara2 + suara3 + suara4) *100) AS total FROM tb_suara;');
    	return $data->result_array();
	}

	function getPersenHasilPaslon2(){
		$data = $this->db->query('SELECT (SUM(suara2)/ SUM(suara1 + suara2 + suara3 + suara4) *100) AS total FROM tb_suara;');
    	return $data->result_array();
	}

	function getPersenHasilPaslon3(){
		$data = $this->db->query('SELECT (SUM(suara3)/ SUM(suara1 + suara2 + suara3 + suara4) *100) AS total FROM tb_suara;');
    	return $data->result_array();
	}

	function getPersenHasilPaslon4(){
		$data = $this->db->query('SELECT (SUM(suara4)/ SUM(suara1 + suara2 + suara3 + suara4) *100) AS total FROM tb_suara;');
    	return $data->result_array();
	}

	function getSuaraKec(){
		$sql = "SELECT COUNT(suara1) AS total FROM tb_suara INNER JOIN tb_keldesa, tb_kec, tb_kabkota WHERE tb_suara.id_keldesa = tb_keldesa.id_keldesa AND tb_keldesa.id_kec = tb_kec.id_kec AND tb_kec.id_kabkota = tb_kabkota.id_kabkota AND tb_kec.id_kec = '$id_kec';";
	}
	
	 function tess()
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('suara1');
        $this->db->select_sum('suara2');
        $this->db->from('tb_suara_pilpres');
        return $this->db->get();
    }

    function getCaleg($partai,$dapil){
      $dpr = 'DPR RI';
      $this->db->where('id_partai',$partai);
      $this->db->where('dapil',$dapil);
      $this->db->where('kategori',$dpr);
      return $this->db->get('tb_caleg');
    }

  


    function graf_suara_dpd()
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('suara1');
        $this->db->select_sum('suara2');
        $this->db->select_sum('suara2');
        $this->db->select_sum('suara3');
        $this->db->select_sum('suara4');
        $this->db->select_sum('suara5');
        $this->db->select_sum('suara6');
        $this->db->select_sum('suara7');
        $this->db->select_sum('suara8');
        $this->db->select_sum('suara9');
        $this->db->select_sum('suara10');
        $this->db->select_sum('suara11');
        $this->db->select_sum('suara12');
        $this->db->select_sum('suara13');
        $this->db->select_sum('suara14');
        $this->db->select_sum('suara15');
        $this->db->select_sum('suara16');
        $this->db->select_sum('suara17');
        $this->db->select_sum('suara18');
        $this->db->select_sum('suara19');
        $this->db->select_sum('suara20');
        $this->db->select_sum('suara21');
        $this->db->select_sum('suara22');
        $this->db->select_sum('suara23');
        $this->db->from('tb_suara_dpd');
        return $this->db->get();
    }
    

     function graf_tps_dprri()
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('caleg_1');
        $this->db->select_sum('caleg_2');
        $this->db->select_sum('caleg_3');
        $this->db->select_sum('caleg_4');
        $this->db->select_sum('caleg_5');
        $this->db->select_sum('caleg_6');
        $this->db->select_sum('caleg_7');
        $this->db->select_sum('caleg_8');
        $this->db->select_sum('caleg_9');
        $this->db->select_sum('caleg_10');
        $this->db->from('tb_suara_dpr_ri');
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
    function getSuaraTps($id){
      $this->db->select_sum('suara1');
      $this->db->select_sum('suara2');
      $this->db->where('id_tps',$id);
      $this->db->from('tb_suara_pilpres');
      return $this->db->get();
    }
    
    
    /*Grafik Kecamatan */
    function Pilpres_kec($id)
    {
        $sql = "SELECT sum(suara1) AS suara1,sum(suara2) AS suara2 FROM tb_suara_pilpres INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan WHERE tb_suara_pilpres.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kecamatan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dpd_kec($id)
    {
        $sql = "SELECT sum(suara1) AS suara1,
                sum(suara2) AS suara2,
                sum(suara3) AS suara3,
                sum(suara4) AS suara4,
                sum(suara5) AS suara5,
                sum(suara6) AS suara6,
                sum(suara7) AS suara7,
                sum(suara8) AS suara8,
                sum(suara9) AS suara9,
                sum(suara10) AS suara10,
                sum(suara11) AS suara11,
                sum(suara12) AS suara12,
                sum(suara13) AS suara13,
                sum(suara14) AS suara14,
                sum(suara15) AS suara15,
                sum(suara16) AS suara16,
                sum(suara17) AS suara17,
                sum(suara18) AS suara18,
                sum(suara19) AS suara19,
                sum(suara20) AS suara20,
                sum(suara21) AS suara21,
                sum(suara22) AS suara22,
                sum(suara23) AS suara23
                FROM tb_suara_dpd INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan 
                WHERE tb_suara_dpd.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kecamatan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dpr_kec($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dpr_ri INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan 
                WHERE tb_suara_dpr_ri.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kecamatan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprdkabkota_kec($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dprd_kabkota INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan 
                WHERE tb_suara_dprd_kabkota.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kecamatan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprdprov_kec($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dprd_prov INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan 
                WHERE tb_suara_dprd_prov.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kecamatan ='$id';";
        return $this->db->query($sql);
    }
    /*END Grafik Kecamatan */
    
    
    /*Grafik Kabupaten */
    function Pilpres_kab($id)
    {
        $sql = "SELECT sum(suara1) AS suara1,sum(suara2) AS suara2 FROM tb_suara_pilpres INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan,tb_kabkota WHERE tb_suara_pilpres.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kabkota = tb_kabkota.id_kabkota AND tb_kabkota.id_kabkota ='$id';";
        return $this->db->query($sql);
    }
    
    function Dpd_kab($id)
    {
        $sql = "SELECT sum(suara1) AS suara1,
                sum(suara2) AS suara2,
                sum(suara3) AS suara3,
                sum(suara4) AS suara4,
                sum(suara5) AS suara5,
                sum(suara6) AS suara6,
                sum(suara7) AS suara7,
                sum(suara8) AS suara8,
                sum(suara9) AS suara9,
                sum(suara10) AS suara10,
                sum(suara11) AS suara11,
                sum(suara12) AS suara12,
                sum(suara13) AS suara13,
                sum(suara14) AS suara14,
                sum(suara15) AS suara15,
                sum(suara16) AS suara16,
                sum(suara17) AS suara17,
                sum(suara18) AS suara18,
                sum(suara19) AS suara19,
                sum(suara20) AS suara20,
                sum(suara21) AS suara21,
                sum(suara22) AS suara22,
                sum(suara23) AS suara23
                FROM tb_suara_dpd INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan,tb_kabkota 
                WHERE tb_suara_dpd.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kabkota = tb_kabkota.id_kabkota AND tb_kabkota.id_kabkota ='$id';";
        return $this->db->query($sql);
    }
    
    function Dpr_ri($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dpr_ri INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan,tb_kabkota 
                WHERE tb_suara_dpr_ri.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kabkota = tb_kabkota.id_kabkota AND tb_kabkota.id_kabkota ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprd_kabkota($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dprd_kabkota INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan,tb_kabkota 
                WHERE tb_suara_dprd_kabkota.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kabkota = tb_kabkota.id_kabkota AND tb_kabkota.id_kabkota ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprd_prov($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dprd_prov INNER JOIN tb_tps, tb_kelurahan, tb_kecamatan,tb_kabkota 
                WHERE tb_suara_dprd_prov.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kec = tb_kecamatan.id_kecamatan AND tb_kecamatan.id_kabkota = tb_kabkota.id_kabkota AND tb_kabkota.id_kabkota ='$id';";
        return $this->db->query($sql);
    }
    
    /* End Grafik Kabupaten */
    
    
    /*Grafik Kelurahan*/
    function Pilpres_kel($id)
    {
        $sql = "SELECT sum(suara1) AS suara1,sum(suara2) AS suara2 FROM tb_suara_pilpres INNER JOIN tb_tps, tb_kelurahan WHERE tb_suara_pilpres.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kelurahan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dpd_kel($id)
    {
        $sql = "SELECT sum(suara1) AS suara1,
                sum(suara2) AS suara2,
                sum(suara3) AS suara3,
                sum(suara4) AS suara4,
                sum(suara5) AS suara5,
                sum(suara6) AS suara6,
                sum(suara7) AS suara7,
                sum(suara8) AS suara8,
                sum(suara9) AS suara9,
                sum(suara10) AS suara10,
                sum(suara11) AS suara11,
                sum(suara12) AS suara12,
                sum(suara13) AS suara13,
                sum(suara14) AS suara14,
                sum(suara15) AS suara15,
                sum(suara16) AS suara16,
                sum(suara17) AS suara17,
                sum(suara18) AS suara18,
                sum(suara19) AS suara19,
                sum(suara20) AS suara20,
                sum(suara21) AS suara21,
                sum(suara22) AS suara22,
                sum(suara23) AS suara23 
                FROM tb_suara_dpd INNER JOIN tb_tps, tb_kelurahan 
                WHERE tb_suara_dpd.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kelurahan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprri_kel($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dpr_ri INNER JOIN tb_tps, tb_kelurahan 
                WHERE tb_suara_dpr_ri.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kelurahan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprdkabkota_kel($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dprd_kabkota INNER JOIN tb_tps, tb_kelurahan 
                WHERE tb_suara_dprd_kabkota.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kelurahan ='$id';";
        return $this->db->query($sql);
    }
    
    function Dprdprov_kel($id)
    {
        $sql = "SELECT sum(caleg_1) AS caleg_1,
                sum(caleg_2) AS caleg_2,
                sum(caleg_3) AS caleg_3,
                sum(caleg_4) AS caleg_4,
                sum(caleg_5) AS caleg_5,
                sum(caleg_6) AS caleg_6,
                sum(caleg_7) AS caleg_7,
                sum(caleg_8) AS caleg_8,
                sum(caleg_9) AS caleg_9,
                sum(caleg_10) AS caleg_10
                FROM tb_suara_dprd_prov INNER JOIN tb_tps, tb_kelurahan 
                WHERE tb_suara_dprd_prov.id_tps = tb_tps.id_tps AND tb_tps.id_kelurahan = tb_kelurahan.id_kelurahan AND tb_kelurahan.id_kelurahan ='$id';";
        return $this->db->query($sql);
    }
    /*Grafik Kelurahan*/
    
    
    
    function graf_suara_dpd_tps($id)
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('suara1');
        $this->db->select_sum('suara2');
        $this->db->select_sum('suara2');
        $this->db->select_sum('suara3');
        $this->db->select_sum('suara4');
        $this->db->select_sum('suara5');
        $this->db->select_sum('suara6');
        $this->db->select_sum('suara7');
        $this->db->select_sum('suara8');
        $this->db->select_sum('suara9');
        $this->db->select_sum('suara10');
        $this->db->select_sum('suara11');
        $this->db->select_sum('suara12');
        $this->db->select_sum('suara13');
        $this->db->select_sum('suara14');
        $this->db->select_sum('suara15');
        $this->db->select_sum('suara16');
        $this->db->select_sum('suara17');
        $this->db->select_sum('suara18');
        $this->db->select_sum('suara19');
        $this->db->select_sum('suara20');
        $this->db->select_sum('suara21');
        $this->db->select_sum('suara22');
        $this->db->select_sum('suara23');
        $this->db->where('id_tps',$id);
        $this->db->from('tb_suara_dpd');
        return $this->db->get();
    }
    function graf_suara_dprri_tps($id)
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('caleg_1');
        $this->db->select_sum('caleg_2');
        $this->db->select_sum('caleg_3');
        $this->db->select_sum('caleg_4');
        $this->db->select_sum('caleg_5');
        $this->db->select_sum('caleg_6');
        $this->db->select_sum('caleg_7');
        $this->db->select_sum('caleg_8');
        $this->db->select_sum('caleg_9');
        $this->db->select_sum('caleg_10');
        $this->db->where('id_tps',$id);
        $this->db->from('tb_suara_dpr_ri');
        return $this->db->get();
    }
    

    /*TES DEPENDEN*/
function fetch_provinsi()
 {
  $this->db->order_by("id_provinsi", "ASC");
  $query = $this->db->get("tb_provinsi");
  return $query->result();
 }

 function fetch_kabupaten($id_prov)
 {
  $this->db->where('id_provinsi', $id_prov);
  $this->db->order_by('nama', 'ASC');
  $query = $this->db->get('tb_kabkota');
  $output = '<option value="">Select Kabupaten</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id_kabkota.'">'.$row->nama.'</option>';
  }
  return $output;
 }

 function fetch_kecamatan($id_kabkota)
 {
  $this->db->where('id_kabkota', $id_kabkota);
  $this->db->order_by('nama', 'ASC');
  $query = $this->db->get('tb_kecamatan');
  $output = '<option value="">Select Kecamatan</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id_kecamatan.'">'.$row->nama.'</option>';
  }
  return $output;
 }
 function fetch_kelurahan($id_kecamatan)
 {
  $this->db->where('id_kec', $id_kecamatan);
  $this->db->order_by('nama', 'ASC');
  $query = $this->db->get('tb_kelurahan');
  $output = '<option value="">Select Kelurahan</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id_kelurahan.'">'.$row->nama.'</option>';
  }
  return $output;
 }

 function fetch_tps($id_kelurahan)
 {
  $this->db->where('id_kelurahan', $id_kelurahan);
  $this->db->order_by('nomor_tps', 'ASC');
  $query = $this->db->get('tb_tps');
  $output = '<option value="">Select TPS</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id_tps.'">'.$row->nomor_tps.'</option>';
  }
  return $output;
 }

 function getKelurahan($id){
    $param  =   array('id_kelurahan'=>$id);
    return $this->db->get_where('tb_kelurahan',$param);
   }
   function getKecamatan($id){
    $param  =   array('id_kecamatan'=>$id);
    return $this->db->get_where('tb_kecamatan',$param);
   }
   function getKabupaten($id){
    $param  =   array('id_kabkota'=>$id);
    return $this->db->get_where('tb_kabkota',$param);
   }


function fetch_partai()
 {
  return $this->db->get('tb_partai');
 }
 function graf_suara_dprri_tps_partai($id,$id_partai)
    {
        /*return $this->db->get('tb_suara_pilpres');*/
        $this->db->select_sum('caleg_1');
        $this->db->select_sum('caleg_2');
        $this->db->select_sum('caleg_3');
        $this->db->select_sum('caleg_4');
        $this->db->select_sum('caleg_5');
        $this->db->select_sum('caleg_6');
        $this->db->select_sum('caleg_7');
        $this->db->select_sum('caleg_8');
        $this->db->select_sum('caleg_9');
        $this->db->select_sum('caleg_10');
        $this->db->where('id_tps',$id);
        $this->db->where('id_partai',$id_partai);
        $this->db->from('tb_suara_dpr_ri');
        return $this->db->get();
    }
    
    function countPartai(){
        // $this->db->select('id_partai, count(*)');
        $this->db->from('tb_partai');
        return $this->db->count_all_results();
    }
    
    function countSaksi(){
        // $this->db->select('id_partai, count(*)');
        $this->db->from('tb_saksi');
        return $this->db->count_all_results();
    }
    
    function countTps(){
        // $this->db->select('id_partai, count(*)');
        $this->db->from('tb_tps');
        return $this->db->count_all_results();
    }



}
 ?>