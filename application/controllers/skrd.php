<?php


class skrd extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_skrd');
    }

    public function index()
    {
        $data['skrd'] = $this->m_skrd->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('skrd', $data);
        $this->load->view('templates/footer');
    }
}
