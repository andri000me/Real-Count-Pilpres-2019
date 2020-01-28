<?php
class Auth extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }

    function login()
    {
        if(isset($_POST['submit'])){

            // proses login disini
            
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('pass');
            $passmd5    = md5($password);
            $hasil= $this->model_operator->login($username,$password)->row_array();

            
            
            if($username == $hasil['username'] && $passmd5 == $hasil['password'] )
            {   
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                $_SESSION['Login'] = $username;
                redirect('Dashboard');
            }
            else
            {
              
              redirect('Welcome');
            }
        }
        
    }
    /*function periksa($level)
    {
        if ($level =='superadmin') {
            redirect('user');
        }
        else if ($level =='bendahara')
        

        {
           redirect('Dashboard');
        }
        else if($level == 'kepalasekolah')
        {
            redirect('laporan/kepsek');
        }

    }*/


    function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
