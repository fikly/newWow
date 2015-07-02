<?php

class Career_m extends CI_Model {

    protected $career = 'tb_career';

    function career_list() {
        $this->db->select('*');
        $this->db->from('tb_career');
        $query = $this->db->get();
        return $query;
    }

    function Career_detail($id) {
        $this->db->select('*');
        $this->db->from('tb_career');
        $this->db->where('tb_career.id_career', $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

    public function add_career($data) {
        $query = $this->db->insert($this->career, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Update_career($data, $id) {
        $this->db->where('id_career', $id);
        $query = $this->db->update($this->career, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Delete_career($id) {
        $this->db->where('id_career', $id);
        if ($this->db->delete($this->career)) {
            return true;
        } else {
            return false;
        }
    }

}

?>
