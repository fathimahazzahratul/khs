<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }


    public function cekuser()
    {
        $username = $_POST['USERNAME'];
        $password = $_POST['PASSWORD'];
        $query = $this->db->query("select * from tb_user where USERNAME='$username' and PASSWORD='$password' ");
        
        if($query->num_rows() > 0){
            $row = $query->row();
            $data = array(
                'id'        => $row->PASSWORD,
                'username'  => $row->USERNAME
            );
            $this->session->set_userdata($data);
            redirect('chart/index');
        }else{
            echo false;
        }
    }
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Login.php */
