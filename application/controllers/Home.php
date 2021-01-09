<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home  extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home | STI Pendaftaran',
            'pages' => [
                'page_1' => 'Home'
            ]
        ];
        $this->load->view('home/header', $data);
        $this->load->view('home/index');
        $this->load->view('home/footer');
    }
}
