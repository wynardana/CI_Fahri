<?php
class Buku_model extends CI_Model {

    // ambil semua data buku + join kategori
    function get_all() {
        $this->db->join('kategori', 'kategori.id = buku.kategori_id');
        return $this->db->get('buku')->result();
    }

    // ambil data kategori untuk dropdown
    function get_kategori() {
        return $this->db->get('kategori')->result();
    }

    // simpan data buku
    function insert($data) {
        $this->db->insert('buku', $data);
    }
}