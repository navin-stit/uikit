<?php

class Userss extends CI_Model {
    public function showdata() {
        $query = $this->db->query("select * from users");
        //$querycount = count($query);
        //$query = $this->db->order_by('username', 'DESC');
        return $query->result();
    }
}
?>