<?php
class Model_operator extends CI_Model{



    function login($username,$password)
    {
        $cek=  array('username'=>$username,'password'=>md5($password));
        return $this->db->get_where('tb_user',$cek);
        
    } 


    function tampildata()
    {
        return $this->db->get('user');
    }

    function get_one($id)
    {
        $param  =   array('usename'=>$id);
        return $this->db->get_where('operator',$param);
    }
}
