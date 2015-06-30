<?php

class Logo_m extends CI_Model {

    protected $logo = 'tb_logo';

    function findsClient() {
        $this->db->select('*');
        $this->db->from('tb_client');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }

    function logo_list() {
        $this->db->select('tb_logo .*, tb_client.client');
        $this->db->from('tb_logo');
        $this->db->join('tb_client', 'tb_logo.id_client = tb_client.id_client');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }

    public function add_logo($data) {
        $query = $this->db->insert($this->logo, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function logo_detail($id) {
        $this->db->select('*');
        $this->db->from('tb_logo');
        //$this->db->join('');
        $this->db->where('tb_logo.id_logo', $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

    function Update_logo($data, $id) {
        $this->db->where('id_logo', $id);
        $query = $this->db->update($this->logo, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Delete_logo($id) {
        $this->db->where('id_logo', $id);
        if ($this->db->delete($this->logo)) {
            return true;
        } else {
            return false;
        }
    }

}

?>
