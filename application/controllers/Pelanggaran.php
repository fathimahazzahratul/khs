<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_progress');
    }

    function inp_pel_khs()
    {
        //$data['progress'] = $this->m_progress->tambah;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('inp_pel_khs');
        $this->load->view('templates/footer');
    }

    function inp_sanksi_spj()
    {
        //$data['progress'] = $this->m_progress->tambah;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('inp_sanksi_spj');
        $this->load->view('templates/footer');
    }
}
