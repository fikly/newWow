<?php

class Client_m extends CI_Model {

    protected $client = 'tb_client';

    function client_list() {
        $this->db->select('*');
        $this->db->from('tb_client');
        $query = $this->db->get();
        return $query;
    }

    function find_byid($id) {
        $this->db->where('id_client', $id);
        $query = $this->db->get($this->client);
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

    public function add_client($data) {
        $query = $this->db->insert($this->client, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function client_detail($id) {
        $this->db->select('*');
        $this->db->from('tb_client');
        //$this->db->join('');
        $this->db->where('tb_client.id_client', $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

    function Update_client($data, $id) {
        $this->db->where('id_client', $id);
        $query = $this->db->update($this->client, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Delete_client($id) {
        $this->db->where('id_client', $id);
        if ($this->db->delete($this->client)) {
            return true;
        } else {
            return false;
        }
    }

}

?>
