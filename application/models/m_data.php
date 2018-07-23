<?php

class M_data extends CI_Model
{
    //ambil data pada tabel masuk - holis
    function ambil_data() {
        return $this->db->get('masuk');
    }

    function ambil_data2()
    {
        return $this->db->get('tb_masuk');
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data); 
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
//pagination
    function data($number, $offset) {
        return $query = $this->db->get('tb_masuk', $number, $offset)->result();
    }

    function jml_data() {
        return $this->db->get('tb_masuk')->num_rows();
    }
}
