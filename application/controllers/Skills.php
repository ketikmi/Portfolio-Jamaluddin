<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skills extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Skills Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('skills/index');
        $this->load->view('templates/footer');
    }
}
