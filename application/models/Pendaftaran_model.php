<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
    private $_table = 'daftar';

    public $id_user;
    public $nama_user;
    public $kata_sandi;
    public $level_akun;
    public $tgl_buat;
    public $tgl_ubah;


    public $id_guru;
    public $nama_lengkap;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $alamat;
    public $no_telepon;
    public $foto;
    public $status;
    public $id_regional;
    public $nama_regional;

    public function getAll()
    {
        // $query = "SELECT * FROM $this->_table INNER JOIN regional";
        $query = "SELECT guru.*, regional.nama_regional, au.nama_user
                FROM sti.guru as guru  
                INNER JOIN sti.regional as regional 
                ON guru.id_regional = regional.id_regional
                INNER JOIN sti.akun_user as au 
                ON guru.id_user = au.id_user";
        return $this->db->query($query)->result();
    }

    public function getById($id)
    {
        $query = "SELECT guru.*, regional.nama_regional, akun.nama_user
         FROM $this->_table as guru  
         INNER JOIN sti.regional as regional ON guru.id_regional = regional.id_regional 
         INNER JOIN sti.akun_user AS akun ON guru.id_user = akun.id_user
         WHERE guru.id_regional = regional.id_regional && guru.id_guru = $id";
        return $this->db->query($query)->row();
    }

    public function save($table, $data)
    {
        //Insert Akun
        // $query = "INSERT INTO sti_global.akun_user(nama_user, kata_sandi, level_akun, tgl_buat) VALUES ('$guru->nama_user', md5('$guru->kata_sandi'), '$guru->level_akun', '$guru->tgl_buat')";
        // $this->db->query($query);
        // $id_akun = $this->db->insert_id();

        //Insert Guru
        // $query = "INSERT INTO sti.guru(nama_lengkap, tgl_lahir, jenis_kelamin, alamat, no_telepon, foto, status, id_regional, id_user)
        // VALUES ('$guru->nama_lengkap', '$guru->tgl_lahir', '$guru->jenis_kelamin', '$guru->alamat', '$guru->no_telepon','$guru->foto', '$guru->status', $guru->id_regional, $id_akun)";
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id(); // return last insert id
    }

    public function update($where, $data, $table)
    {
        $query = $this->db->where($where);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->_table WHERE id_guru = $id";
        return $this->db->query($query);
    }
}
