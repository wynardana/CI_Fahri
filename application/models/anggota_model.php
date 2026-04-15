<?php

class Anggota_model extends CI_Model {

    private $table = 'anggota';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

}