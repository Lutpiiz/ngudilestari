<?php
class Mlahan extends CI_Model {
    public function get_all() {
        return $this->db->get('lahan')->result_array();
    }
}
