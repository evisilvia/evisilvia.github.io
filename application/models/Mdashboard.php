<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mdashboard extends CI_Model
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

    public function getAll()
    {
        $query = "SELECT * FROM $this->_table";
        return $this->db->query($query)->result();
    }

    public function total_rows_total()
    {
        return $this->db->get('daftar')->num_rows();
    }

    public function total_rows_totalL()
    {
        return $this->db->get_where('daftar', array('jenis_kelamin' => 'laki-laki'))->num_rows();
    }

    public function total_rows_totalP()
    {
        return $this->db->get_where('daftar', array('jenis_kelamin' => 'Perempuan'))->num_rows();
    }

    public function total_rows_totalS()
    {
        return $this->db->get_where('daftar', array('status' => 'Lulus'))->num_rows();
    }
}
