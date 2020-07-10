<?php

class M_data extends CI_Model{
    public function data_rehab(){
        $query = $this->db->query("SELECT *FROM tb_rehab");
        return $query->result();
    }

}
?>