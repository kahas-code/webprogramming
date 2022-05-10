<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_organisasi extends CI_Model {
    public function getorg(){
        // cara 1
        return $this->db->get('Tbl_organisasi',1)->row();
        // // cara 2
        // $this->db->select('*');
        // $this->db->from ('Tbl_datadiri');
        // $this->db->limit(1);
        // return $this->db->get()->row();
        // // cara 3
        // $query = 'select * from Tbl_datadiri' limit(1);
        // return $this->db->query($query);
    }
}
