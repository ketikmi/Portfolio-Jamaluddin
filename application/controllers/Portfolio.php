<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Portfolio Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('portfolio/index');
        $this->load->view('templates/footer');
    }
}
