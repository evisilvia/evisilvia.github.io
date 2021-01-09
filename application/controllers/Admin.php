<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model("peserta_model");
        $this->load->model("pengumuman_admin_model");
        $this->load->model("detail_peserta_model");
        $this->load->model("Mdashboard");

        $this->load->library('form_validation');

        if ($this->session->userdata('email')) {
            redirect('admin');
        }
    }

    public function index()
    {

        $data = [
            'title' => 'Home | STI Admin',
            'pages' => [
                'page_1' => 'Home'
            ],
            'totals' => $this->Mdashboard->total_rows_total(),
            'totalL' => $this->Mdashboard->total_rows_totalL(),
            'totalP' => $this->Mdashboard->total_rows_totalP(),
            'totalS' => $this->Mdashboard->total_rows_totalS(),

        ];


        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/home_admin');
        $this->load->view('templates/admin/footer');
    }

    public function peserta()
    {

        $data = [
            'title' => 'Peserta | STI Admin',
            'pages' => [
                'page_1' => 'Peserta'
            ],
            'pesertas' => $this->peserta_model->getAll()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/peserta', $data);
        $this->load->view('templates/admin/footer');
    }

    public function pengumuman()
    {
        $data = [
            'title' => 'Pengumuman | STI Admin',
            'pages' => [
                'page_1' => 'Peserta'
            ],
            'pengumumans' => $this->pengumuman_admin_model->getAll()
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('templates/admin/footer');
    }

    public function detail_peserta($id)
    {
        $data = [
            'title' => 'Detail Peserta | STI Admin',
            'pages' => [
                'page_1' => 'Detail Peserta'
            ],
            'details' => $this->detail_peserta_model->getById($id)
        ];
        $this->load->view('templates/admin/header', $data);
        $this->load->view('admin/detail_peserta', $data);
        $this->load->view('templates/admin/footer');
    }

    public function ubahStatus()
    {

        $data = [
            'title' => 'Pengumuman | STI Admin',
            'pages' => [
                'page_1' => 'Pengumuman'
            ],

        ];

        $id = $this->input->post('id');
        $status = $this->input->post('status');

        for ($i = 0; $i < count($id) - 1; $i++) {
            $id_daftar = $id[$i];
            $query = "UPDATE  daftar SET status = '" . $status[$id_daftar] . "' where id = " . $id_daftar . "";
            $this->db->query($query);
        }

        redirect(base_url("Admin/pengumuman"), 'refresh');
    }
}
