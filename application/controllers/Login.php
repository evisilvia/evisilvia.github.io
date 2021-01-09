
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("guru_master_model");
        $this->load->library('form_validation');
        $this->load->helper('string');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }

        $data = [
            'title' => 'Login| STI Pendaftaran',
            'subtitle' => 'Silahkan masuk menggunakan akun anda!'
        ];
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/login/header', $data);
            $this->load->view('login/login_user');
            $this->load->view('templates/login/footer');
        } else {
            $this->_login();
        }
    }

    function session1()
    {
        if ($this->session->userdata('statusloginaplikasiotp') == "pendinglogin") {
            redirect('login/validasi');
        }
    }

    function session2()
    {
        if ($this->session->userdata('statusloginaplikasiotp') != "pendinglogin" && $this->session->userdata('statusloginaplikasiotp') != "sukseslogin") {
            redirect('login');
        }
    }


    public function _login()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('login');
        // }

        date_default_timezone_set('Asia/Jakarta');
        $user = $this->input->post('email', TRUE);
        $pass = md5($this->input->post('password', TRUE));
        $cek = $this->db->get_where('daftar', array('email' => $user))->row_array();
        $admin =  $this->db->get_where('admin', array('email' => $user))->row_array();

        if ($cek) {
            $data = [
                'email' => $cek['email'],
                'role_id' => $cek['role_id']
            ];
            $this->session->set_userdata($data);
            // if ($data['role_id'] == 1) {
            //     redirect('admin');
            // } else if ($data['role_id'] == 2) {
            // if ($cek->num_rows() > 0) {
            // $cek = $cek->row_array();
            // if ($cek->password == $pass) {

            $datauser = $this->db->get_where('daftar', array('email' => $user, 'password' => $pass))->row();

            $datasession = array(
                'emailaplikasiotp'             => $datauser->email,
                'namaaplikasiotp'             => $datauser->nama,
                'nomorhandphoneaplikasiotp' => $datauser->no_telp,
                'statusloginaplikasiotp'     => 'pendinglogin',
            );

            $this->session->set_userdata($datasession);


            $kodeOtp =  random_string('numeric', 4);
            $tanggalSekarang = date('Y-m-d H:i:s');
            $datetime = new DateTime($tanggalSekarang);
            $datetime->modify('+10 minute');
            $tanggalKadaluarsa = $datetime->format('Y-m-d H:i:s');

            $data = array(
                'email'                 => $user,
                'kode'                     => $kodeOtp,
                'tanggal_kadaluarsa'     => $tanggalKadaluarsa,
                'status'                 => 'Y'
            );

            $this->db->insert('kodeotp', $data);


            $email_api = urlencode("evisilvia203@gmail.com");
            $passkey_api = urlencode("Hm123123");
            $no_hp_tujuan = urlencode($datauser->no_telp);
            $isi_pesan = urlencode("Kode OTP : " . $kodeOtp);

            $url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=" . $email_api . "&passkey=" . $passkey_api . "&no_tujuan=" . $no_hp_tujuan . "&pesan=" . $isi_pesan;
            $result = file_get_contents($url);
            $data = explode("~~~", $result);


            if ($data[0] == 1) {
                redirect('login/validasi');
            } else {

                $this->db->set('status', 'N');
                $this->db->where('email', $user);
                $this->db->update('kodeotp');

                $this->session->set_flashdata('gagal', "kode otp gagal dikirim, silahkan coba login kembali");
                redirect('welcome');
            }
            // } else {
            //     $this->session->set_flashdata('gagal', "Kata sandi salah");
            //     redirect('login');
            // }
            // } else {
            //     $this->session->set_flashdata('gagal', "Nama Pengguna Ditolak");
            //     redirect('welcome');
            // }
            // }
        } else if ($admin) {
            redirect('admin');
        }
    }


    public function validasi()
    {
        $data = [
            'title' => 'Peserta | STI Admin',
            'pages' => [
                'page_1' => 'Peserta'
            ]
        ];
        $this->load->view('templates/login/header', $data);
        $this->load->view('login/validasi', $data);
        $this->load->view('templates/login/footer');
    }

    public function validasiproses()
    {
        date_default_timezone_set('Asia/Jakarta');
        $user = $this->session->userdata('emailaplikasiotp');
        $kode = $this->input->post('kodeotp', TRUE);
        $waktuSekarang = date('Y-m-d H:i:s');

        $user1 = $this->input->post('email', TRUE);
        // $pass = md5($this->input->post('password', TRUE));

        $cek2 = $this->db->get_where('daftar', array('email' => $user1));

        $cek = $this->db->get_where('kodeotp', array('email' => $user, 'kode' => $kode, 'status' => 'Y'));
        if ($cek->num_rows() > 0) {
            $cek = $cek->row();

            if ($waktuSekarang > $cek->tanggal_kadaluarsa) {
                $this->session->set_flashdata('gagal', "Kode OTP tidak valid");
                redirect('welcome/validasi');
            } else {

                $datasession = array(
                    'statusloginaplikasiotp'     => 'sukseslogin',
                );

                $this->session->set_userdata($datasession);

                $this->db->set('status', 'N');
                $this->db->where('email', $user);

                $this->db->get_where('daftar', array('email' => $user1))->row_array();

                $this->db->update('kodeotp');

                redirect('user');
            }
        } else {
            $this->session->set_flashdata('gagal', "Kode OTP tidak valid");
            redirect('login/validasi');
        }
    }

    public function kirimulang()
    {
        date_default_timezone_set('Asia/Jakarta');
        $kodeOtp =  random_string('numeric', 4);
        $tanggalSekarang = date('Y-m-d H:i:s');
        $datetime = new DateTime($tanggalSekarang);
        $datetime->modify('+10 minute');
        $tanggalKadaluarsa = $datetime->format('Y-m-d H:i:s');

        $this->db->set('status', 'N');
        $this->db->where('email', $this->session->userdata('emailaplikasiotp'));
        $this->db->update('kodeotp');


        $data = array(
            'email'                 => $this->session->userdata('emailaplikasiotp'),
            'kode'                     => $kodeOtp,
            'tanggal_kadaluarsa'     => $tanggalKadaluarsa,
            'status'                 => 'Y'
        );

        $this->db->insert('kodeotp', $data);


        $email_api = urlencode("evisilvia203@gmail.com");
        $passkey_api = urlencode("Hm123123");
        $no_hp_tujuan = urlencode($this->session->userdata('nomorhandphoneaplikasiotp'));
        $isi_pesan = urlencode("Kode OTP : " . $kodeOtp);

        $url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=" . $email_api . "&passkey=" . $passkey_api . "&no_tujuan=" . $no_hp_tujuan . "&pesan=" . $isi_pesan;
        $result = file_get_contents($url);
        $data = explode("~~~", $result);

        if ($data[0] == 1) {
            $this->session->set_flashdata('sukses', "kode otp berhasil dikirim ulang");
            redirect('login/validasi');
        } else {

            $this->db->set('status', 'N');
            $this->db->where('email', $this->session->userdata('emailaplikasiotp'));
            $this->db->update('kodeotp');

            $this->session->set_flashdata('gagal', "kode otp gagal dikirim, silahkan coba login kembali");
            redirect('login/validasi');
        }
    }


    // private function _login()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('daftar', ['email' => $email])->row_array();

    //     //jika usernya ada
    //     if ($user) {
    //         //cek password
    //         if (password_verify($password, $user['password'])) {

    //             $data = [
    //                 'email' => $user['email'],
    //                 'role_id' => $user['role_id']
    //             ];
    //             $this->session->set_userdata($data);
    //             if ($data['role_id'] == 1) {
    //                 redirect('admin');
    //             } else if ($data['role_id'] == 2) {
    //                 redirect('user');
    //             }
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password</div>');
    //             redirect('login');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="height: 4px;">Username tidak terdaftar!</div>');
    //         redirect('login');
    //     }
    // }







    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered']);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');




        if ($this->form_validation->run() == false) {
            $data['title'] = 'WPU User Registration';
            $this->load->view('auth/templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('auth/templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),

                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'datte_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  Congratulation! your account has been created. Please Login </div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->cart->destroy();
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
You have been logged out! </div>');
        redirect('login');
    }

    // public function login()
    // {
    //     $data = [
    //         'title' => 'Login | STI Pendaftaran',
    //         'pages' => [
    //             'page_1' => 'Login'
    //         ]
    //     ];
    //     $this->load->view('templates/login/header', $data);
    //     $this->load->view('login/login_user');
    //     $this->load->view('templates/login/footer');
    // }
}
