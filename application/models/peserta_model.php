<?php defined('BASEPATH') or exit('No direct script access allowed');

class peserta_model extends CI_Model
{
    private $_table = 'daftar';
    public $id;
    public $nama;
    public $tanggal_lahir;
    public $alamat;
    public $jenis_kelamin;
    public $no_telp;
    public $nama_orangtua;
    public $email;
    public $password;
    public $no_telp_ortu;
    public $status;
    public $test;

    public function getAll()
    {
        $query = "SELECT * FROM $this->_table WHERE role_id = 2";
        return $this->db->query($query)->result();
    }

    public function getById($id)
    {
        $query = "SELECT * FROM $this->_table WHERE id = $id";
        return $this->db->query($query)->row();
    }
}
