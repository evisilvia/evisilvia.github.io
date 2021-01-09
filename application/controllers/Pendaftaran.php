<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // public function pendaftaran() // yang ini buat ap?
    // {
    //     $data = [
    //         'title' => 'Login | STI Pendaftaran',
    //         'pages' => [
    //             'page_1' => 'Login'
    //         ]
    //     ];
    //     $this->load->view('templates/pendaftaran/header', $data);
    //     $this->load->view('login/pendaftaran');
    //     $this->load->view('templates/pendaftaran/footer');
    // }


    public function index() //masuknya langsung kesini
    {

        if ($this->session->userdata('email')) {
            redirect('login');
        }
        $data = [
            'title' => 'Login | STI Pendaftaran',
            'pages' => [
                'page_1' => 'Login'
            ]
        ];
        $this->load->view('templates/pendaftaran/header', $data);
        $this->load->view('login/pendaftaran');
        $this->load->view('templates/pendaftaran/footer');

        if (isset($_POST['daftar'])) {

            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required');
            $this->form_validation->set_rules('nama_orangtua', 'Nama Orang Tua', 'trim|required');
            $this->form_validation->set_rules('no_telp_ortu', 'No Telepon Orang Tua', 'trim|required');

            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[daftar.email]', ['is_unique' => 'This email has already registered']);
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');



            if ($this->form_validation->run() == false) {
                // $data = [
                //     'title' => 'Pendaftaran | STI Pendaftaran',
                //     'pages' => [    // $post = $this->input->post();
                //         'page_1' => 'Pendaftaran'
                //     ]
                // ];
                // $this->load->view('templates/pendaftaran/header', $data);
                // $this->load->view('login/pendaftaran');
                // $this->load->view('templates/pendaftaran/footer');
            } else {
                $data2 = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'tanggal_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                    'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                    'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                    'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                    'test' => htmlspecialchars($this->input->post('test', true)),
                    'nama_orangtua' => htmlspecialchars($this->input->post('nama_orangtua', true)),
                    'no_telp_ortu' => htmlspecialchars($this->input->post('no_telp_ortu', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'password' => md5($this->input->post('password1')),
                    'role_id' => 2,
                    // 'is_active' => 1,
                    // 'datte_created' => time()
                ];

                $this->db->insert('daftar', $data2);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                 Congratulation! your account has been created. Please Login </div>');
                redirect('login');
            }
        }
    }
}
