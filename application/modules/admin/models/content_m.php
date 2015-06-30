<?php

class Content_m extends CI_Model {

    protected $content = 'tb_content';

    function findsClient() {
        $this->db->select('*');
        $this->db->from('tb_client');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }

    function content_list() {
        $this->db->select('tb_content .*, tb_client.client');
        $this->db->from('tb_content');
        $this->db->join('tb_client', 'tb_content.id_client = tb_client.id_client');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }

    public function add_content($data) {
        $query = $this->db->insert($this->content, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function content_detail($id) {
        $this->db->select('*');
        $this->db->from('tb_content');
        //$this->db->join('');
        $this->db->where('tb_content.id_content', $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

    function Update_content($data, $id) {
        $this->db->where('id_content', $id);
        $query = $this->db->update($this->content, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Delete_content($id) {
        $this->db->where('id_content', $id);
        if ($this->db->delete($this->content)) {
            return true;
        } else {
            return false;
        }
    }

}

?>
