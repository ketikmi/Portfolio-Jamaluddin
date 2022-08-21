<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'About Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}
