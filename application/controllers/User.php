<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");

        $this->load->library('form_validation');

        // if (!$this->session->userdata('email')) {
        //     redirect('login');
        // }
    }


    public function index()
    {


        $data = [
            'title' => 'Home | STI Pendaftaran',
            'pages' => [
                'page_1' => 'Home'
            ],
            // 'namas' => $this->user_model->halaman_user()

            // 'namas' => $this->user_model->getById($id)
        ];
        $data['namas'] = $this->db->get_where('daftar', ['email' =>
        $this->session->userdata('emailaplikasiotp')])->row_array();

        // $data['namas'] = $this->peserta_model->halaman_user();
        // $data['namas'] = $this->db->get_where('daftar', ['email' => $this->session->userdata('email')])->row_array();
        // 'namas' => $this->peserta_model->getAll()

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/home_user', $data);
        $this->load->view('templates/user/footer');
    }


    public function pengumuman()
    {

        $data = [
            'title' => 'Pengumuman | STI Pendaftaran',
            'pages' => [
                'page_1' => 'Pengumuman'
            ],

        ];
        $data['pengumumans'] = $this->db->get_where('daftar', ['email' =>
        $this->session->userdata('emailaplikasiotp')])->row_array();
        $this->load->view('templates/user/header', $data);
        $this->load->view('user/h_pengumuman');
        $this->load->view('templates/user/footer');
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil | STI Pendaftaran',
            'pages' => [
                'page_1' => 'Profil'
            ]
            // 'profils' => $this->user_model->getAll()
        ];
        $data['profils'] = $this->db->get_where('daftar', ['email' =>
        $this->session->userdata('emailaplikasiotp')])->row_array();

        $this->load->view('templates/user/header', $data);
        $this->load->view('user/profil');
        $this->load->view('templates/user/footer');
    }
}
