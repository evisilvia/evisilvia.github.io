<?php defined('BASEPATH') or exit('No direct script access allowed');

class pengumuman_admin_model extends CI_Model
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

    public function getStatusById($id)
    {
        return $this->db->get_where('daftar', ['id' => $id])->row_array();
    }


    public function getStatus()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        for ($i = 0; $i < count($id) - 1; $i++) {
            $id_daftar = $id[$i];
            $query = "UPDATE  daftar 
            SET status = '" . $status[$id_daftar] . "' where id = " . $id_daftar . "";
            $this->db->query($query);
        }

        redirect(base_url("Admin/pengumuman"), 'refresh');
    }

    // public function update($where, $data)
    // {
    //     $query = $this->db->where($where);
    //     $query = $this->db->update($this->_table, $data);
    //     return $query;
    // }

    // function edit_data($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }


    // public function update($id, $data)
    // {
    //     $query = $this->db->where($id, 'id');
    //     $query = $this->db->update($this->_table, $data);
    //     return $query;
    // }


    // public function edit($id)
    // {

    //     $query = $this->db->where("id", $id)
    //         ->get("status");

    //     if ($query) {
    //         return $query->row();
    //     } else {
    //         return false;
    //     }
    // }

    // public function update($data, $id)
    // {

    //     $query = $this->db->update("status", $data, $id);

    //     if ($query) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


}
