<?php

class Main_model extends CI_Model {

    function view_client() {
        $this->db->select('*')
                ->from('tb_client')
                ->join('tb_logo', 'tb_logo.id_client = tb_client.id_client', 'left')
                ->join('tb_content', 'tb_content.id_client = tb_client.id_client', 'left')
                ->group_by('tb_client.id_client');
        $query = $this->db->get();
        return $query->result_array();
    }

    function content_client($id) {
        $this->db->select('*')
                ->from('tb_content')
                ->where('tb_content.id_client = ' . $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_client($id) {
        $this->db->select('*')
                ->from('tb_client')
                ->where('tb_client.id_client = ' . $id);
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>