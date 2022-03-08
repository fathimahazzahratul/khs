<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iam extends CI_Controller {

    public function index()
    {
        $client_id = "4IWPHssJQG5qyuw#pzFL";
        $redirect_uri = "http://10.3.0.15/khs/chart";
        $url = 'https://iam.pln.co.id/svc-core/oauth2/auth?response_type=code&client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&scope=openid email profile empinfo phone address';

        
        return redirect($url);
    }


    public function cekuser()
    {
        $username = $_POST['USERNAME'];
        $password = $_POST['PASSWORD'];
        $query = $this->db->query("select * from tb_user where USERNAME='$username' and PASSWORD='$password' ");
        /* oke di sini kamu debug dulu querynya , kalo udah dapet , jalanin di heidisqlnya, untuk debugnya pake fitur last_query  */
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
